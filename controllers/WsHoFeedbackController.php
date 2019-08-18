<?php

namespace app\controllers;

use app\models\HoFeedback;
use app\models\HoFeedbackResult;
use Yii;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\helpers\Json;
use yii\rest\ActiveController;
use yii\web\ServerErrorHttpException;

class WsHoFeedbackController extends ActiveController
{
    public $modelClass = 'app\models\UserFeedback';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create'], $actions['update'], $actions['delete']);
        return $actions;
    }

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            //       'update' => ['PUT', 'PATCH'],
            //       'delete' => ['DELETE'],
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBasicAuth::className(),
            ],
        ];
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => false,
                    'roles' => ['?'],
                ],
                [
                    'allow' => true,
                    'roles' => ['manageWsHoFeedback'],
                ],
                [
                    'allow' => true,
                    'actions' => ['create'],
                    'roles' => ['createWsHoFeedback'],
                ],
            ],
        ];
        return $behaviors;
    }

    public function actionCreate()
    {
        $result = new HoFeedbackResult();
        $hoToken = Yii::$app->getRequest()->getHeaders()['HO-Token'];
        if (empty($hoToken)) {
            $hoToken = 'ho_token-no_ho_called';
        }
        Yii::info('[' . $hoToken . ']' . 'Request from ' . Yii::$app->getRequest()->getUserAgent(), __METHOD__);

        $hoFeedback = new HoFeedback();
        //$hoFeedback->load(Yii::$app->getRequest()->getBodyParams(), '') &&
        $hoFeedback->json_objects = Json::encode(Yii::$app->getRequest()->getBodyParams()['json_objects']);

        if ($hoFeedback->save()) {
            Yii::info('[' . $hoToken . ']' . 'UserFeedback created successfully, id:' . $hoFeedback->id, __METHOD__);
/*
            $jsonObjects = $hoFeedback->json_objects;
            if (is_array($jsonObjects)) {
                Yii::info('[' . $hoToken . ']' . 'Passing native json_objects', __METHOD__);
            } else {
                try {
                    $jsonObjects = Json::decode($jsonObjects, true);
                    $hoFeedback->json_objects = $jsonObjects;
                    $hoFeedback->save();
                    Yii::info('[' . $hoToken . ']' . 'No passing native json_objects, decoded it and updated it', __METHOD__);
                } catch (\Exception $e) {
                    Yii::error('[' . $hoToken . ']' . 'The error on Json_Object format:' . $e->getMessage(), __METHOD__);
                    throw new ServerErrorHttpException('[' . $hoToken . ']' . 'The error on Json_Object format:' . $e->getMessage());
                }
            }
*/
            $result = $hoFeedback->elaborateJsonObjects($hoToken);
            if ($result->idRating && $result->idRating && $result->idSysInfo) {
                $result->result = 1;
            } elseif ($result->idRating) {
                $result->result = 0;
            }

            $response = Yii::$app->getResponse();
            $response->setStatusCode(201);
        } elseif ($hoFeedback->hasErrors()) {
            $errors = print_r($hoFeedback->errors, true);
            Yii::error('[' . $hoToken . ']' . 'Failed to create the object for unknown reason. Errors:' . $errors, __METHOD__);
            throw new ServerErrorHttpException('Failed to create the object for unknown reason. Errors:' . $errors);
        }
        return $result;
    }

    /*
     *
    200: OK. Everything worked as expected.
    201: A resource was successfully created in response to a POST request. The Location header contains the URL pointing to the newly created resource.
    204: The request was handled successfully and the response contains no body content (like a DELETE request).
    304: The resource was not modified. You can use the cached version.
    400: Bad request. This could be caused by various actions by the user, such as providing invalid JSON data in the request body, providing invalid action parameters, etc.
    401: Authentication failed.
    403: The authenticated user is not allowed to access the specified API endpoint.
    404: The requested resource does not exist.
    405: Method not allowed. Please check the Allow header for the allowed HTTP methods.
    415: Unsupported media type. The requested content type or version number is invalid.
    422: Data validation failed (in response to a POST request, for example). Please check the response body for detailed error messages.
    429: Too many requests. The request was rejected due to rate limiting.
    500: Internal server error. This could be caused by internal program errors.
     */
}
