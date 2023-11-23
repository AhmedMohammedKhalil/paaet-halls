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


Route::get('/', 'HomeController@index')->name('home');
Route::middleware(['guest:admin', 'guest:supervisor', 'guest:professor'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/supervisor/login', 'SupervisorController@showLoginForm')->name('supervisor.login');
    Route::get('professor/login', 'ProfessorController@showLoginForm')->name('professor.login');
    Route::get('/professor/register', 'ProfessorController@showRegisterForm')->name('professor.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');
});

Route::middleware(['auth:supervisor'])->name('supervisor.')->prefix('supervisor')->group(function () {
    Route::get('/dashboard', 'SupervisorController@dashboard')->name('dashboard');
    Route::get('/profile', 'SupervisorController@profile')->name('profile');
    Route::get('/settings', 'SupervisorController@settings')->name('settings');
    Route::get('/changePassword', 'SupervisorController@changePassword')->name('changePassword');
    Route::get('/logout', 'SupervisorController@logout')->name('logout');
});


Route::middleware(['auth:professor'])->name('professor.')->prefix('professor')->group(function () {
    Route::get('/profile', 'ProfessorController@profile')->name('profile');
    Route::get('/settings', 'ProfessorController@settings')->name('settings');
    Route::get('/changePassword', 'ProfessorController@changePassword')->name('changePassword');
    Route::get('/logout', 'ProfessorController@logout')->name('logout');
});
