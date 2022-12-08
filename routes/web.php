<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'welcome'])->name('welcome');

Route::get('/saving-account',[HomeController::class,'savingAccount'])->name('saving-account');

Route::get('/saving-account/{id}',[HomeController::class,'savingAccountDetails'])->name('saving-account.details');

Route::get('/loan/{type}',[HomeController::class,'loan'])->name('loan');

Route::get('/loan/{type}/{id}',[HomeController::class,'loanDetails'])->name('loan.details');

Route::get('/credit-cards',[HomeController::class,'creditCard'])->name('credit-cards');

Route::get('/credit-card/{id}',[HomeController::class,'creditCardDetails'])->name('credit-card.details');

Route::get('/blogs/{id}',[HomeController::class,'blog'])->name('blog');