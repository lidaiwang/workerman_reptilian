<?php

const REDIS_HOST = '134.175.93.90';
const REDIS_PORT = 6379;
const REDIS_PSW = 'a3d24b55';


const DB_HOST = '134.175.93.90';
const DB_NAME = 'root';
const DB_PORT = 3306;
const DB_BASE = 'k_line_dev';
const DB_PSW = 'a3d24b55';

const REDIS_CONF = [
    //主从数据库
    'masters' => [
        [
            'host' => '127.0.0.1',
            'port' => 6379,
            'password' => null
        ],

    ],
    'slaves' => [
        [
            'host' => '127.0.0.1',
            'port' => 6379,
            'password' => null
        ],
    ]
];

const REGISTER_IP = '127.0.0.1';
const REGISTER_PORT = '1238';

const DBCONF = [
    'db1' => [
        'host' => '192.168.1.184',
        'port' => 3306,
        'database' => 'db1',
        'user' => 'root',
        'password' => 'root',
    ],
    'db2' => array(
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db2',
        'user' => 'root',
        'password' => 'root'
    ),
];

//平台的交易对监测
define('MARKET_TRADE_LOOP_TIME', 300);
define('NOTICE_EMAIL', 'lidaiwangtime@163.com');
define('MARKET_TRADE_PORT', 2355);
define('MARKET_TRADE_START_IP', '127.0.0.1');
define('MARKET_TRADE_CONNECT_IP', '127.0.0.1');
define('MARKET_TRADE_BUSINESS_NUM', 1);      //处理器数量

//任务数组[文件名, 循环时间间隔（秒）]
static $taskConf = array(
    array('class' => 'pushQueue', 'method' => 'loopRun', 'time_interval' => 1),
);
