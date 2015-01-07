<?php
class Cat{
public $Mister = “Mister”;
public $whiskers = “whiskers”;
public $male = “male”;
public $price = 0;
function getName() {
return “{$this­>Mister}” .
“{$this­>whiskers}”;
}
}
$cat1 = new Cat();
$cat1­>Mister = “Mister”;
$cat1­>lastName = “whiskers”;
print “The cat’s name is {$cat1­>getName()}.”;
//The cat’s name is Mister whiskers.

?>

<?php
class Horse{
public $jerry = “jerry”;
public $whiskers = “whiskers”;
public $male = “male”;
public $price = 0;
function getName() {
return “{$this­>jerry}” .
“{$this­>whiskers}”;
}
}
$horse1 = new Horse();
$horse1­>jerry = “jerry”;
$horse1­>lastName = “whiskers”;
print “The horse’s name is {$horse1­>getName()}.”;
//The horse’s name is Jerry whiskers.

?>
<?php
class Fish{
public $Diego = “Diego”;
public $whiskers = “whiskers”;
public $male = “male”;
public $price = 0;
function getName() {
return “{$this­>jDiego}” .
“{$this­>whiskers}”;
}
}
$Fish1 = new Fish();
$Fish1­>Diego = “Diego”;
$Fish1­>lastName = “whiskers”;
print “The Fish’s name is {$Fish1­>getName()}.”;
//The Fish’s name is Diego whiskers.

?>
