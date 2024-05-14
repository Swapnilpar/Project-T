<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('register');
})->name( 'signup' );



// Route::get('/register', function () {
//     return view('register');
// })->name( 'register' );


// Route::get('/login', function () {
//     return view('login');
// })->name( 'login' );
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name("register");
    Route::post('/register', [AuthController::class, 'registerPost'])->name("register");
    
    Route::get('/login', [AuthController::class, 'login'])->name("login");
    Route::post('/login', [AuthController::class, 'loginPost'])->name("login");
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name("logout");

    Route::get('/notes', function () {
        return view('notes');
    })->name( 'notes' );
    Route::get('/tools', function () {
        return view('tools');
    })->name( 'tools' );
    Route::get('/news', function () {
        return view('news');
    })->name( 'news' );
    Route::get('/programming', function () {
        return view('programming');
    })->name( 'Programming' );
});
// Route::post('/signup', [AuthManager::class, 'registerPost'])->name("register-post");

// Route::get('/login', [AuthManager::class, 'login'])->name("login");
// Route::post('/login', [AuthManager::class, 'loginPost'])->name("login-post");

// Route::get('/logout', [AuthManager::class, 'logout'])->name("logout");



