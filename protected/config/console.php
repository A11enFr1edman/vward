<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

    'db'=>array(
        'connectionString' => 'sqlite:protected/data/sentry.db',
        'tablePrefix' => '',
    ),

    'components'=>array(

        'resque'=>array(
            'class' => 'application.components.yii-resque.RResque',
            'server' => 'localhost',    // Redis server address
            'port' => '6379',           // Redis server port
            'database' => 0,            // Redis database number
            'password' => ''            // Redis password auth, set to '' or null when no auth needed
        ),
    )
);