<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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



Route::get('/welcome',[HomeController::class,'login'])->name('login');

Route::get('/contacts',[ContactController::class,'index'])->name('contacts.index');

Route::get('/companies',[CompanyController::class,'index'])->name('companies.index');

Route::post('/contacts/store',[ContactController::class,'store'])->name('contacts.store');

Route::get('/contacts/create',[ContactController::class,'create'])->name('contacts.create');

Route::get('/contact/{id}',[ContactController::class,'show'])->name('contacts.show');

Route::put('/contact/{id}',[ContactController::class,'update'])->name('contacts.update');

Route::delete('/contact/{id}',[ContactController::class,'destroy'])->name('contacts.destroy');

Route::get('/contact/{id}/edit',[ContactController::class,'edit'])->name('contacts.edit');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
