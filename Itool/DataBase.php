<?php
/**
 * 数据库单例模式
 * 常见的还有:redis,memcached等连接
 */
namesapce Itool;

class DataBase{

	// 保存数据库连接句柄
	private static $db = NULL;

	// 静态构造方法关键，无法被外界实例化
	private function __construct(){

	}

	// 不允许复制
	private function __clone(){

	}

	// // 允许序列化
	// public function __wakeup(){
	// 	self::$instance = $this;
	// }

	// // 释放该实例
	// public function __destruct() {
 //        self::$instance = NULL;
 //    }

	// 实现单例模式
	public function getInstance(){
		if (self::$db === NULL) {
			// 对自身实例化，本质上self是一个指向自身类的指针
			self::$db = new self();
		} else {
			return self::$db;
		}
	}

	

}