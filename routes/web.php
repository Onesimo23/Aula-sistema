<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\CategoryController;

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
Route::get('/course', [CourseController::class, 'getCourse'])->name('course.index');
Route::put('/course/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscription.index');
Route::post('/inscriptions', [InscriptionController::class, 'store'])->name('inscription.store');
Route::put('/inscriptionUp/{inscription}', [InscriptionController::class, 'update'])->name('inscription.update');
// Route::post('/inscriptionUp', [InscriptionController::class, 'update'])->name('inscription.update');
Route::delete('/inscription/{inscription}', [InscriptionController::class, 'destroy'])->name('inscription.destroy');//rotas por ver
Route::post('course', [CourseController::class, 'store'])->name('course.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::get('detalhes', [UserController::class, 'create'])->name('detalhes');
Route::get('detalhes/{id}', [UserController::class, 'create'])->name('detalhes');

Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');



//Rotas de Categorias
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create',[ CategoryController::class,'create'])->name('category.create');
Route::post('/category',[ CategoryController::class,'store'])->name('category.store');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}',[CategoryController::class,'show'])->name('category.show');
Route::delete('/category/{id}',[CategoryController::class,'destroy'])->name('category.destroy');