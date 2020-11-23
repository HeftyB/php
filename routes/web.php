<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeftyBController;
use App\Http\Controllers\LoginRegisterController;

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

Route::get('/', [HeftyBController::class, 'index']);

Route::get('/contact', [HeftyBController::class, 'contact']);

Route::get('/register', [LoginRegisterController::class, 'register'])
->name('register');

Route::get('/login', [LoginRegisterController::class, 'login'])
->name('login');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/landing', function () {
    return Inertia\Inertia::render('Landing');
})->name('landing');