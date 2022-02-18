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

Route::get('/farmers/add', function (){
    return view('/farmers/add');
});
Route::get('/fermers/view',[App\Http\Controllers\FarmerController::class,'index']);
Route::post('/farmers/add',[App\Http\Controllers\FarmerController::class,'store'])->name('post_farmers');

Route::get('/buyer/add', function (){
    return view('/buyer/add');
});
Route::get('/buyer/view',[App\Http\Controllers\BuyerController::class,'index']);
Route::post('/buyer/add',[App\Http\Controllers\BuyerController::class,'store'])->name('post_buyer');


Route::get('/jobtype/add', function (){
    return view('/jobtype/add');
});
Route::get('/jobtype/view',[App\Http\Controllers\JobTypeController::class,'index']);
Route::post('/jobtype/add',[App\Http\Controllers\JobTypeController::class,'store'])->name('post_jobtype');

Route::get('/transit/add', function (){
    return view('/transit/add');
});
Route::get('/transit/view',[App\Http\Controllers\TransitBreakdownController::class,'index']);
Route::post('/transit/add',[App\Http\Controllers\TransitBreakdownController::class,'store'])->name('post_transit');

Route::get('/expenditure/add', function (){
    return view('/expenditure/add');
});
Route::get('/expenditure/view',[App\Http\Controllers\LoanController::class,'index']);
Route::post('/expenditure/add',[App\Http\Controllers\LoanController::class,'store'])->name('post_expenditure');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
