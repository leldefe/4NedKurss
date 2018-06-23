<?php
use App\User;
use App\LeaderBoard;
?>

@extends('layout/default')

@section('content')



		<h1>Let's play some SUDOKU</h1>
		<div class="container-fluid" id="aboutUs">

		<div class="col" id="paddingtable">

			<table class="sudoku2" align="center">
				<thead>
					<tr>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="cell-border-top cell-border-left" >
							<input type="numbers" size="1" id="value0" autocomplete="off"></input>
						</td>
						<td class="cell-border-top">
							<input type="numbers" size="1" id="value1" autocomplete="off"></input>
						</td>
						<td class="cell-border-top cell-border-right">
							<input type="numbers" size="1" id="value2" autocomplete="off"></input>
						</td>
						<td class="cell-border-top">
							<input type="numbers" size="1" id="value3" autocomplete="off"></input>
						</td>
						<td class="cell-border-top">
							<input type="numbers" size="1" id="value4" autocomplete="off"></input>
						</td>
						<td class="cell-border-top cell-border-right">
							<input type="numbers" size="1" id="value5" autocomplete="off"></input>
						</td>
						<td class="cell-border-top cell-border-left">
							<input type="numbers" size="1" id="value6" autocomplete="off"></input>
						</td>
						<td class="cell-border-top">
							<input type="numbers" size="1" id="value7" autocomplete="off"></input>
						</td>
						<td class="cell-border-top cell-border-right">
							<input type="numbers" size="1" id="value8" autocomplete="off"></input>
						</td>
					</tr>
					<tr >
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value9" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value10" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value11" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value12" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value13" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value14" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value15" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value16" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value17" autocomplete="off"></input>
						</td>
					</tr>
					<tr class="cell-border-bottom">
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value18" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value19" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value20" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value21" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value22" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value23" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value24" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value25" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value26" autocomplete="off"></input>
						</td>
					</tr>
					<tr>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value27" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value28" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value29" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value30" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value31" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value32" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value33" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value34" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value35" autocomplete="off"></input>
						</td>
					</tr>
					<tr>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value36" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value37" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value38" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value39" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value40" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value41" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value42" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value43" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value44" autocomplete="off"></input>
						</td>
					</tr>
					<tr class="cell-border-bottom">
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value45" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value46" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value47" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value48" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value49" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value50" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value51" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value52" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value53" autocomplete="off"></input>
						</td>
					</tr>
					<tr>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value54" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value55" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value56" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value57" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value58" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value59" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value60" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value61" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value62" autocomplete="off"></input>
						</td>
					</tr>
					<tr>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value63" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value64" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value65" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value66" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value67" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value68" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value69" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value70" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value71" autocomplete="off"></input>
						</td>
					</tr>
					<tr class="cell-border-bottom">
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value72" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value73" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value74" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value75" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value76" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value77" autocomplete="off"></input>
						</td>
						<td class="cell-border-left">
							<input type="numbers" size="1" id="value78" autocomplete="off"></input>
						</td>
						<td>
							<input type="numbers" size="1" id="value79" autocomplete="off"></input>
						</td>
						<td class="cell-border-right">
							<input type="numbers" size="1" id="value80" autocomplete="off"></input>
						</td>
					</tr>
				</tbody>

			</table>
			<div class="wrapper">
				<button class="btn btn-primary text-light text-justify" id="moreBtn" align="center" onclick="return test(); " >Test</button>
				
				<p id="demo">Click on the table above and I will count forever.</p>
			

			</div>

		</div>


<script>


</script>

<script>
	// flag = 0;
	var i=0;

	var timer = setInterval(function(){
		document.getElementById("demo").innerHTML = i++;
	}, 1000);
</script> 


