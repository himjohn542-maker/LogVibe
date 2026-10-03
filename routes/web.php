<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\user\ProfileController; 
use App\Http\Controllers\PageController;
use App\Http\Controllers\feed\PostController;


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
    return view('home');
})->name('homePage');


Route::middleware(['guest'])->group(function () {

    Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('showRegisterPage');
    Route::post('/register', [AuthController::class, 'registerUser'])->name('register.user');

    Route::get('/login', [AuthController::class, 'showLoginPage'])->name('showLoginPage');
    Route::post('/login', [AuthController::class, 'LoginUser'])->name('login.user');
});


Route::Post('/logout', [AuthController::class, 'logoutUser'])->name('logout.user');

Route::middleware(['auth'])->group(function () {
    
     // PAGE CONTROLLER
    Route::get('/page',[PageController::class, 'homePage'])->name('Page');

    // PROFILE CONTROLLER
    Route::resource('profile', ProfileController::class);

    // POST CONTROLLER
    Route::resource('post', PostController::class);
});
