<?php
/**
 * 观察者模式例子具体实现
 */
class Event extends \Itool\EventGenerator{
	function trigger()
    {
        echo "Event<br/>\n";
        $this->notify();
    }
}

class BoyObserver implements Itool\Observer{
	function update(){
		echo "男孩观察者<br/>";
	}
}

class GirlObserver implements Itool\Observer{

	function update(){
		echo "女孩观察者<br/>";
	}
}


$event = new Event;
// 同理此处可以无限增加观察者，从而实现解耦的过程
$event->addObserver(new BoyObserver);
$event->addObserver(new GirlObserver);
$event->trigger();