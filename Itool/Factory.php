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


}
