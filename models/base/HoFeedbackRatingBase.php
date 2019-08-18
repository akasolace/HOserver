<?php

namespace app\models\base;

use Yii;
use app\models\User;
use app\models\HoFeedback;

/**
 * This is the model class for table "{{%ho_feedback_rating}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property double $leftDefense
 * @property double $centralDefense
 * @property double $rightDefense
 * @property double $midfield
 * @property double $leftAttack
 * @property double $centralAttack
 * @property double $rightAttack
 * @property int $tacticType
 * @property int $tacticSkill
 * @property int $attitude
 * @property int $style_of_play
 * @property int $id_ho_feedback
 *
 * @property HoFeedback $hoFeedback
 * @property User $createdBy
 * @property User $updatedBy
 */
class HoFeedbackRatingBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ho_feedback_rating}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'tacticType', 'tacticSkill', 'attitude', 'style_of_play', 'id_ho_feedback'], 'integer'],
            [['leftDefense', 'centralDefense', 'rightDefense', 'midfield', 'leftAttack', 'centralAttack', 'rightAttack'], 'number'],
            [['tacticType', 'tacticSkill', 'attitude', 'style_of_play', 'id_ho_feedback'], 'required'],
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
            'leftDefense' => Yii::t('app', 'Left Defense'),
            'centralDefense' => Yii::t('app', 'Central Defense'),
            'rightDefense' => Yii::t('app', 'Right Defense'),
            'midfield' => Yii::t('app', 'Midfield'),
            'leftAttack' => Yii::t('app', 'Left Attack'),
            'centralAttack' => Yii::t('app', 'Central Attack'),
            'rightAttack' => Yii::t('app', 'Right Attack'),
            'tacticType' => Yii::t('app', 'Tactic Type'),
            'tacticSkill' => Yii::t('app', 'Tactic Skill'),
            'attitude' => Yii::t('app', 'Attitude'),
            'style_of_play' => Yii::t('app', 'Style Of Play'),
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
