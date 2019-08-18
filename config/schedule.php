<?php
/**
 * @var \omnilight\scheduling\Schedule $schedule
 */
//* * * * * php /path/to/yii yii schedule/run --scheduleFile=@console/config/schedule.php 1>> /dev/null 2>&1

// Place here all of your cron jobs
//$schedule->command('foo')->emailOutputTo('giglimassimo@gmail.com');
//$schedule->command('dump/create -db=db -gz -s')->everyMinute();

$schedule->command('prova/init')->everyMinute();