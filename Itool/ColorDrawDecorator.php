<?php
/**
 * 颜色装饰器
 */
namespace Itool;

class ColorDrawDecorator implements DrawDecorator{
	protected $color;

	function __construct($color = 'green'){
		$this->color = $color;
	}

	function beforeDecorator(){
		echo "<div style='color:{$this->color};'>";
	}

	function afterDecorator(){
		echo "</div>";
	}
}