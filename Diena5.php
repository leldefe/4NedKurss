<?php
error_reporting(-1);
ini_set('display_errors', 'On');

// echo("Hello");


class Device{
	//ražotājs
	//gads
	public $year;
	public $manufacturer;
	public static $all_manufacturers;


	function __construct($id){
		print("Parent Construction!");

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db="sveiksSQL";
		$conn = new mysqli_connect()($servername, $username, $password, $db);
		$sql = "SELECT * FROM 'microphones' where id=$id";
		$result = $conn->query($sql);
		var_dump($conn->query($result));
		if($result->num_rows>0){
			echo("Ir rezultats - - - - ");

			while($row = $result->fetch_assoc()){
				var_dump($row);
				{
					$this->setYear($row['year']);
					$this->setManufacturer($row['manufacturer']);
				} 
			} 
			else{
				echo("Nav rezultāta");
			}

		}
		public function getYear()
		{
			return ($this->year);
		}

		public function setYear($year)
		{
			$this->year = $year;
		}
		public function getManufacturer(){
			return ($this->manufacturer);
		}

		public function setManufacturer($manufacturer)
		{
			$this->manufacturer = $manufacturer;
		}
		public function getFullInfo(){
			return ($this->manufacturer." ".$this->year);
		}

		public static function getAllManufacturers()
		{
			return ["Siemens", "Bosch", "Apple", "Audi"];
		// return array() //šādi ar var izsaukt array
		}
	}

	class Microphone extends Device{

		public $color;
		function __construct(){
			parent::__construct();
			print("Child Construction!");
			parent::__construct();
		}
		public function getFullInfo(){
			return ($this->manufacturer." ".$this->year."mikrofons");
		}
	}

// $device = new Device();
// $device->setYear(2017);
// $device->setManufacturer("Siemens");
// print($device->getFullInfo());
// var_dump(Device::getAllManufacturers());

	$mikrofons = new Microphone($id);
	// $mikrofons->setYear(2016);
	// $mikrofons->setManufacturer("Samsung");
	print($mikrofons->getFullInfo());



// try {

//     // set the PDO error mode to exception
//     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



// }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }

    // $conn->close();

	?>