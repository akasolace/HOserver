<?php

namespace app\controllers;

use app\models\HoFeedbackSystemInfo;
use Yii;
use app\models\HoFeedback;
use app\models\search\HoFeedbackSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HoFeedbackController implements the CRUD actions for HoFeedback model.
 */
class HoFeedbackController extends Controller
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
                    'actions' => ['create'],
                    'roles' => ['@'],
                ],
                [
                    'allow' => true,
                    'actions' => ['update', 'index', 'view', 'delete', 'update-jsonobject', 'update-all-jsonobject'],
                    'roles' => ['manageHoFeedback'],
                ],
            ],
        ];
        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['POST'],
                'update-jsonobject' => ['POST'],
            ],

        ];
        return $behaviors;
    }

    /**
     * Lists all HoFeedback models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HoFeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HoFeedback model.
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
     * Creates a new HoFeedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HoFeedback();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HoFeedback model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HoFeedback model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if (isset($model->hoFeedbackSystemInfo)) {
            $model->hoFeedbackSystemInfo->delete();
        }
        if (isset($model->hoFeedbackRating)) {
            $model->hoFeedbackRating->delete();
        }
        if (isset($model->hoFeedbackPosition)) {
            $model->hoFeedbackPosition->delete();
        }
        if (isset($model->hoFeedbackPlayers) && is_array($model->hoFeedbackPlayers)) {
            foreach ($model->hoFeedbackPlayers as $p) {
                $p->delete();
            }
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HoFeedback model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HoFeedback the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HoFeedback::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    /**
     * @param $id
     * @return int
     * @throws NotFoundHttpException
     */
    public function actionUpdateJsonobject($id)
    {
        $model = $this->findModel($id);
        if ($model->manual_elaboration && !$model->elaborated) {
            $model->elaborateJsonObjects("ho_token-manual_called");
            $model->manual_elaboration = 0;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        throw new MethodNotAllowedHttpException('Operation does not allowed, you have to set manual_elaboration = true, and elaborated=false');
    }

    public function actionUpdateAllJsonobject()
    {
        foreach (HoFeedback::findAll(['elaborated' => 0, 'manual_elaboration' => 1]) as $f) {
            $model = $this->findModel($f->id);
            $model->elaborateJsonObjects("ho_token-manual_called");
            $model->manual_elaboration = 0;
            $model->save();
        }
        return $this->redirect(['index']);
    }
}
