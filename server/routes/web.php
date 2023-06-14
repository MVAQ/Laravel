<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;

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



Route::get('/', [ControllerHome::class, home])->name('home');
Route::get('/singIn', [ControllerHome::class, singIn])->name('singIn');
Route::get('/categorys', [ControllerHome::class, categorys])->name('categorys');
Route::get('/categorys/category/{product}', [ControllerCategory::class, categorys])->name('category');
Route::get('/contscts', [ControllerHome::class, contscts])->name('contscts');
Route::get('/about', [ControllerHome::class, about])->name('about');



