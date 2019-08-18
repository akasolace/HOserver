<?php

namespace app\models\base;

use Yii;
use app\models\User;
use app\models\HoFeedback;
use app\models\HoFeedbackPlayer;

/**
 * This is the model class for table "{{%ho_feedback_position}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $id_gk "m_iId": 100
 * @property int $id_cd_left "m_iId": 104
 * @property int $id_cd_central "m_iId": 103
 * @property int $id_cd_right "m_iId": 102
 * @property int $id_wb_left "m_iId": 105
 * @property int $id_wb_right "m_iId": 101
 * @property int $id_im_left "m_iId": 109
 * @property int $id_im_central "m_iId": 108
 * @property int $id_im_right "m_iId": 107
 * @property int $id_w_left "m_iId": 110
 * @property int $id_w_right "m_iId": 106
 * @property int $id_fw_left "m_iId": 113
 * @property int $id_fw_central "m_iId": 112
 * @property int $id_fw_right "m_iId": 111
 * @property int $id_ho_feedback
 *
 * @property HoFeedback $hoFeedback
 * @property HoFeedbackPlayer $imLeft
 * @property HoFeedbackPlayer $imCentral
 * @property HoFeedbackPlayer $imRight
 * @property HoFeedbackPlayer $wLeft
 * @property HoFeedbackPlayer $wRight
 * @property HoFeedbackPlayer $fwLeft
 * @property HoFeedbackPlayer $fwCentral
 * @property HoFeedbackPlayer $fwRight
 * @property User $createdBy
 * @property User $updatedBy
 * @property HoFeedbackPlayer $gk
 * @property HoFeedbackPlayer $cdLeft
 * @property HoFeedbackPlayer $cdCentral
 * @property HoFeedbackPlayer $cdRight
 * @property HoFeedbackPlayer $wbLeft
 * @property HoFeedbackPlayer $wbRight
 */
class HoFeedbackPositionBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback_position}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'id_gk', 'id_cd_left', 'id_cd_central', 'id_cd_right', 'id_wb_left', 'id_wb_right', 'id_im_left', 'id_im_central', 'id_im_right', 'id_w_left', 'id_w_right', 'id_fw_left', 'id_fw_central', 'id_fw_right', 'id_ho_feedback'], 'integer'],
            [['id_ho_feedback'], 'required'],
            [['id_ho_feedback'], 'unique'],
            [['id_ho_feedback'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedback::className(), 'targetAttribute' => ['id_ho_feedback' => 'id']],
            [['id_im_left'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_im_left' => 'id']],
            [['id_im_central'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_im_central' => 'id']],
            [['id_im_right'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_im_right' => 'id']],
            [['id_w_left'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_w_left' => 'id']],
            [['id_w_right'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_w_right' => 'id']],
            [['id_fw_left'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_fw_left' => 'id']],
            [['id_fw_central'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_fw_central' => 'id']],
            [['id_fw_right'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_fw_right' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['id_gk'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_gk' => 'id']],
            [['id_cd_left'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_cd_left' => 'id']],
            [['id_cd_central'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_cd_central' => 'id']],
            [['id_cd_right'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_cd_right' => 'id']],
            [['id_wb_left'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_wb_left' => 'id']],
            [['id_wb_right'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedbackPlayer::className(), 'targetAttribute' => ['id_wb_right' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'id_gk' => Yii::t('app', 'Id Gk'),
            'id_cd_left' => Yii::t('app', 'Id Cd Left'),
            'id_cd_central' => Yii::t('app', 'Id Cd Central'),
            'id_cd_right' => Yii::t('app', 'Id Cd Right'),
            'id_wb_left' => Yii::t('app', 'Id Wb Left'),
            'id_wb_right' => Yii::t('app', 'Id Wb Right'),
            'id_im_left' => Yii::t('app', 'Id Im Left'),
            'id_im_central' => Yii::t('app', 'Id Im Central'),
            'id_im_right' => Yii::t('app', 'Id Im Right'),
            'id_w_left' => Yii::t('app', 'Id W Left'),
            'id_w_right' => Yii::t('app', 'Id W Right'),
            'id_fw_left' => Yii::t('app', 'Id Fw Left'),
            'id_fw_central' => Yii::t('app', 'Id Fw Central'),
            'id_fw_right' => Yii::t('app', 'Id Fw Right'),
            'id_ho_feedback' => Yii::t('app', 'Id Ho Feedback'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedback()
    {
        return $this->hasOne(HoFeedback::className(), ['id' => 'id_ho_feedback']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImLeft()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_im_left']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImCentral()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_im_central']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImRight()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_im_right']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWLeft()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_w_left']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWRight()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_w_right']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFwLeft()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_fw_left']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFwCentral()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_fw_central']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFwRight()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_fw_right']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGk()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_gk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdLeft()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_cd_left']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdCentral()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_cd_central']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdRight()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_cd_right']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWbLeft()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_wb_left']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWbRight()
    {
        return $this->hasOne(HoFeedbackPlayer::className(), ['id' => 'id_wb_right']);
    }
}
