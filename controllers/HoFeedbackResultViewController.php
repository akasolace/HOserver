<?php

namespace app\controllers;

use Yii;
use app\models\HoFeedbackResultView;
use app\models\search\HoFeedbackResultViewSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HoFeedbackResultViewController implements the CRUD actions for HoFeedbackResultView model.
 */
class HoFeedbackResultViewController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => false,
                    'roles' => ['?'],
                ],
                [
                    'allow' => false,
                    'actions' => ['create', 'update', 'delete'],
                    'roles' => ['@'],
                ],
                [
                    'allow' => true,
                    'actions' => ['index', 'view'],
                    'roles' => ['manageHoFeedback'],
                ],
            ],
        ];
        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['POST'],
            ],

        ];
        return $behaviors;
    }

    /**
     * Lists all HoFeedbackResultView models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HoFeedbackResultViewSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HoFeedbackResultView model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the HoFeedbackResultView model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HoFeedbackResultView the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HoFeedbackResultView::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
