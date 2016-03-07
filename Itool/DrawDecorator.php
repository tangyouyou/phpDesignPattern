<?php
/**
 * 装饰器模式接口定义
 */
namespace Itool;

interface DrawDecorator{

	function beforeDecorator();
	function afterDecorator();
}
