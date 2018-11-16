<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct() {
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index() {
		// todo	
	}
	function clean_var($value) {
	    //TODO add the escape function!!!
        //return mysql_real_escape_string(strip_tags(trim($value)), $link);
        return strip_tags(trim($value));
    }
}
