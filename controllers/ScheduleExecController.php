<?php

namespace app\controllers;

use tebazil\runner\ConsoleCommandRunner;

class ScheduleExecController extends \yii\web\Controller
{
    public function actionRun()
    {
        $runner = new ConsoleCommandRunner();
        //$runner->run('prova/init', ['interactive' => false]);
        $runner->run('schedule/run', ['interactive' => false]);

        $output = $runner->getOutput();
        $exitCode = $runner->getExitCode();

        return $this->render('run', ['output' => $output,
            'exitCode' => $exitCode,]);
    }

}
