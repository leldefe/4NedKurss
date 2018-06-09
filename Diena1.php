<?php

error_reporting(-1);
ini_set('display_errors', 'On');

// try{
// 	echo($foo);
// }
// catch(Exception $e){
// 	print($e);
// } //šī ir debagošana, jeej
// echo"Hello World";
// print("Hello");
// print_r("Hello");
// print("Hello");
// <br>
// print(1+1.' ');
// print ('1'+'1');

// $foo=1;
// echo($foo);

// $bar='1';
// echo("\n");
// echo($bar);

// echo ($foo+$bar);
// echo("\n");


// echo ($foo.$bar);
// echo("\n");

// $myArray=["one", "two", "three"];
// print_r($myArray[1]);
// print_r("\n el [1] is ". $myArray[1]);

// $myArray2=['1'=>'one', '2', =>'two', =>'3', => 'three'];
// print_r($myArray2);
// print_r("\n el [1] is ". $myArray2[1]);

$myArray3 = ['vards' =>'Joe','uzvards'=>'Doe','phone'=>'123456789','hobiji'=>['sleposana','ritenbrauksana'], 'epasti'=>['example1@gmail.com','example2@gmail.com']];
// print_r($myArray3['vards']." ".$myArray3['uzvards']);

foreach($myArray3 as $key=>$value){
	if(!is_array($value)){ //$key!='hobiji' && $key!='epasti'
	print($key." vertiba ir  ".$value."; \n");

}

else{
	// print($key." vertiba ir ");
	// print_r($value);
		// echo('Te sakas hobiju printesana: ');
	foreach ($value as $key2 => $value2) {
			print($value2 ."; \n"); //iekavas bija ari $key2 . " vertiba ir  ". 
		}
	}
}

$flag=5;

if($flag>=5){
	echo('yay');

}
elseif($flag<=4){
	echo('yay2');
}
else{
	echo('Naan???');
}

echo(' ');

switch ($flag){
	case 1:
	echo('1 atrums');
	break;
	case 5:
	echo('5 atrums');
	break;

	default:
	echo('nav atrums');
	break;

}


	// print($key." vertiba ir ".$value."; \n ");
//}
// dd($myArray); //display and die
// die();
// echo(1);

?>