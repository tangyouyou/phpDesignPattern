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
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">';

// 装饰器模式例子
$canvas = new \Itool\Canvas();
$canvas->init();
$canvas->addDecorator(new \Itool\SizeDrawDecorator(20));
$canvas->addDecorator(new \Itool\ColorDrawDecorator('blue'));
$canvas->rect(5,8,5,6);
$canvas->draw();
//$a = new \Itool\SizeDrawDecorator();
//var_dump($a);


// 观察者模式例子
//include DIR.'/Itool/test/observer.php';




// // 策略模式例子
// if (isset($_GET['id'])) {//老板
// 	$user = new \Itool\BossStrategy;
// } else {//程序猿
// 	$user = new \Itool\CoderStrategy;
// }
// //header("Content-type=text/html;charset=utf8");
// $user->working();
// $user->resting();


// 对象关系映射例子
// // 传入id值,user表字段为id,name,phone
// $user = new \Itool\object(1);
// $name = $user->name;
// $phone = $user->phone;

// // 对象关系映射主要就是通过construct,get,set,destruct使用来达成
// $user->name = 'zhongwei';
// $user->phone = '182381283';
