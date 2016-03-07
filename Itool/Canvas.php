<?php
/**
 * 装饰器模式
 */
namespace Itool;

class Canvas{

	public $data;
	protected $decorators = array();

	function init($height = 10, $width = 20){
		$data = array();
		for ($i = 0; $i < $height; $i++) {
			for($j = 0; $j < $width; $j++){
                $data[$i][$j] = '*';
            }
		}
		$this->data = $data;
	}

	function draw()
    {
    	$this->beforeDecorator();
        foreach($this->data as $line)
        {
            foreach($line as $char)
            {
                echo $char;
            }
            echo "<br />\n";
        }
        $this->afterDecorator();
    }


	function rect($a1, $a2, $b1, $b2)
    {
        foreach($this->data as $k1 => $line)
        {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach($line as $k2 => $char)
            {
                if ($k2 < $b1 or $k2 > $b2) continue;
                $this->data[$k1][$k2] = '&nbsp;';
            }
        }
    }

    /**
     * 增加装饰器
     */
    function addDecorator(DrawDecorator $decorator){
    	$this->decorators[] = $decorator;
    }

    function beforeDecorator(){
    	foreach ($this->decorators as $decorator) {
    		$decorator->beforeDecorator();
    	}
    }

    function afterDecorator(){
    	$decorators = array_reverse($this->decorators);
    	foreach ($decorators as $decorator) {
    		$decorator->afterDecorator();
    	}
    }


}
