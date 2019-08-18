<?php

$ini = parse_ini_file('../private/credentials.ini', true);

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => $ini['db']['dsn'],
    'username' => $ini['db']['username'],
    'password' => $ini['db']['password'],
    'charset' => 'utf8',
    'tablePrefix' => 'yii2_'

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
