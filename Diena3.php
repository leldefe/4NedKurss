<?php

// echo("---1.variants------");

// $i = 0;

// while($i<10){
// 	if($i%2==1){
// 		echo($i." ");
// 	}
// 	$i++;
// }
// while($i<20){
// 	if($i%2==0){
// 		echo($i." ");
// 	}
// 	$i++;
// }

// //1.variants

// echo(" - - 1.variants - - ");
// $i=0;
// while($i<10){
// 	if($i%2 == 1){
// 		echo($i. " ");
// 	}

// 	$i++;
// }
// while($i<20){
// 	if($i%2 == 0){
// 		echo($i. " ");
// 	}

// 	$i++;
// }
// echo(" - - 2.variants - - ");
// for($i=1; $i<10; $i+=2){
// 	echo($i." ");
// }
// for($i=10; $i<20; $i+=2){
// 	echo($i." ");
// }

// echo(" - - 3.variants - - ");
// $i=1;
// while($i<10){
// 	echo($i. " ");
// 	$i +=2 ;
// }
// $i=10;
// while($i<20){
// 	echo($i. " ");
// 	$i +=2 ;
// }


// echo(" - - 4.variants - - ");
// $i=1;
// while($i<20){
// 	if($i < 10){
// 		echo($i. " ");
// 	}
// 	else {
// 		echo( ($i-1) . " ");
// 	}
// 	$i += 2;
// }

// echo(" - - 5.variants - - ");

// for($i=1; $i<20; $i += 2){
// 	if($i < 10){
// 		echo($i. " ");
// 	}
// 	else {
// 		echo( ($i-1) . " ");
// 	}
// }


// echo(" - - 6.variants - - ");

// for($i=1; $i<=10; $i ++){
// 	if($i <= 5){
// 		echo( ($i*2 -1) ." ");
// 	}
// 	else {
// 		echo( ($i * 2 - 2) . " ");
// 	}
// }

function manaFunkcija(){
	// echo (" Done!!! ");
}

function manaFunkcijaArParametru($var){
	// echo ($var . " ");
	
}
function manaFunkcijaArNeobligatuParametru($var='zivis'){
	// echo ($var . " ");
	
}
function multipleParameters($a, $b=0, $c="c", $d = 'finito'){
	// echo($a . $b . $c . $d);
}
function kaapinaat($base, $pow=2){
	$result=1;
	for($i=0; $i<abs($pow); $i++){
		$result *= $base;
	}
	// $result = $base*$base;
	if($pow<0){
		$result = 1/$result;
	}
	$result=round($result,2); //kur noapaļot un ar kādu precizitati


	return $result;
}

echo(" - - 8.variants - - ");
$i=10;
while($i>0){
	// echo($i. " ");
	$i--;
	manafunkcija();
	manaFunkcijaArParametru($i);
	manaFunkcijaArNeobligatuParametru($i);
	$j=kaapinaat($i, -2);
	// echo(kaapinaat($i));
	// echo(" result=".$j."; ");
	// echo(++$j);
}
// unset($i);
echo ($var);

manafunkcija();
manaFunkcijaArNeobligatuParametru();
multipleParameters(1,2,3,4);
echo " ";
multipleParameters(1,2,3);
echo " ";
multipleParameters(1);
echo " ";

$a=2.567;
echo(round($a)." ");
echo (floor($a));
echo " ";
function check($var){
	if($var>5){
		return true;
	}
	return false;
}
echo((int) check($a));
echo " ";
if(check($a)){
	echo("yay");
}
else{
	echo("aww");
}
echo " ";
echo(check($a)+check($a));
echo " ";

$salad='aboli bumbieri arbuzs banani tomati';
$array = explode (" ", $salad);
var_dump($array);
echo " ";
$salad2 = implode(", ", $array);
var_dump($salad2);
echo " ";
$string='Lelde';
$splitString = str_split( $string);
var_dump($splitString);
echo " ";
$splitString=implode("-", $splitString);
var_dump(strtoupper($splitString));

?>