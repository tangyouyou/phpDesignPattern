<?php
/**
 * 观察者模式英文
 */
namespace Itool;

/**
 * 定义一个观察者的接口,所有观察者需要实现该方法，从而完成通知
 */
interface Observer{

	function update();
}