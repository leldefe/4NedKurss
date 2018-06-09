
<?php
error_reporting(-1);
ini_set('display_errors', 'On');

// echo(print(1));
// if(print(1)){
// 	print(" yay");
// }

// $koki = ['abele', 'bumbiere', 'liepa', 'ozols'];
// $majas = ['3'=>'Kalnini', '6'=>'Berzini'];

// $kokuSkaits = count($koki);

// echo("Mums ir: ".$kokuSkaits."koki"."\n");

// $kokuSkaits -=2; //kokuSkaits ir kokuSkaits-2
// $kokuSkaits +=1; //kokuSkaitsir kokuSkats +1
// echo("Pedeja elementa Nr.: ".(int) ($kokuSkaits-1)." ");
// echo($koki[$kokuSkaits-1]);

// $int=0;
// echo(" ");
// echo($int);
// echo(" ");
// echo(--$int);
// echo(" ");
// echo(++$int);
// // echo($kokuSkaits++);
// echo($kokuSkaits);

$i = 0;
while($i<10){
	echo($i);
	$i++;
}

echo (" ");

$i = 0;
do {
	echo ($i);
	$i++;
} while($i<=10);

echo (" ");

for($i=0; $i<10; $i++){
	if($i%2==0){
		echo ($i);
	}
}
// $koki = ['abele', 'bumbiere', 'liepa', 'ozols'];
echo (" ");
$integers=array(4,6,5,2,1, array(5.1,5.2,5.3));
foreach ($integers as $value) {
	{
		if(is_array($value)){
			foreach ($value as $subvalue){
				echo(" & value: ". $subvalue ."; ");
				
			}
		}
		else {

			echo(" & value: ". $value ."; ");
		};

	}
}
echo(" -- ------ ----- --");

$i=0;
for($i=0; $i<count($integers); $i++){
	// if(!is_array($integers[$i])){
	// 	echo($integers[$i]);
	// }
	
	while($i<count($integers)){
		if(!is_array($integers[$i])){
	echo($integers[$i]);
	
	}	
	$i++;
}
	
}

?>