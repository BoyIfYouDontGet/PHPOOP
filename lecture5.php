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

class Animal {
public $firstName;
public $lastName;
public $scientificName;
public $gender;
public $weight;
public $bark;
public $meow;
function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
$this­>scientificName = $scientificName;
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>gender = $gender;
$this­>weight = $weight;
$this­>bark = $bark;
$this­>meow = $meow;
}
function getName() {
return “This is my “ . $this­>firstName .
“ and last ” . $this­>lastName .
“ and this is my scientific­name “ . $this­>scientificName . “ .”;
}
}
class Cat extends Animal {
function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
$this­>meow = $meow;
}
function greet() {
return $this­>meow;
parent:__:construct($scientificName, $firstName, $lastName, $gender, $weight);
}
}
class Dog extends Animal {
function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark) {
$this­>bark = $bark;
}
function hello() {
return $this­>bark;
}
}
$cat = new Cat(“Cat”, “Mellow”, “Yellow”, “male”, 15, true);
print “Animal 1 is a ” . $cat­>getName();
parent:__:construct($scientificName, $firstName, $lastName, $gender, $weight);
?>