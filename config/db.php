<?php

$params = require __DIR__ . '/../private/credentials.php';

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => $params['dsn'],
    'username' => $params['username'],
    'password' => $params['password'],
    'charset' => 'utf8',
    'tablePrefix' => 'yii2_'

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
