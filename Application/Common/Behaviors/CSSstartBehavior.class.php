<?php
namespace Common\Behaviors;
use Think\Behavior;
/**
 * css开始行为
 * @author dengjingma
 * @time Aug 29, 2014
 */
class CSSstartBehavior extends Behavior{
	
	public function run(&$param){
		ob_start();
	}
}