<?php
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


Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('home', [UserController::class, 'index'])->name('home');

Route::get('change-password', [UserController::class, 'changePassword'])->name('change.password');
Route::post('change-password', [UserController::class, 'changePasswordAction'])->name('change.password.action');

Route::get('test', [TestController::class, 'index'])->name('test.index');

Route::post('test/submit', [TestController::class, 'submit'])->name('test.submit');

Route::get('history', [TestController::class, 'history'])->name('test.history');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route:: post('test/store', [TestController::class, 'store'])->name('test.store');

// Testing Route
Route::get('beranda', function () {
    return view('home');
})->name('beranda');

Route::get('self-assessment', function () {
    return view('self-assessment');
})->name('self-assessment');

Route::get('detail-selfassessment', function () {
    return view('detail-selfassessment');
})->name('self-assessment.detail');

Route::get('mindfulness', function () {
    return view('mindfulness');
})->name('mindfulness');

Route::get('breathing-phase', function () {
    return view('breathing-phase');
})->name('breathing-phase');

Route::get('profile', function () {
    return view('profile');
})->name('profile');
