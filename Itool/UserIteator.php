<?php
/**
 * 迭代器模式，在不需要了解内部实现的前提下，
 * 遍历一个聚合对象的内容元素，相对于传统编程模式，
 * 迭代器模式可以隐藏遍历元素所需的操作
 */
namespace Itool;

/**
 * 用户自定义的迭代器实现PHP默认的迭代器接口
 */
class UserIteator implements \Iteator{

	protected $ids = array();//总体id
	protected $data = array();//保存数据
	protected $index; //当前索引

	/**
	 * 当前执行的方法
	 * @return [type] [description]
	 */
	function current(){
		
	}

	/**
	 * 下一个值
	 * @return function [description]
	 */
	function next(){

	}

	/**
	 * 返回当前键值
	 * @return [type] [description]
	 */
	function key(){

	}

	/**
	 * 检测当前值
	 * @return [type] [description]
	 */
	function valid(){

	}

	/**
	 * 首次调用当前值，可设定初始值
	 * @return [type] [description]
	 */
	function rewind(){

	}
}