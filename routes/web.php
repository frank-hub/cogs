<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\COGSController as COGS;

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
    return view('auth/login');
});

Route::get('/add', function (){
    return view('add');
});
Route::get('/view',[COGS::class,'index']);

Route::post('/add',[App\Http\Controllers\COGSController::class,'store'])->name('post_cogs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
