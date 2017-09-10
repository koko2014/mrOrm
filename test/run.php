<?php
//�����ļ����Լ����ݻ�������
$dbConfig = [
	'db1'=>['host'=>'127.0.0.1','port'=>'3306','dbname'=>'test','user'=>'root','pw'=>'']
	];

$cacheConfig = [
	'redis1'=>[
		[
            'write' => ['host' => '127.0.0.1', 'port' => '6379', 'pw' => '', 'database' => 0, 'timeout' => 3],
            'read' => ['host' => '127.0.0.1', 'port' => '6379', 'pw' => '', 'database' => 0, 'timeout' => 3],
        ]
	]
];


//����sql
/*
CREATE TABLE `mr_user` (
`id`  int UNSIGNED NOT NULL AUTO_INCREMENT ,
`uuid`  varchar(255) NOT NULL ,
`user_name`  varchar(255) NOT NULL ,
`user_age`  int NOT NULL ,
`add_time`  int NOT NULL ,
PRIMARY KEY (`id`)
)
;
*/

//���ظ����ļ�
require("./load.php");

//ִ�в������
$userName = "niko";
$userAge = "45";
$addTime = time();

$userModel = new userModel();
$userModel->setDbConf($dbConfig);
$userModel->setRedisConf($cacheConfig);
$userModel->add($userName,$userAge,$addTime);




