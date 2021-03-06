<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

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
});

Route::get('/login',function(){
  return view('login'); 
});

Route::post('/logincheck',[PanelController::class, 'login']);


Route::post('/panel',function(){
  return view('panel')->middleware('checkSession');
});


