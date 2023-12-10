<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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


// Route::get('/', [UserController::class, 'index'])->name('index');

// Route::get('register', [UserController::class, 'register'])->name('register');
// Route::post('register', [UserController::class, 'register_action'])->name('register.action');

// Route::get('login', [UserController::class, 'login'])->name('login');
// Route::post('login', [UserController::class, 'login_action'])->name('login.action');

// Route::get('home', [UserController::class, 'index'])->name('home');

// Route::get('change-password', [UserController::class, 'changePassword'])->name('change.password');
// Route::post('change-password', [UserController::class, 'changePasswordAction'])->name('change.password.action');

// Route::get('test', [TestController::class, 'index'])->name('test.index');

// Route::post('test/submit', [TestController::class, 'submit'])->name('test.submit');

// Route::get('history', [TestController::class, 'history'])->name('test.history');

// Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Route::post('test.store', [TestController::class, 'store'])->name('test.store');

//Home route
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/self-assessment', [HomeController::class, 'selfAssessment'])->name('home.self-assessment');
Route::get('/technique', [HomeController::class, 'technique'])->name('home.technique');
Route::get('/breathing-phase', [HomeController::class, 'breathingPhase'])->name('home.breathing-phase');

// Auth route with middleware
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/login', [AuthController::class, 'loginAction'])->name('auth.login.action');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'registerAction'])->name('auth.register.action');
});

// with auth middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Profile route with middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password.action');
    Route::get('profile/history/test-result/{datenow}', [ProfileController::class, 'historyDetail'])->name('profile.history.detail');

    Route::get('/test/show/{id}', [TestController::class, 'show'])->name('test.show');
    Route::post('/test/submit', [TestController::class, 'submit'])->name('test.submit');
    Route::get('/test/result', [TestController::class, 'showResult'])->name('test.result');

});
