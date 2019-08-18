<?php


namespace app\models;


use app\models\base\HoFeedbackResultViewBase;

class HoFeedbackResultView extends HoFeedbackResultViewBase
{
    public static function primaryKey()
    {
        return ['id'];
    }
}