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
Route::get('/student', 'HomeController@student')->name('student');


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::resource('user', 'UserController');
        Route::resource('student', 'StudentController');
        Route::resource('teacher', 'TeacherController');
        Route::post('/student/import', 'StudentController@import')->name(
            'student.import'
        );
        Route::post('/teacher/import', 'TeacherController@import')->name(
            'teacher.import'
        );
    });

Auth::routes(['register' => false]);

