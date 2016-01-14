<?php
/**
 * 唐悠悠与你分享PHP设计模式
 * 计划将设计模式设计成一个小型框架演示
 */
define('DIR',__DIR__);
// 加载自动加载类
include DIR.'/Itool/Loader.php';
// 注册自动加载函数
spl_autoload_register('\\Itool\\Loader::autoload');

Itool\Factory::getUser();
$user = Itool\Register::get('user');
var_dump($user);
