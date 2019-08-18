<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\HoFeedbackResultViewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ho-feedback-result-view-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'created_by') ?>

    <?= $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'elaborated') ?>

    <?php // echo $form->field($model, 'manual_elaboration') ?>

    <?php // echo $form->field($model, 'os') ?>

    <?php // echo $form->field($model, 'ho_version') ?>

    <?php // echo $form->field($model, 'java_version') ?>

    <?php // echo $form->field($model, 'ho_token') ?>

    <?php // echo $form->field($model, 'leftDefense') ?>

    <?php // echo $form->field($model, 'centralDefense') ?>

    <?php // echo $form->field($model, 'rightDefense') ?>

    <?php // echo $form->field($model, 'midfield') ?>

    <?php // echo $form->field($model, 'leftAttack') ?>

    <?php // echo $form->field($model, 'centralAttack') ?>

    <?php // echo $form->field($model, 'rightAttack') ?>

    <?php // echo $form->field($model, 'id_ho_feedback') ?>

    <?php // echo $form->field($model, 'position_id_gk') ?>

    <?php // echo $form->field($model, 'gk_id') ?>

    <?php // echo $form->field($model, 'gk_experience') ?>

    <?php // echo $form->field($model, 'gk_form') ?>

    <?php // echo $form->field($model, 'gk_stamina') ?>

    <?php // echo $form->field($model, 'gk_keeper') ?>

    <?php // echo $form->field($model, 'gk_playmaking') ?>

    <?php // echo $form->field($model, 'gk_passing') ?>

    <?php // echo $form->field($model, 'gk_winger') ?>

    <?php // echo $form->field($model, 'gk_defending') ?>

    <?php // echo $form->field($model, 'gk_scoring') ?>

    <?php // echo $form->field($model, 'gk_set_pieces') ?>

    <?php // echo $form->field($model, 'gk_loyalty') ?>

    <?php // echo $form->field($model, 'gk_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_cd_left') ?>

    <?php // echo $form->field($model, 'cd_left_id') ?>

    <?php // echo $form->field($model, 'cd_left_experience') ?>

    <?php // echo $form->field($model, 'cd_left_form') ?>

    <?php // echo $form->field($model, 'cd_left_stamina') ?>

    <?php // echo $form->field($model, 'cd_left_keeper') ?>

    <?php // echo $form->field($model, 'cd_left_playmaking') ?>

    <?php // echo $form->field($model, 'cd_left_passing') ?>

    <?php // echo $form->field($model, 'cd_left_winger') ?>

    <?php // echo $form->field($model, 'cd_left_defending') ?>

    <?php // echo $form->field($model, 'cd_left_scoring') ?>

    <?php // echo $form->field($model, 'cd_left_set_pieces') ?>

    <?php // echo $form->field($model, 'cd_left_loyalty') ?>

    <?php // echo $form->field($model, 'cd_left_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_cd_central') ?>

    <?php // echo $form->field($model, 'cd_central_id') ?>

    <?php // echo $form->field($model, 'cd_central_experience') ?>

    <?php // echo $form->field($model, 'cd_central_form') ?>

    <?php // echo $form->field($model, 'cd_central_stamina') ?>

    <?php // echo $form->field($model, 'cd_central_keeper') ?>

    <?php // echo $form->field($model, 'cd_central_playmaking') ?>

    <?php // echo $form->field($model, 'cd_central_passing') ?>

    <?php // echo $form->field($model, 'cd_central_winger') ?>

    <?php // echo $form->field($model, 'cd_central_defending') ?>

    <?php // echo $form->field($model, 'cd_central_scoring') ?>

    <?php // echo $form->field($model, 'cd_central_set_pieces') ?>

    <?php // echo $form->field($model, 'cd_central_loyalty') ?>

    <?php // echo $form->field($model, 'cd_central_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_cd_right') ?>

    <?php // echo $form->field($model, 'cd_right_id') ?>

    <?php // echo $form->field($model, 'cd_right_experience') ?>

    <?php // echo $form->field($model, 'cd_right_form') ?>

    <?php // echo $form->field($model, 'cd_right_stamina') ?>

    <?php // echo $form->field($model, 'cd_right_keeper') ?>

    <?php // echo $form->field($model, 'cd_right_playmaking') ?>

    <?php // echo $form->field($model, 'cd_right_passing') ?>

    <?php // echo $form->field($model, 'cd_right_winger') ?>

    <?php // echo $form->field($model, 'cd_right_defending') ?>

    <?php // echo $form->field($model, 'cd_right_scoring') ?>

    <?php // echo $form->field($model, 'cd_right_set_pieces') ?>

    <?php // echo $form->field($model, 'cd_right_loyalty') ?>

    <?php // echo $form->field($model, 'cd_right_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_wb_left') ?>

    <?php // echo $form->field($model, 'wb_left_id') ?>

    <?php // echo $form->field($model, 'wb_left_experience') ?>

    <?php // echo $form->field($model, 'wb_left_form') ?>

    <?php // echo $form->field($model, 'wb_left_stamina') ?>

    <?php // echo $form->field($model, 'wb_left_keeper') ?>

    <?php // echo $form->field($model, 'wb_left_playmaking') ?>

    <?php // echo $form->field($model, 'wb_left_passing') ?>

    <?php // echo $form->field($model, 'wb_left_winger') ?>

    <?php // echo $form->field($model, 'wb_left_defending') ?>

    <?php // echo $form->field($model, 'wb_left_scoring') ?>

    <?php // echo $form->field($model, 'wb_left_set_pieces') ?>

    <?php // echo $form->field($model, 'wb_left_loyalty') ?>

    <?php // echo $form->field($model, 'wb_left_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_wb_right') ?>

    <?php // echo $form->field($model, 'wb_right_id') ?>

    <?php // echo $form->field($model, 'wb_right_experience') ?>

    <?php // echo $form->field($model, 'wb_right_form') ?>

    <?php // echo $form->field($model, 'wb_right_stamina') ?>

    <?php // echo $form->field($model, 'wb_right_keeper') ?>

    <?php // echo $form->field($model, 'wb_right_playmaking') ?>

    <?php // echo $form->field($model, 'wb_right_passing') ?>

    <?php // echo $form->field($model, 'wb_right_winger') ?>

    <?php // echo $form->field($model, 'wb_right_defending') ?>

    <?php // echo $form->field($model, 'wb_right_scoring') ?>

    <?php // echo $form->field($model, 'wb_right_set_pieces') ?>

    <?php // echo $form->field($model, 'wb_right_loyalty') ?>

    <?php // echo $form->field($model, 'wb_right_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_im_left') ?>

    <?php // echo $form->field($model, 'im_left_id') ?>

    <?php // echo $form->field($model, 'im_left_experience') ?>

    <?php // echo $form->field($model, 'im_left_form') ?>

    <?php // echo $form->field($model, 'im_left_stamina') ?>

    <?php // echo $form->field($model, 'im_left_keeper') ?>

    <?php // echo $form->field($model, 'im_left_playmaking') ?>

    <?php // echo $form->field($model, 'im_left_passing') ?>

    <?php // echo $form->field($model, 'im_left_winger') ?>

    <?php // echo $form->field($model, 'im_left_defending') ?>

    <?php // echo $form->field($model, 'im_left_scoring') ?>

    <?php // echo $form->field($model, 'im_left_set_pieces') ?>

    <?php // echo $form->field($model, 'im_left_loyalty') ?>

    <?php // echo $form->field($model, 'im_left_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_im_central') ?>

    <?php // echo $form->field($model, 'im_central_id') ?>

    <?php // echo $form->field($model, 'im_central_experience') ?>

    <?php // echo $form->field($model, 'im_central_form') ?>

    <?php // echo $form->field($model, 'im_central_stamina') ?>

    <?php // echo $form->field($model, 'im_central_keeper') ?>

    <?php // echo $form->field($model, 'im_central_playmaking') ?>

    <?php // echo $form->field($model, 'im_central_passing') ?>

    <?php // echo $form->field($model, 'im_central_winger') ?>

    <?php // echo $form->field($model, 'im_central_defending') ?>

    <?php // echo $form->field($model, 'im_central_scoring') ?>

    <?php // echo $form->field($model, 'im_central_set_pieces') ?>

    <?php // echo $form->field($model, 'im_central_loyalty') ?>

    <?php // echo $form->field($model, 'im_central_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_im_right') ?>

    <?php // echo $form->field($model, 'im_right_id') ?>

    <?php // echo $form->field($model, 'im_right_experience') ?>

    <?php // echo $form->field($model, 'im_right_form') ?>

    <?php // echo $form->field($model, 'im_right_stamina') ?>

    <?php // echo $form->field($model, 'im_right_keeper') ?>

    <?php // echo $form->field($model, 'im_right_playmaking') ?>

    <?php // echo $form->field($model, 'im_right_passing') ?>

    <?php // echo $form->field($model, 'im_right_winger') ?>

    <?php // echo $form->field($model, 'im_right_defending') ?>

    <?php // echo $form->field($model, 'im_right_scoring') ?>

    <?php // echo $form->field($model, 'im_right_set_pieces') ?>

    <?php // echo $form->field($model, 'im_right_loyalty') ?>

    <?php // echo $form->field($model, 'im_right_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_w_left') ?>

    <?php // echo $form->field($model, 'w_left_id') ?>

    <?php // echo $form->field($model, 'w_left_experience') ?>

    <?php // echo $form->field($model, 'w_left_form') ?>

    <?php // echo $form->field($model, 'w_left_stamina') ?>

    <?php // echo $form->field($model, 'w_left_keeper') ?>

    <?php // echo $form->field($model, 'w_left_playmaking') ?>

    <?php // echo $form->field($model, 'w_left_passing') ?>

    <?php // echo $form->field($model, 'w_left_winger') ?>

    <?php // echo $form->field($model, 'w_left_defending') ?>

    <?php // echo $form->field($model, 'w_left_scoring') ?>

    <?php // echo $form->field($model, 'w_left_set_pieces') ?>

    <?php // echo $form->field($model, 'w_left_loyalty') ?>

    <?php // echo $form->field($model, 'w_left_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_w_right') ?>

    <?php // echo $form->field($model, 'w_right_id') ?>

    <?php // echo $form->field($model, 'w_right_experience') ?>

    <?php // echo $form->field($model, 'w_right_form') ?>

    <?php // echo $form->field($model, 'w_right_stamina') ?>

    <?php // echo $form->field($model, 'w_right_keeper') ?>

    <?php // echo $form->field($model, 'w_right_playmaking') ?>

    <?php // echo $form->field($model, 'w_right_passing') ?>

    <?php // echo $form->field($model, 'w_right_winger') ?>

    <?php // echo $form->field($model, 'w_right_defending') ?>

    <?php // echo $form->field($model, 'w_right_scoring') ?>

    <?php // echo $form->field($model, 'w_right_set_pieces') ?>

    <?php // echo $form->field($model, 'w_right_loyalty') ?>

    <?php // echo $form->field($model, 'w_right_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_fw_left') ?>

    <?php // echo $form->field($model, 'fw_left_id') ?>

    <?php // echo $form->field($model, 'fw_left_experience') ?>

    <?php // echo $form->field($model, 'fw_left_form') ?>

    <?php // echo $form->field($model, 'fw_left_stamina') ?>

    <?php // echo $form->field($model, 'fw_left_keeper') ?>

    <?php // echo $form->field($model, 'fw_left_playmaking') ?>

    <?php // echo $form->field($model, 'fw_left_passing') ?>

    <?php // echo $form->field($model, 'fw_left_winger') ?>

    <?php // echo $form->field($model, 'fw_left_defending') ?>

    <?php // echo $form->field($model, 'fw_left_scoring') ?>

    <?php // echo $form->field($model, 'fw_left_set_pieces') ?>

    <?php // echo $form->field($model, 'fw_left_loyalty') ?>

    <?php // echo $form->field($model, 'fw_left_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_fw_central') ?>

    <?php // echo $form->field($model, 'fw_central_id') ?>

    <?php // echo $form->field($model, 'fw_central_experience') ?>

    <?php // echo $form->field($model, 'fw_central_form') ?>

    <?php // echo $form->field($model, 'fw_central_stamina') ?>

    <?php // echo $form->field($model, 'fw_central_keeper') ?>

    <?php // echo $form->field($model, 'fw_central_playmaking') ?>

    <?php // echo $form->field($model, 'fw_central_passing') ?>

    <?php // echo $form->field($model, 'fw_central_winger') ?>

    <?php // echo $form->field($model, 'fw_central_defending') ?>

    <?php // echo $form->field($model, 'fw_central_scoring') ?>

    <?php // echo $form->field($model, 'fw_central_set_pieces') ?>

    <?php // echo $form->field($model, 'fw_central_loyalty') ?>

    <?php // echo $form->field($model, 'fw_central_mother_club') ?>

    <?php // echo $form->field($model, 'position_id_fw_right') ?>

    <?php // echo $form->field($model, 'fw_right_id') ?>

    <?php // echo $form->field($model, 'fw_right_experience') ?>

    <?php // echo $form->field($model, 'fw_right_form') ?>

    <?php // echo $form->field($model, 'fw_right_stamina') ?>

    <?php // echo $form->field($model, 'fw_right_keeper') ?>

    <?php // echo $form->field($model, 'fw_right_playmaking') ?>

    <?php // echo $form->field($model, 'fw_right_passing') ?>

    <?php // echo $form->field($model, 'fw_right_winger') ?>

    <?php // echo $form->field($model, 'fw_right_defending') ?>

    <?php // echo $form->field($model, 'fw_right_scoring') ?>

    <?php // echo $form->field($model, 'fw_right_set_pieces') ?>

    <?php // echo $form->field($model, 'fw_right_loyalty') ?>

    <?php // echo $form->field($model, 'fw_right_mother_club') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
