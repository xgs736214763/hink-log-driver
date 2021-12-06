# think-log-driver
thinkphp6的日志驱动支持elastic和mysql，mongodb
# es配置
* es.php
~~~
return [
'hosts'=> explode(',',env('ELASTIC.HOST')),//切割多个
'prefix'=>env('ELASTIC.PREFIX','test_'),//
'user'=>env('ELASTIC.USERNAME'),//es的用户名
'passwd'=>env('ELASTIC.PASSWORD'),//es的密码
];
~~~
* log.php
~~~
如果使用es type= \think\log\driver\ElasticLog::class
如果使用数据库或者mongo 
type= \think\log\driver\DbLog::class
//写入数据库的表名
'table' => 'logs',
'db_type' => 'mongo',`
~~~
* 创建数据表
~~~
CREATE TABLE `logs` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`log` varchar(2000) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '日志',
`type` varchar(55) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '类型',
`runtime` float(8,0) DEFAULT NULL COMMENT '执行事件',
`created_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
~~~