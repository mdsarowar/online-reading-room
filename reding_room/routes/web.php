<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
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
Route::get('/addbook',[admincontroller::class,'addbook']);
Route::post('table',[admincontroller::class,'addtable']);

Route::get('/showbook/{cat}',[usercontroller::class,'showbook']);
Route::get('/show/{id}',[usercontroller::class,'show']);
Route::get('/mbshow/{id}',[usercontroller::class,'mbshow']);

Route::get('/mybook/{cat}',[usercontroller::class,'mybook']);
Route::get('/addmybook/{id}',[usercontroller::class,'addmybook']);