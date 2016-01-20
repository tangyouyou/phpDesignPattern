<?php
/**
 *  策略模式之程序猿视角
 */
namespace Itool;

class CoderStrategy implements Strategy{

	public function working(){
		echo "努力编码中...";
	}

	public function resting(){
		echo "学习充电中....";
	}
}