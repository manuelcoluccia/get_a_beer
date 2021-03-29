<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontController::class , 'index'])->name('/');
Route::get('/breweries',[FrontController::class , 'breweries'])->name('brewery.breweries');
Route::get('/team', [FrontController::class , 'team'])->name('team');
Route::post('/breweries/{id}/approved',[FrontController::class, 'approved'])->name('approved');
Route::get('/brewery/{id}/details',[FrontController::class,'details'])->name('brewery.details');
Route::post('/brewery/{id}/update',[FrontController::class,'update'])->name('brewery.update');
Route::delete('/brewery/{id}/destroy',[FrontController::class,'destroy'])->name('brewery.destroy');

Route::get('/about',[HomeController::class , 'about'])->name('about');
Route::post('/contacts/submit' ,[HomeController::class, 'submit'])->name('contact.submit');
Route::get('/contacts/thankyou' ,[HomeController::class, 'thankyou'])->name('contact.thankyou');
Route::get('/report' ,[HomeController::class, 'report'])->name('report');
Route::post('/notify' ,[HomeController::class, 'notify'])->name('notify');
Route::get('/brewery/notify/thanks' ,[HomeController::class, 'thanks'])->name('brewery.thankyou');
Route::get('/home', [HomeController::class, 'index'])->name('home');



Auth::routes();