<script>
	var board=[];
	var userBoard = [];
	var randomBoard = [];

	function game(){

		board[0] = [4,2,6,5,7,1,3,9,8,8,5,7,2,9,3,1,4,6,1,3,9,4,6,8,2,7,5,9,7,1,3,8,5,6,2,4,5,4,3,7,2,6,8,1,9,6,8,2,1,4,9,7,5,3,7,9,4,6,3,2,5,8,1,2,6,5,8,1,4,9,3,7,3,1,8,9,5,7,4,6,2];

		board[1] = [4,3,5,2,6,9,7,8,1,6,8,2,5,7,1,4,9,3,1,9,7,8,3,4,5,6,2,8,2,6,1,9,5,3,4,7,3,7,4,6,8,2,9,1,5,9,5,1,7,4,3,6,2,8,5,1,9,3,2,6,8,7,4,2,4,8,9,5,7,1,3,6,7,6,3,4,1,8,2,5,9];

		board[2]=[5,6,8,3,1,9,4,7,2,7,9,1,4,5,2,3,6,8,2,3,4,6,7,8,5,9,1,6,1,9,5,8,4,7,2,3,3,2,5,7,9,1,6,8,4,4,8,7,2,3,6,9,1,5,1,4,3,8,6,7,2,5,9,8,5,6,9,2,3,1,4,7,9,7,2,1,4,5,8,3,6];

var number = Math.floor(Math.random() * 3); // uzģenerēs skaitli no 0 līdz 2
randomBoard = board[number];

document.getElementById("value0").value = randomBoard[0];
document.getElementById("value5").value = randomBoard[5];
document.getElementById("value6").value = randomBoard[6];
document.getElementById("value8").value = randomBoard[8];
document.getElementById("value12").value = randomBoard[12];
document.getElementById("value14").value = randomBoard[14];
document.getElementById("value17").value = randomBoard[17];
document.getElementById("value19").value = randomBoard[19];
document.getElementById("value21").value = randomBoard[21];
document.getElementById("value25").value = randomBoard[25];
document.getElementById("value27").value = randomBoard[27];
document.getElementById("value28").value = randomBoard[28];
document.getElementById("value29").value = randomBoard[29];
document.getElementById("value32").value = randomBoard[32];
document.getElementById("value33").value = randomBoard[33];
document.getElementById("value38").value = randomBoard[38];
document.getElementById("value40").value = randomBoard[40];
document.getElementById("value50").value = randomBoard[50];
document.getElementById("value55").value = randomBoard[55];
document.getElementById("value57").value = randomBoard[57];
document.getElementById("value58").value = randomBoard[58];
document.getElementById("value61").value = randomBoard[61];
document.getElementById("value62").value = randomBoard[62];
document.getElementById("value69").value = randomBoard[69];
document.getElementById("value70").value = randomBoard[70];
document.getElementById("value74").value = randomBoard[74];
document.getElementById("value77").value = randomBoard[77];
console.log(randomBoard);
}
window.onload=game;

function submitToServer(){
	$("[name=totalTime]").val(i);

	$("form").submit();
}

function test(){

	for(var i = 0; i <= 80; i++){
		var value = document.getElementById("value" + i).value;
		document.getElementById("value" + i).style.backgroundColor = "white";
		userBoard[i] = value;}
// savācam visas ievadītās vērtības masīvā userBoard
for(var i = 0; i <= 80; i++){
	if (randomBoard[i]!=userBoard[i]){
		document.getElementById("value" + i).style.backgroundColor = "red";

		submitToServer();

		alert ("nav pareizi");
		return false;
	} 
}


clearInterval(timer);
submitToServer();

alert ("pareizi");
return true;

}
</script>
</div>

<h1>Leaderboard</h1>
<div class="container-fluid text-light text-justify" id="aboutUs">

	@php
	$i=0;
	$players = LeaderBoard::orderBy('time')->get();;

	@endphp
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">ID</th>
				<th scope="col">Time</th>
			</tr>
		</thead>

		@foreach($players as $key => $player)

		@php
		$userdata = User::where('id', '=', $player["user_id"])->first();
		$i++;

		@endphp

		<tbody>
			<tr>
				<th scope="row">

					{{$i}}
				</th>
				<td>{{$userdata["name"]}}</td>
				<td>{{$player["time"]}}</td>
			</tr>
		</tbody>

		@endforeach
	</table>


	<form method="post" action="{{ route('create.leaderboard')}}">
		@csrf
		<input type="hidden" name="userId" value="{{Auth::user()->id }}"/>
		<input type="hidden" name="totalTime" value=""/>
</div>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>

</form>


@endsection