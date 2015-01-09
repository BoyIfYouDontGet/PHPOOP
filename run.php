<?php
// example one
if(is_integer()) {
	echo "this is an integer";
}
else {
	echo "This is not an interger";
}
var_dump(is_integer('34'));
var_dump(is_integer('444'));
//This is not an intergerbool(false) bool(false)



//example 2


if (is_array()) {

	echo "this is an array";
}
else {
	echo "This is not an array";
}
var_dump(is_array('34'));
//This is not an arraybool(false) 

// example 3
if (is_object()){

	echo "this is an object";
}
else {
	echo "This is not an object";
}
var_dump(is_object('DED'));
//This is not an objectbool(false)

























?>