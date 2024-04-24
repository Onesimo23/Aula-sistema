<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('/description', [UserController::class, 'description'])->name('description');
Route::get('/course', [CourseController::class, 'getCourse'])->name('course.index'); //rotas por ver
Route::post('course', [CourseController::class, 'store'])->name('course.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::get('detalhes', [UserController::class, 'create'])->name('detalhes');
Route::get('detalhes/{id}', [UserController::class, 'create'])->name('detalhes');

Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payments', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

