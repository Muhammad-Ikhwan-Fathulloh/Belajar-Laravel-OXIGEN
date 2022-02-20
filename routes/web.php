<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PortofolioController::class, 'welcome']);

Route::get('/', [PortofolioController::class, 'home']);
Route::get('/about', [PortofolioController::class, 'about']);
Route::get('/service', [PortofolioController::class, 'service']);
Route::get('/contact', [PortofolioController::class, 'contact']);

