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

// 传入id值,user表字段为id,name,phone
$user = new \Itool\object(1);
//$name = $user->name;
//$phone = $user->phone;

// 对象关系映射主要就是通过construct,get,set,destruct使用来达成
$user->name = 'zhongwei';
$user->phone = '182381283';
