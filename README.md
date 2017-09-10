**起源：**

以前在做业务时遇到大量用户，大量数据时，使用redis作为缓存，但是每次db操作后都要写一堆redis操作，很是费力且容易出错

现在做了这么一个框架，同步mysql与redis的操作，使用的时候只需要继承类，调用指定的接口，无论缓存列表还是详情，均由框架完成

mr意思 mysql and redis

**此框架作用：**

1.mysql与redis同步读写 

2.redis被动缓存拉起 

3.使用分片拉起缓存，在加载大列表时无性能问题 

4.支持多组redis+读写分离操作

5.使用多组redis时，内置平均分配算法（默认）和一致性哈希算法,也可以自己实现接口去完成自己特定的算法

6.自定义key的最失效时间，动态递增，节约内存的使用

**常用缓存类型：**

1.字符串类型（一般用作计数器）

2.哈希类型，缓存一条数据信息，在类中定义好hashField，每个field对应mysql中的一个字段

3.allList（全部类型列表，此种列表使用zset存储，在被动拉起缓存时，一次性生成全部缓存，建议少量列表使用）

4.segmentList（分段类型列表，此种列表使用zset存储，内部定义step来限制每一段列表的数据数量，被动拉起缓存时，根据数据落点拉起一段缓存，使用此类型时，数据库中的字内容必须为单调递增，不可删除，业务上的删除使用标志位标记，详情参考src/RedisDriver/FnstRedisKM/ZsetSegmentKey.php类中的详细注释）

--------------------

示例在test/run.php,配置好redis和mysql即可运行

效果是，向db中插入了一条user信息，在redis中写入user列表和user详情
