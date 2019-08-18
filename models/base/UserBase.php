<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $aut_key
 * @property string $access_token
 * @property string $roles
 * @property int $deactive
 *
 * @property UserBase $createdBy
 * @property UserBase $updatedBy
 */
class UserBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'deactive'], 'integer'],
            [['username'], 'unique'],
            [['username', 'password', 'email', 'aut_key', 'access_token', 'roles'], 'required'],
            [['username', 'password', 'aut_key', 'access_token', 'roles'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 32],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => UserBase::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => UserBase::className(), 'targetAttribute' => ['updated_by' => 'id']],
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
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'aut_key' => Yii::t('app', 'Aut Key'),
            'access_token' => Yii::t('app', 'Access Token'),
            'roles' => Yii::t('app', 'Roles'),
            'deactive' => Yii::t('app', 'Deactive'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(UserBase::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(UserBase::className(), ['id' => 'updated_by']);
    }
}
