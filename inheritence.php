<?php
class Car{
	public $wheel;
	public $color;
	public $engine; 
	function __construct( $wheel ,$color ,$engine ) {
		$this->wheel = $wheel;
		$this->color = $color;
		$this->engine= $engine;
	}
	function getinfo() {
		return "This is my ". $this->wheel . "and my" .
		$this->engine;

	}
}
class Bmw extends Car {
	function info() {
		return $this->color;
	}
}
$Car1 = new Car("engine","wheel","color");
print "Car 1 has a" . $Car1->getinfo();


class Pet{
	public $breed;
	public $gender;
	public $hair; 
	function __construct( $breed ,$gender ,$hair ) {
		$this->breed = $breed;
		$this->gender = $gender;
		$this->hair= $hair;
	}
	function getinfo() {
		return "This is my ". $this->breed . "and my" .
		$this->gender;

	}
}
class Dog extends Pet {
	function info() {
		return $this->chair;
	}
}
$Pet1 = new Pet("breed","gender","hair");
print "pet 1 has a" . $Pet1->getinfo();


class Fish{
	public $breed;
	public $color;
	public $type; 
	function __construct( $breed ,$color ,$type ) {
		$this->breed = $breed;
		$this->color = $color;
		$this->type= $type;
	}
	function getinfo() {
		return "This is my ". $this->breed . "and my" .
		$this->color;

	}
}
class Goldfish extends Fish {
	function info() {
		return $this->type;
	}
}
$Fish1 = new Fish("breed","color","type");
print "Fish 1 has a" . $Fish1->getinfo();




?>