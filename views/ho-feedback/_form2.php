<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HoFeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ho-feedback-form">

    <?php $form = ActiveForm::begin(([
        'action' => ['ho-feedback/update-jsonobject', 'id' => $model->id]
    ])) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Re-Process', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
