<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HoFeedback */

$this->title = Yii::t('app', 'Update Ho Feedback: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ho Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ho-feedback-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
