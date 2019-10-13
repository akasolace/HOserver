<?php

namespace app\models\base;

use Yii;
use app\models\User;
use app\models\HoFeedback;
use app\models\HoFeedbackPosition;

/**
 * This is the model class for table "{{%ho_feedback_player}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $playerID
 * @property int $tsi
 * @property int $age
 * @property int $age_days
 * @property double $experience
 * @property double $form
 * @property double $stamina
 * @property int $injury_status
 * @property double $keeper
 * @property double $playmaking
 * @property double $passing
 * @property double $winger
 * @property double $defending
 * @property double $scoring
 * @property double $set_pieces
 * @property double $loyalty
 * @property int $mother_club
 * @property int $id_ho_feedback
 *
 * @property HoFeedback $hoFeedback
 * @property User $createdBy
 * @property User $updatedBy
 * @property HoFeedbackPosition[] $hoFeedbackPositions
 * @property HoFeedbackPosition[] $hoFeedbackPositions0
 * @property HoFeedbackPosition[] $hoFeedbackPositions1
 * @property HoFeedbackPosition[] $hoFeedbackPositions2
 * @property HoFeedbackPosition[] $hoFeedbackPositions3
 * @property HoFeedbackPosition[] $hoFeedbackPositions4
 * @property HoFeedbackPosition[] $hoFeedbackPositions5
 * @property HoFeedbackPosition[] $hoFeedbackPositions6
 * @property HoFeedbackPosition[] $hoFeedbackPositions7
 * @property HoFeedbackPosition[] $hoFeedbackPositions8
 * @property HoFeedbackPosition[] $hoFeedbackPositions9
 * @property HoFeedbackPosition[] $hoFeedbackPositions10
 * @property HoFeedbackPosition[] $hoFeedbackPositions11
 * @property HoFeedbackPosition[] $hoFeedbackPositions12
 */
class HoFeedbackPlayerBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback_player}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'playerID', 'tsi', 'age', 'age_days', 'injury_status', 'mother_club', 'id_ho_feedback'], 'integer'],
            [['experience', 'form', 'stamina', 'keeper', 'playmaking', 'passing', 'winger', 'defending', 'scoring', 'set_pieces', 'loyalty'], 'number'],
            [['id_ho_feedback'], 'required'],
            [['id_ho_feedback'], 'exist', 'skipOnError' => true, 'targetClass' => HoFeedback::className(), 'targetAttribute' => ['id_ho_feedback' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
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
            'playerID' => Yii::t('app', 'Player ID'),
            'tsi' => Yii::t('app', 'Tsi'),
            'age' => Yii::t('app', 'Age'),
            'age_days' => Yii::t('app', 'Age Days'),
            'experience' => Yii::t('app', 'Experience'),
            'form' => Yii::t('app', 'Form'),
            'stamina' => Yii::t('app', 'Stamina'),
            'injury_status' => Yii::t('app', 'Injury Status'),
            'keeper' => Yii::t('app', 'Keeper'),
            'playmaking' => Yii::t('app', 'Playmaking'),
            'passing' => Yii::t('app', 'Passing'),
            'winger' => Yii::t('app', 'Winger'),
            'defending' => Yii::t('app', 'Defending'),
            'scoring' => Yii::t('app', 'Scoring'),
            'set_pieces' => Yii::t('app', 'Set Pieces'),
            'loyalty' => Yii::t('app', 'Loyalty'),
            'mother_club' => Yii::t('app', 'Mother Club'),
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
    public function getHoFeedbackPositions()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_im_left' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions0()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_im_central' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions1()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_im_right' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions2()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_w_left' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions3()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_w_right' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions4()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_fw_left' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions5()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_fw_central' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions6()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_fw_right' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions7()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_gk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions8()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_cd_left' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions9()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_cd_central' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions10()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_cd_right' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions11()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_wb_left' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPositions12()
    {
        return $this->hasMany(HoFeedbackPosition::className(), ['id_wb_right' => 'id']);
    }
}
