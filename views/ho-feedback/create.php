<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HoFeedback */

$this->title = Yii::t('app', 'Create Ho Feedback');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ho Feedbacks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ho-feedback-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
