<?php

class view {
	public function __construct(){
		
	}
	
	public function getConsol() {
		$console = file_get_contents('./console.phtml');
		
		return $console;
	}
}
