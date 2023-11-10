<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Routes for Showing login page and login logic and process */

Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');
Route::any('/login', [AuthController::class, 'login'])->name('login');

/* Resource Route for the Main website content
(At the moment include only the index and create function or actions and routes for the Dashboard page and Register Page.) 
*/
Route::resource('dashboard', MainController::class)->only(['index', 'create']);
