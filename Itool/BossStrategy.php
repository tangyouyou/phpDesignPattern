<?php
/**
 * 策略模式之老板策略
 */
namespace Itool;

class BossStrategy implements Strategy{

	public function working(){
		echo "看你们这群程序猿工作...";
	}

	public function resting(){
		echo "好好加班,未来才会更美好...";
	}
}