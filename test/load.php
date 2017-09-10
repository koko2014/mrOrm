<?php
//������ְ��Ĳ�������ֻ��ʾ����������Ŀ�Լ�����
define("MRORM_ROOT_DIR",__DIR__.'/../src');

//����baseModel
require(MRORM_ROOT_DIR.'/BaseModel.php');
//����mysql����
require(MRORM_ROOT_DIR.'/MysqlDriver/fnstMysqlConnection.php');
require(MRORM_ROOT_DIR.'/MysqlDriver/fnstMysqlDriver.php');
require(MRORM_ROOT_DIR.'/MysqlDriver/fnstMysqlDriverAllList.php');
require(MRORM_ROOT_DIR.'/MysqlDriver/fnstMysqlDriverIncrList.php');
require(MRORM_ROOT_DIR.'/MysqlDriver/fnstMysqlSqlBuilder.php');
//����redis����
require(MRORM_ROOT_DIR.'/RedisDriver/FnstOperator.php');

require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/Base.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/HashKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/JsonStringKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/ListKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/SetKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/StringKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/ZsetAllKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/ZsetKey.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisKM/ZsetSegmentKey.php');

require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisRouter/Base.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisRouter/Average.php');
require(MRORM_ROOT_DIR.'/RedisDriver/FnstRedisRouter/Hash.php');

//����db,redisʵ���model
require("./userDb.php");
require("./userHashCache.php");
require("./userListCache.php");
require("./userModel.php");