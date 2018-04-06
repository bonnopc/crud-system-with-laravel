<?php
use App\Http\Requests\stuRequest;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//index page
Route::get('student','mycont@stuview');

//Table View
Route::get('stuprocess','mycont@stuprocess');

//Edit
Route::get('valueedit/{id}','mycont@editstu');

//Update
Route::post('editedvalue','mycont@stuupdate');

//Delete
Route::get('valuedelete/{id}','mycont@deletestu');

Route::post('stuwelcome','mycont@welcome');



?>