<?php
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	$phrase = DB::table('phrases')->get()->first();
	return view('welcome')->with(['phrase' => $phrase]);
});


Route::get('/howiloveyou', function () {
    return view('welcome');
});

Route::resource('phrases', 'PhrasesController');