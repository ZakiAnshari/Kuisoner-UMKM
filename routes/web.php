<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TtdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

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

//HOME
Route::get('/',[HomeController::class, 'index']);
Route::get('/question',[QuestionController::class, 'index']);
Route::get('/ttd',[TtdController::class, 'index']);
Route::get('/pdf',[PdfController::class, 'index']);
