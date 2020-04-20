<?php

class bodmas{

	public $boxa;
	public $boxb;
	public $cal;

	public function __construct($boxa, $boxb, $cal){
		$this->boxa = $boxa;
		$this->boxb = $boxb;
		$this->cal = $cal;

	}

	public function calcMethod(){
		switch ($this->cal){
			case 'add':
			$result = $this->boxa + $this->boxb;
			break;
			case 'sub':
			$result = $this->boxa - $this->boxb;
			break;
			case 'mul':
			$result = $this->boxa * $this->boxb;
			break;
			case 'div':
			$result = $this->boxa / $this->boxb;
			break;

			default:
			$result = "Error";
			break;


		}
		return $result;
	}
}