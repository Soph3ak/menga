<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/manga-details',[PageController::class,'mangaDetails'])->name('manga-details');
Route::get('/manga-reading',[PageController::class,'mangaReading'])->name('manga-reading');
Route::get('/categories',[PageController::class,'categories'])->name('categories');


/*Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::apiResource('customer',CustomerController::class);
Route::get('/getCustomer',[CustomerController::class,'getCustomer'])->name('customer.getCustomer');*/
