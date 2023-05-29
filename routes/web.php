<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'signup');


//navigating between login and signup pages
Route::get('/login', [UserController::class, 'goToLogin']);
Route::get('/signup', [UserController::class, 'goToSignup']);

//posting the signup data
Route::post('/signupUser', [UserController::class, 'signUp'])->name('register-user');

