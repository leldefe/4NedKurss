<?php

error_reporting(-1);
ini_set('display_errors', 'On');

//UZDEVUMS
// function manaFunkcija($string){
// 	$splitString = str_split( $string);
// // var_dump($splitString);

// foreach($splitString as $key => $value){
// if ($key%2==0){
// $splitString[$key]=strtoupper($splitString[$key]);
// }
// else{
// 	$splitString[$key]=strtolower($splitString[$key]);
// }
// var_dump($splitString[$key]);
// }
// echo(" ");

// $result=implode("-", $splitString);
// var_dump($result);
// }
// $var = 'veikals';
// manaFunkcija($var);

Class Human
{
	//protected
	//private
	public $first_name = "Lelde";
	public $last_name;
	public $age;

	public function getFirstName()
	{
		return ($this->first_name . "! ");
	}
	public function setFirstName($value)
	{
		$this->first_name = $value;

	}
	public function getName(){
		return($this->first_name . " " . $this->last_name);
	}
	public function getAge(){
		return ($this->age);
	}

	public function setAge($value){
		$this->age = $value;
	}

// $long_string_in_snake;
// $langStringInSnake;

}
$adam= new Human;
// var_dump($adam);
echo($adam->first_name);
echo (" ");
// $adam->first_name = "LeldeFe"
echo($adam->getFirstName());
echo (" ");
echo($adam->setFirstName("Adams"));
echo (" ");
echo($adam->getFirstName());
echo (" ");
$adam->setAge(5);
echo($adam->getAge());
echo(" ");
// echo($adam->getAge());
// echo (" ");

// if(1=="1"){
// 	$var=1;
// }
// else{
// 	$var=2;
// }
// echo(" ");

// $var=(1=="1")? 1:2;
// echo($var);

?>