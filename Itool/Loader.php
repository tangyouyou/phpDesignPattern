<?php
/**
 * 自动加载类
 */
namespace Itool;
class Loader{

	public static function autoload($class){
		require DIR.'/'.str_replace('\\', '/', $class).'.php';
	}

}