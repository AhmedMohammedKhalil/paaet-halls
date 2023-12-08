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
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/allbuildings', 'HomeController@allbuildings')->name('allbuildings');
Route::get('/allhalls', 'HomeController@allhalls')->name('allhalls');
Route::get('/showbuilding', 'HomeController@showbuilding')->name('showbuilding');
Route::get('/showhall', 'HomeController@showhall')->name('showhall');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/search-showhall', 'HomeController@searchShowHall')->name('search-showhall');
Route::get('/showhalltable', 'HomeController@showHalltable')->name('showhalltable');



Route::middleware(['guest:admin', 'guest:supervisor', 'guest:professor'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/supervisor/login', 'SupervisorController@showLoginForm')->name('supervisor.login');
    Route::get('/supervisor/register', 'SupervisorController@showRegisterForm')->name('supervisor.register');
    Route::get('/supervisor/approval', 'SupervisorController@waitapproval')->name('supervisor.approval');
    Route::get('professor/login', 'ProfessorController@showLoginForm')->name('professor.login');
    Route::get('/professor/register', 'ProfessorController@showRegisterForm')->name('professor.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::prefix('/service')->name('service.')->group(function () {
        Route::get('/index', 'ServiceController@index')->name('index');
        Route::get('/create', 'ServiceController@create')->name('create');
        Route::get('/edit', 'ServiceController@edit')->name('edit');
        Route::delete('/delete', 'ServiceController@delete')->name('delete');

    });

    Route::prefix('/supervisor')->name('supervisor.')->group(function () {
        Route::get('/index', 'SupervisorController@index')->name('index');
        Route::get('/show', 'SupervisorController@show')->name('show');
        Route::get('/showhall', 'HallController@showHall')->name('showHall');
        Route::get('/showhalltable', 'HallController@showHallTable')->name('showHallTable');
        Route::get('/accept', 'SupervisorController@accept')->name('accept');
        Route::get('/reject', 'SupervisorController@reject')->name('reject');

    });


    Route::prefix('/professor')->name('professor.')->group(function () {
        Route::get('/index', 'ProfessorController@index')->name('index');
        Route::get('/show', 'ProfessorController@show')->name('show');
        Route::get('/showtable', 'ProfessorController@showTable')->name('showTable');
        Route::get('/showhall', 'HallController@professorShowHall')->name('showHall');

    });
   // admin.contact.index
    Route::prefix('/contact')->name('contact.')->group(function () {
    Route::get('/index', 'ContactController@index')->name('index');
});
});

Route::middleware(['auth:supervisor'])->name('supervisor.')->prefix('supervisor')->group(function () {
    Route::get('/dashboard', 'SupervisorController@dashboard')->name('dashboard');
    Route::get('/profile', 'SupervisorController@profile')->name('profile');
    Route::get('/settings', 'SupervisorController@settings')->name('settings');
    Route::get('/changePassword', 'SupervisorController@changePassword')->name('changePassword');
    Route::get('/logout', 'SupervisorController@logout')->name('logout');
    Route::get('/allnotifications', 'SupervisorController@allNotifications')->name('allnotifications');
    Route::get('/addreply', 'SupervisorController@addreply')->name('addreply');


    Route::prefix('/building')->name('building.')->group(function () {
        Route::get('/index', 'BuildingController@index')->name('index');
        Route::get('/create', 'BuildingController@create')->name('create');
        Route::get('/show', 'BuildingController@show')->name('show');
        Route::get('/edit', 'BuildingController@edit')->name('edit');
        Route::delete('/delete', 'BuildingController@delete')->name('delete');
    });


    Route::prefix('/hall')->name('hall.')->group(function () {
        Route::get('/index', 'HallController@index')->name('index');
        Route::get('/create', 'HallController@create')->name('create');
        Route::get('/show', 'HallController@show')->name('show');
        Route::get('/showtable', 'HallController@showTable')->name('showTable');
        Route::get('/editimage', 'HallController@editImage')->name('editimage');
        Route::delete('/deleteimage', 'HallController@deleteImage')->name('deleteimage');
        Route::get('/edit', 'HallController@edit')->name('edit');
        Route::delete('/delete', 'HallController@delete')->name('delete');
        Route::get('/allbuilding', 'HallController@allbuilding')->name('allbuilding');


    });
});


Route::middleware(['auth:professor'])->name('professor.')->prefix('professor')->group(function () {
    Route::get('/profile', 'ProfessorController@profile')->name('profile');
    Route::get('/settings', 'ProfessorController@settings')->name('settings');
    Route::get('/changePassword', 'ProfessorController@changePassword')->name('changePassword');
    Route::get('/logout', 'ProfessorController@logout')->name('logout');
    Route::get('/allbooking', 'ProfessorController@allbooking')->name('allbooking');
    Route::get('/allreports', 'ProfessorController@allreports')->name('allreports');
    Route::get('/reservehall', 'ProfessorController@reserveHall')->name('reservehall');
    Route::get('/changereservehall', 'ProfessorController@changeReserveHall')->name('changereservehall');
    Route::get('/changehall', 'ProfessorController@changeHall')->name('changehall');
    Route::get('/addreport', 'ProfessorController@addReport')->name('addreport');
    Route::get('/showhall', 'ProfessorController@professorShowHall')->name('showHall');
    Route::get('/showtable', 'ProfessorController@showMyTable')->name('showTable');
    Route::get('/allnotifications', 'ProfessorController@allNotifications')->name('allnotifications');
    Route::get('/shownotification', 'ProfessorController@showNotification')->name('shownotification');



});
