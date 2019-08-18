<?php


namespace app\models;


use app\models\base\HoFeedbackPlayerBase;
use Yii;

class HoFeedbackPlayer extends HoFeedbackPlayerBase
{
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if ($this->created_by=='') {
            $this->created_by = Yii::$app->user->identity->getId();
        }
        $this->updated_by = Yii::$app->user->identity->getId();
        return true;
    }
}