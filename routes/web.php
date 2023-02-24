<?php

use App\Http\Controllers\Contact\ShowContactFormController;
use App\Http\Controllers\Pages\ShowHomePageController;
use App\Http\Controllers\Pages\ShowProjectsController;
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

Route::get('/', ShowHomePageController::class)->name('index');
Route::get('/portfolio', ShowProjectsController::class)->name('portfolio.show');
Route::get('/contact', ShowContactFormController::class)->name('contact.show');
