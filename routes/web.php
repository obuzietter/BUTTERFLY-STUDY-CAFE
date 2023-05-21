<?php

use App\Models\User;
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
// Route::get('/', function(){
//     return view('home');
// });

Route::view('services', 'services');
Route::view('booking', 'booking');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('navigation', 'navigation');
Route::view('studyspace', 'studyspace');
Route::view('laptopspace', 'laptopspace');
Route::view('groupspace', 'groupspace');
Route::view('restingarea', 'restingarea');

Route::post('signup', function(){
    $user = new User();
    
    $user->first_name = request('first_name');
    $user->last_name = request('last_name');
    $user->email = request('email');  
    $user->password = request('password');
    $user->save();
});
