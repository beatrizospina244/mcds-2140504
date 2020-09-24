<?php

use Illuminate\Support\Facades\Route;
use\Carbon\Carbon;

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
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('Bienvenido al nuevo mundo', function () {
    dd('Welcome to new Word');
});
Route::get('users', function () {
    dd(App\User::all());
});

Route::get('user/{id}', function ($id) {
    dd(App\User::findOrFail($id));
});

Route:: get('challenge', function() {
    foreach (App\User::all()->take(10) as $user) {
        $years =Carbon::createFromDate($user->birthadte)->format('%y years old');
        $since = Carbon::parse($user->created_at);
        $rs[] = $user->fullname." - ".$years." - created ".$since->diffForHumans();

    }

    return view('challenge' , ['rs' => $rs]);
});
 

Route::get('/examples', function () {
    $users = App\User::all()->take(10);
    $categories = App\Category::all()->take(0);
    $games = App\Game::all();
    return view('examples',['users'=>$users,'categories'=>$categories,'games'=>$games]);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
