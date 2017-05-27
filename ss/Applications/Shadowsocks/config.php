<?php 
// 服务器地址
$SERVER = getenv('OPENSHIFT_PHP_IP');
// 加密算法
$METHOD = 'aes-256-cfb';
// 密码
$PASSWORD = '12345678';
// 服务器端口
$PORT = 8080;
// 客户端端口
$LOCAL_PORT = 1080;
// 启动多少进程
$PROCESS_COUNT = 12;
