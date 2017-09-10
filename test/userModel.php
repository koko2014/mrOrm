<?php

class userModel extends BaseModel
{
	//����һ��user��¼
	public function add($userName,$userAge,$addTime)
    {
        $cacheInput = [
            'cacheName'=>'userListCache',
            'param'=>$userAge
        ];
        //����db
        $attributes = [
			'user_name'=>$userName,
			'user_age'=>$userAge,
			'add_time'=>$addTime
        ];
        $dbInput = [
			'dbName'=>'userDb',
            'attributes'=>$attributes
        ];
		//����db��listCache
        $insertUuid = $this->addAllList($cacheInput,$dbInput);
        if ($insertUuid) {
			$return = $insertUuid;
			//����hashCache
			$this->getCache("userHashCache", $insertUuid)->add($attributes);
        } else {
            $return = false;
        }
        return $return;
    }
}