<?php
use App\User;
use App\LeaderBoard;
use \Auth as Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', function(){
	return view('auth/login');
})->name('auth.login');
Route::get('/logout', function(){
	Auth::logout();
	return view('welcome');
})->name('auth.logout');
Route::get('/login2', 'MyController@index');
Route::post('/login', function(){
	$user = User::where('email', $_POST['email'])
		->where('password', $_POST['password'])
		->first();
	if(isset($user)){
		Auth::login($user);
		return  redirect(route('layout.sudoku'));
		//return redirect(route('home'));
	}
	else {
		return redirect()
				->back()
				->withInput()
				->with(['error' => 'Nepareizs e-pasts vai parole!']);
	}
	
});
Route::get('/register', function(){
	return view('auth/register');
})->name('auth.register');

Route::post('/register', function(){
	// var_dump($_POST);
	// echo($_POST['email']);
	$existing = User::where('email', '=', $_POST['email'])->count();
	if($_POST['password'] !== $_POST['password_confirmation']){
		$error = 'Paroles nesakrīt!';
	}
	else if($existing>0){
		$error = 'Nederīgs e-pasts!';
	}
	if(isset($error)){
		return redirect()
				->back()
				->withInput()
				->with(['error' => $error]);
	}
	$user = new User();
	$user->name = $_POST['name'];
	$user->email = $_POST['email'];
	$user->password = $_POST['password'];
	$user->save();
	return redirect( route('auth.login') );
});
Route::get('/meme', function(){
	return view('welcome');
})->name('meme');



Route::get('/sudoku', function(){
	return view('layout/sudoku');
})->name('layout.sudoku');
  //Route::resource('tasks', 'TaskController');


Route::post('/sudoku-done', function () {
	$leaderboard = new LeaderBoard();
	$leaderboard->user_id = $_POST['userId'];
	$leaderboard->time = $_POST['totalTime'];
	$leaderboard->save();
	return  redirect(route('layout.sudoku'));
})->name('create.leaderboard');

	
