<?php
/**
 * 注册器模式
 */
namespace Itool;

class Register{

	protected static $objects;

	// 把对象挂在注册树上，顺便取个小名
	public static function set($alias,$object){
		self::$objects[$alias] = $object;
	}

 	// 通过小名在注册树上获取对象
	public static function get($alias){
		if (!isset(self::$objects[$alias])) {
			return false;
		}
		return self::$objects[$alias];
	}

	// 对象用完销毁之
	public static function _unset($alias){
		unset(self::$objects[$alias]);
	}
}