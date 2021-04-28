<?php

use App\Http\Controllers\BreweriesController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/* Rotte principali */
Route::get('/', [FrontController::class , 'index'])->name('/');
Route::get('/breweries',[FrontController::class , 'breweries'])->name('brewery.breweries');
Route::get('/team', [FrontController::class , 'team'])->name('team');
Route::get('/search',[FrontController::class , 'search'])->name('search');

/* Rotte birrerie */
Route::get('/brewery/{id}/details',[BreweriesController::class,'details'])->name('brewery.details');
Route::post('/brewery/{id}/update',[BreweriesController::class,'update'])->name('brewery.update');
Route::delete('/brewery/{id}/destroy',[BreweriesController::class,'destroy'])->name('brewery.destroy');

Route::post('/breweries/{id}/approved',[BreweriesController::class, 'approved'])->name('approved');
Route::post('/brewery/{id}comments',[BreweriesController::class,'addComment'])->name('brewery.comments.add');

/* Rotte utente loggato (contattaci) */
Route::get('/contacts',[HomeController::class , 'contact'])->name('contact.contacts');
Route::post('/contacts/submit' ,[HomeController::class, 'submit'])->name('contact.submit');
Route::get('/contacts/thankyou' ,[HomeController::class, 'thankyou'])->name('contact.thankyou');

/* Rotte utente loggato (segnala birreria) */
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/report' ,[HomeController::class, 'report'])->name('report');
Route::post('/notify' ,[HomeController::class, 'notify'])->name('notify');
Route::get('/brewery/notify/thanks' ,[HomeController::class, 'thanks'])->name('brewery.thankyou');



Auth::routes();

