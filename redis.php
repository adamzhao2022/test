<?php
header("Content-Type:text/html; charset=utf-8");
$redis = new redis();
$result = $redis->connect('127.0.0.1', 6379);
var_dump($result);
if($result){
    echo '已成功开启redis服务！<br />';
    $redis->set('username','ck');
    $username = $redis->get('username');
    if(!empty($username)){
        echo 'username:'.$username;
    }
}else{
    echo '已关闭redis服务！<br />';
}