<?php
/**
 * 颜色装饰器
 */
namespace Itool;

class SizeDrawDecorator implements DrawDecorator{

	protected $size;

	function __construct($size = 10){
		$this->size = $size.'px';
	}

	function beforeDecorator(){
		echo "<div style='font-size:{$this->size};'>";
	}

	function afterDecorator(){
		echo "</div>";
	}
}