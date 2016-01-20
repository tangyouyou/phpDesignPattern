<?php
/**
 * 事件产生者,搭配观察者进行使用
 */
namespace Itool;

abstract class EventGenerator{
	// 定义为私有，观察者对子类透明
	private $observers = array();

	/**
	 * 增加观察者
	 */
	function addObserver($observer){
		$this->observers[] = $observer;
	}

	/**
	 * 对所有观察者进行通知
	 * @return [type] [description]
	 */
	function notify(){
		foreach ($this->observers as $observer) {
			// 执行所有观察者的update方法,实现观察者接口的观察者都具有该方法
			$observer->update();
		}
	}
}