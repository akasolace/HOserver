<?php

namespace app\models\base;

use Yii;
use app\models\User;
use app\models\HoFeedback;

/**
 * This is the model class for table "{{%ho_feedback_system_info}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $os
 * @property string $ho_version
 * @property string $java_version
 * @property string $ho_token
 * @property string $lineupName
 * @property int $id_ho_feedback
 *
 * @property HoFeedback $hoFeedback
 * @property User $createdBy
 * @property User $updatedBy
 */
class HoFeedbackSystemInfoBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback_system_info}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'id_ho_feedback'], 'integer'],
            [['os', 'ho_version', 'java_version', 'ho_token', 'lineupName', 'id_ho_feedback'], 'required'],
            [['os', 'ho_version', 'java_version', 'ho_token'], 'string', 'max' => 255],
            [['lineupName'], 'string', 'max' => 64],
            [['id_ho_feedback'], 'unique'],
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
            'os' => Yii::t('app', 'Os'),
            'ho_version' => Yii::t('app', 'Ho Version'),
            'java_version' => Yii::t('app', 'Java Version'),
            'ho_token' => Yii::t('app', 'Ho Token'),
            'lineupName' => Yii::t('app', 'Lineup Name'),
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
}
