<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\addcategoryController;

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
    return view('welcome');
});

Route::post('/login', [loginController::class, 'index'])->name('login');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/slider', [sliderController::class, 'index'])->name('slider');
Route::get('/category', [categoryController::class, 'index'])->name('category');
Route::get('/subcategory', [subcategoryController::class, 'index'])->name('subcategory');
Route::get('/addcategory', [addcategoryController::class, 'index'])->name('addcategory');

