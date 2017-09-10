<?php


//��Ӧ�û��б��key
class userListCache extends \RedisDriver\FnstRedisKM\ZsetAllKey{
    protected static $keyNameTemplate = "user_list_age:{#}";
    protected static $configGroup = "redis1";
    protected static $expireTime = 86400;
    const COMMAND = "zRange";
    const SCORE_FIELD = "addTime";
    const VALUE_FIELD = "uuid";
}