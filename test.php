<?php 
class Bill {
	public $height = "5";
	public $weight = "135";
	public $gender = "male";

public function __construct($height,$weight,$gender) {
$this->Height = $height;
$this->Weight = $weight;
$this->Gender = $Gender;
}
}
function run() {
	return "{$this->Height}";
	return "{$this->Weight}";
	return "{$this->Gender}";
}
$Bill1 = new Bill("Height","Weight", "Gender");
?>
