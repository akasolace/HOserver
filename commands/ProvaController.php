<?php


namespace app\commands;


use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

class ProvaController extends Controller
{
    public function actionInit()
    {
        Yii::info('ProvaController Called', __METHOD__);
        echo "ProvaController Called\n";

        Yii::getLogger()->flush(true);
        return ExitCode::OK;
    }
}