<?php


namespace app\models;


use yii\base\Model;

class HoFeedbackResult extends Model
{
    public $result = -1; //-1:error, 0:warning (HoFeedback ok, other errors), 1:ok all
    public $idFeedback = 0;
    public $idSysInfo = 0;
    public $idRating = 0;
    public $idPosition = 0;
    public $hoToken;
}