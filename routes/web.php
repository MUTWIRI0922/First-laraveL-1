<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});  

route::get('/Create', [MainController::class,'create'])->name('Create');
route::post('/Store',[maincontroller::class,'store'])->name('Store');
Route::get('/login',[Authcontroller::class,"login"])->name('login');
Route::post('/login',[Authcontroller::class,"loginsubmit"])->name('login.submit');
Route::get('/Register', [Authcontroller::class,"register"]);
Route::post('/Register',[Authcontroller::class,"registersubmit"])->name('register.submit');