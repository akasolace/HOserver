<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\HoFeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ho Feedbacks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ho-feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= Html::a(Yii::t('app', 'Re-process All'), ['ho-feedback/update-all-jsonobject'], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => Yii::t('app', 'Are you sure you want to reprocess all?'),
            'method' => 'post',
        ],
    ]) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'updated_at',
            [
                'label' => 'Created By',
                'attribute' => 'createdBy.username'
            ],
            [
                'label' => 'Updated By',
                'attribute' => 'updatedBy.username'
            ],
            //'json_objects',
            'elaborated:boolean',
            'manual_elaboration:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
