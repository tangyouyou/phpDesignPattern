<?php
/**
 * 工厂模式
 */
namespace Itool;

class Factory{
	// 通过工厂模式创建对象
	public static function getUser(){
		$user = new user();
		Register::set('user',$user);
		return $user;
	}

	// 创建数据库对象
	public static function getDataBase(){
		$db = Register::get('db');
		if (!$db){
			// 单例模式
			$db = new Database\MySQLi();
			$db->connect('127.0.0.1','root','123456','test');
			Register::set('db',$db);
		}
		return $db;
	}


}
