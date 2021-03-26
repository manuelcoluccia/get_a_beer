<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class , 'index'])->name('/');
Route::get('/breweries',[FrontController::class , 'breweries'])->name('breweries');
Route::get('/team', [FrontController::class , 'team'])->name('team');

Route::get('/about',[HomeController::class , 'about'])->name('about');
Route::post('/contacts/submit' ,[HomeController::class, 'submit'])->name('contact.submit');
Route::get('/contacts/thankyou' ,[HomeController::class, 'thankyou'])->name('contact.thankyou');
Route::get('/report' ,[HomeController::class, 'report'])->name('report');
Route::post('/notify' ,[HomeController::class, 'notify'])->name('notify');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
