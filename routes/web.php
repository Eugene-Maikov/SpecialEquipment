<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
//Маршрут на Users. Выбираем тот контроллер, который будет обрабатывать. Регистрация и Авторизация
Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/create', function () {
    return view('create');
})->name('create');

Route::post('/users', [\App\Http\Controllers\UserController::class, 'registration'])->name('users.registration.store');
Route::post('/auth', [\App\Http\Controllers\UserController::class, 'auth'])->name('users.login');

//Переход в ЛК
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
//Выход из ЛК
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');


//Обновляет заявки
Route::post('/application', [ApplicationController::class, 'store'])->name('application.store');
