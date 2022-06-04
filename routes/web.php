<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Product;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\TestController;
use App\Http\Controllers\AbouttController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/' , [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect' , [HomeController::class,'redirect']);
Route::get('/view_product' , [AdminController::class,'view_product']);
Route::post('/add_product' , [AdminController::class,'add_product']);
Route::get('/show_product' , [AdminController::class,'show_product']);
Route::get('/delete_product/{id}' , [AdminController::class,'delete_product']);
Route::get('/update_product/{id}' , [AdminController::class,'update_product']);
Route::post('/edit_product/{id}' , [AdminController::class,'edit_product']);
Route::get('/product_home' , [HomeController::class,'prod']);
Route::get('/contact_us' , [HomeController::class,'contact_us']);
Route::get('/about' , [HomeController::class,'about']);
Route::get('/test' , [HomeController::class,'test']);

Route::get('/product_detales/{id}' , [HomeController::class,'product_detales']);

Route::get('/men_product' , [AdminController::class,'menproduct']);
Route::get('/wommen_product' , [AdminController::class,'wommenproduct']);
Route::get('/kids_product' , [AdminController::class,'kidsproduct']);
Route::get('/contact-us',[ContactController::class,'contact']);

Route::post('contact',[ContactController::class,'sendEmail'])->name('contact.us');

Route::get('/getName',[TestController::class,'getFirstLastName']);
Route::get('/add_about' , [AbouttController::class,'index']);
Route::post('/about' , [AbouttController::class,'show']);