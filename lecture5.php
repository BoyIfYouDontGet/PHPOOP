<?php
class Car {
	public $engine = "240";
	public $wheels = "300";
	public $chasis = "22";
	function __construct($engine, $wheels, $chasis) {
		$this->engine = $engine;
		$this->wheels = $wheels;
		$this->chasis = $chasis;

	}
	function Car() {
		return "This is my " . $this->engine .
		"and my" . $this->wheels;
	}
}
class Cars extends Car {
	function greet(){
		return "$this->engine";
	}
}
class Cars extends Car{
	function hello(){
		return $this->chasis;
	}
}
$car1
?>