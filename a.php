<?php

define('PATH', dirname(__FILE__));
date_default_timezone_set("Asia/Shanghai");
require_once __DIR__ . '/vendor/autoload.php';
require_once PATH . '/conf/config.php';
require_once PATH . '/lib/Http.php';

$url = "https://www.aicoin.net.cn/api/chart/kline/data/period";
$queryparas = array();
$header = array(
    'referer: https://www.aicoin.net.cn',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36',
);
$postdata = array(
    'symbol' => 'eosquarter:okex',
    'period' => '240',
);
$timeout = 5;
//$result = Http::curlPost($url, $queryparas, $postdata, $header, $timeout);

$db = new MysqliDb (DB_HOST, DB_NAME, DB_PSW, DB_BASE);

$table_name = "k_line_origin";
$last_block_mysql = $db
    ->orderBy("id", "Desc")
    ->getOne($table_name);

var_dump($last_block_mysql);
exit;


//print_r($argv);

exec("ls", $output);
print_r($output);

?>