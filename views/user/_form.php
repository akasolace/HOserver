<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aut_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>

    <?= (!Yii::$app->user->can('updateUser', ['id' => Yii::$app->user->identity->getId()])) ? (
            $form->field($model, 'roles')->textInput(['maxlength' => true])->label(
            Yii::t('app', 'Roles') . ': ' . $model->getAvailableRoles(),
                ['class' => 'label-class'])) : ('') ?>

    <?= (!Yii::$app->user->can('updateUser', ['id' => Yii::$app->user->identity->getId()])) ? (
            $form->field($model, 'deactive')->textInput()) : ('') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
