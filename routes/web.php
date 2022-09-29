<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;



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


// Route::get('/{name}', function ($name) {
//     $sec_syntax = "<h5>Adil Alam R Puri<h5>";
//     $data = compact('name','sec_syntax');
    
//     return view('home')->with($data);
// });

// Route::get('/demo',function () {
//     return view('demo');
// });

// Basic Controllers ********************
Route::get('/',[DemoController::class, 'index']);
Route::get('/about',[DemoController::class, 'about']);
Route::get('/register',[RegistrationController::class, 'index'])->name('register');
Route::get('/register/view',[RegistrationController::class, 'view']); //anchor tag always get method ko hit krta hai
Route::get('/register/delete/{id}',[RegistrationController::class, 'delete'])->name('user.delete');
Route::get('/register/edit/{id}',[RegistrationController::class, 'edit'])->name('user.edit');
Route::post('/register/update/{id}',[RegistrationController::class, 'update'])->name('user.update');

Route::post('/register',[RegistrationController::class, 'register']); //only data submit krane ka kaam aata hai


// Route::get('/form', function () {
//     return view('form');
// });
// sec method 
// Route::get('/about','App\Http\Controllers\DemoController@about');
// Route::get('/about','DemoController@about'); laravel version - 7 me use hota tha

// Single Action Controller ***************
// Route::get('/demo', SingleActionController::class);

// Resource Controller ***********
// Route::get('/product', ProductController::class);




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo',function() {
//     return view('demo');
// });

// Route::any('/test', function() { //any is not a methode . any provided by laravel only
//     echo "testing";
// });

// Route::post('/test', function() {
//     echo "testing";
// });

// Route::put('user{id}', function() {

// });

// Route::patch();

// Route::delete('/test', function() {

// });