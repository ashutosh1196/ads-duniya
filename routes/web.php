<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'welcome'])->name('welcome');

Route::get('/saving-account',[HomeController::class,'savingAccount'])->name('saving-account');

Route::get('/saving-account/{id}',[HomeController::class,'savingAccountDetails'])->name('saving-account.details');

Route::get('/loan/{type}',[HomeController::class,'loan'])->name('loan');

Route::get('/loan/{type}/{id}',[HomeController::class,'loanDetails'])->name('loan.details');

Route::get('/credit-cards',[HomeController::class,'creditCard'])->name('credit-cards');

Route::get('/credit-card/{id}',[HomeController::class,'creditCardDetails'])->name('credit-card.details');

Route::get('/blogs/{id}',[HomeController::class,'blog'])->name('blog');

Route::get('/mutual-fund',[HomeController::class,'mutualFund'])->name('mutual-fund');

Route::get('/mutual-fund/{id}',[HomeController::class,'mutualFundDetails'])->name('mutual-fund.details');

Route::get('/demat',[HomeController::class,'demat'])->name('demat');
Route::get('/demat/{id}',[HomeController::class,'dematDetails'])->name('demat.details');

Route::get('/auto',[HomeController::class,'auto'])->name('auto');
Route::get('/auto/{id}',[HomeController::class,'autoDetails'])->name('auto.details');