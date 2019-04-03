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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@toDashboard')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('dashboard', 'HomeController@toDashboard');

    Route::get('dashboard', function () {
        route('dashboard');
    });
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

//    // Example
//    Route::resource('model', 'Controller')->except([
//        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
//    ]);
    // User
    Route::resource('user', 'UserController')->except([
        'show'
    ]);

    // Questionnaire
    Route::resource('questionnaire', 'QuestionnaireController')->except([
        'store', 'show', 'update'
    ]);
    Route::get('response', 'QuestionnaireController@response')->name('response');
    Route::get('ValideResponse', 'QuestionnaireController@ValideResponse')->name('ValideResponse');

    // Themes
    Route::resource('theme', 'ThemeController')->except([
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ]);

    // Offres
    Route::resource('offre', 'OffreController')->except([
        'show'
    ]);

    // Contacts
    Route::resource('contact', 'ContactController')->except([
        'show'
    ]);

    // Societes
    Route::resource('societe', 'SocieteController')->except([
        'show'
    ]);
});

Auth::routes();
