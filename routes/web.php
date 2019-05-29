<?php

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

// Get Routes

Route::get('/', 'PagesController@index')->name('acasa');
Route::get('/proiecte', 'PagesController@proiecte')->name('proiecte');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/jurizare', 'HomeController@jurizare')->name('jurizare');
Route::post('/home/participare', 'HomeController@participare')->name('participare');
Route::get('/home/proiect/{id}', 'HomeController@proiect')->name('admin.proiect');
Route::get('/home/proiect/{id}/descalifica', 'HomeController@descalifica')->name('admin.descalifica');
Route::post('/home/proiect/{id}/punctaj', 'HomeController@punctaj')->name('admin.punctaj');
Route::get('/home/proiect/{id}/verifica', 'HomeController@verifica')->name('admin.verifica');
Route::get('/home/diploma/{id}', 'PdfGenerator@Diploma')->name('diploma.proiect');

// Post Routes

Route::post('/inregistrare', 'InregistrareProiecte@inregistrare');

//Authenthication

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);

Route::post('project/add', 'InregistrareProiecte@inregistrare')->name('post.project.add');
Route::post('project/evaluare', 'AdminController@evaluare')->name('post.project.evaluare');
Route::post('project/dates', 'AdminController@setEventDates')->name('post.project.dates');
