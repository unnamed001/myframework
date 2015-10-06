<?php

namespace Davicio;

class Pollesan {

	public $message = '';
	
	public function  __construct()
	{
		$this->message = "initilize";
	}

	public function get()
	{
		return $this->message;
	}

}