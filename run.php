<?php
// example one

$number = 34;

if(is_integer($number)===true) {
	echo "this is an integer";
}
else {
	echo "This is not an interger";

var_dump(is_integer('34'));
var_dump(is_integer('444'));
//This is an interger

}

//example 2
$array = ('3,4,5');

if (is_array($array)===true) {

	echo "this is an array";
}
else {
	echo "This is not an array";

var_dump(is_array('3'));
//This is not an arraybool(false) 
}
// example 3
$object = ('DED');

if (is_object($object)===true){

	echo "this is an object";
}
else {
	echo "This is not an object";

var_dump(is_object('DED'));
//This is not an objectbool(false)
}

?>