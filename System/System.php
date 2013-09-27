<?php
class AutoLoad{
	public function __construct(){
		spl_autoload_register(array($this, 'loader'));
	}
	
	private static loader($class){
        require_once($class.'.php');
    }
}