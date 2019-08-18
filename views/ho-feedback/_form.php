<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HoFeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ho-feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'elaborated')->textInput() ?>

    <?= $form->field($model, 'manual_elaboration')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
