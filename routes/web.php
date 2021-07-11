<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Subscribe;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/services/{service}', [PagesController::class, 'services']);
Route::post('/subscribe', [Subscribe::class, 'subscribe']);
Route::post('/send-email', [ContactController::class, 'sendMail']);