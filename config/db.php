<?php declare(strict_types=1);

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii',
    'username' => 'root',
    'password' => '123',
    'charset' => 'utf8',
	'attributes' => [
//		PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false,
	],

    // Schema cache options (for production environment)
//    'enableSchemaCache' => true,
//    'schemaCacheDuration' => 60,
//    'schemaCache' => 'cache',
];
