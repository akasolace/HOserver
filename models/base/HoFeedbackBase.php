<?php

namespace app\models\base;

use Yii;
use app\models\User;
use app\models\HoFeedbackSystemInfo;
use app\models\HoFeedbackRating;
use app\models\HoFeedbackPlayer;
use app\models\HoFeedbackPosition;

/**
 * This is the model class for table "{{%ho_feedback}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $json_objects
 * @property int $elaborated
 * @property int $manual_elaboration
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property HoFeedbackPlayer[] $hoFeedbackPlayers
 * @property HoFeedbackPosition $hoFeedbackPosition
 * @property HoFeedbackRating $hoFeedbackRating
 * @property HoFeedbackSystemInfo $hoFeedbackSystemInfo
 */
class HoFeedbackBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'elaborated', 'manual_elaboration'], 'integer'],
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
            'json_objects' => Yii::t('app', 'Json Objects'),
            'elaborated' => Yii::t('app', 'Elaborated'),
            'manual_elaboration' => Yii::t('app', 'Manual Elaboration'),
        ];
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
    public function getHoFeedbackPlayers()
    {
        return $this->hasMany(HoFeedbackPlayer::className(), ['id_ho_feedback' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackPosition()
    {
        return $this->hasOne(HoFeedbackPosition::className(), ['id_ho_feedback' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackRating()
    {
        return $this->hasOne(HoFeedbackRating::className(), ['id_ho_feedback' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoFeedbackSystemInfo()
    {
        return $this->hasOne(HoFeedbackSystemInfo::className(), ['id_ho_feedback' => 'id']);
    }
}
