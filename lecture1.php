<?php
class Cat{
	public $firstName = "default name";
	public $type = "default name";
	public $price = "0";
	
	function getName(){
		return "{$this­>firstName}" .
		"{$this­>type}";
	}
}

$cat1 = new Cat();
$cat1­>firstName = "Mister";
$cat1­>type= "whiskers";

print "The cat’s name is {$cat1­>getName()}";
//The cat’s name is Mister whiskers.



class Horse{
public $jerry = "default name";
public $whiskers = "whiskers";
public $male = "male";
public $price = "0";
function getName() {
return "{$this­>jerry}" .
"{$this­>whiskers}";
}
}
$horse1 = new Horse();
$horse1­>jerry = "jerry";
$horse1­>lastName = "whiskers";
print "The horse’s name is {$horse1­>getName()}.";
//The horse’s name is Jerry whiskers.


class Fish{
public $Diego = "default name";
public $whiskers = "default name";
public $male = "default name";
public $price = "0";
function getName() {
return "{$this­>Diego}" .
"{$this­>whiskers}";
}
}
$Fish1 = new Fish();
$Fish1­>Diego = "default name";
$Fish1­>lastName = "default name";
print "The Fish’s name is {$Fish1­>getName()}.";
//The Fish’s name is Diego whiskers.


_____________________________________________________________________________________________________________________________________________________________
class Bird {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;

}

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;

}

}
$bird1 = new Bird(“Tom”, “Fav”, “pigeon”);
print “bird 1: {$dog1­>getName()}\n;

class Monkey {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;

}

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;

}

}
$Monkey1 = new Monkey(“Jerry”, “Davis”, “Chimpanze”);
print “Monkey 1: {$Monkey1­>getName()}\n;




class Whale {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;

}

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;

}

}
$Whale1 = new Whale(“Blue”, “Whale”, “bluewhale”);
print “Whale 1” : {$whale1­>getName()}\n;


