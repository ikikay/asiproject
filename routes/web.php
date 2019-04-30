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

//    // Example
//    Route::resource('model', 'Controller')->except([
//        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
//    ]);

Auth::routes();

// ---------------------------
// Routes pour le front-office
// ---------------------------
Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@toDashboard')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('offre/indexFront','OffreController@indexFront')->name('offre.indexFront'); 
    Route::get('contact/indexFront','ContactController@indexFront')->name('contact.indexFront'); 
    Route::get('questionnaire/indexFront','QuestionnaireController@indexFront')->name('questionnaire.indexFront'); 
    Route::get('societe/indexFront','SocieteController@indexFront')->name('societe.indexFront'); 
    Route::get('contact/createFront','ContactController@createFront')->name('contact.createFront');
    Route::put('contact/createFront/store','ContactController@storeFront')->name('contact.storeFront');
    Route::get('contact/show/{id}','ContactController@show')->name('contact.show');
    Route::get('societe/createFront','SocieteController@createFront')->name('societe.createFront'); 
    Route::put('societe/createFront/store','ContactController@storeFront')->name('societe.storeFront');
    Route::get('societe/show/{id}','SocieteController@show')->name('societe.show');
    Route::get('offre/createFront','OffreController@createFront')->name('offre.createFront');  
    Route::put('offre/createFront/store','OffreController@storeFront')->name('offre.storeFront');
    Route::get('offre/show/{id}','OffreController@show')->name('offre.show');
    Route::get('/dashboard', function () {
	route('dashboard');
    });
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// --------------------------
// Routes pour le Back-office
// --------------------------
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::get('/', function () {
		    return view('admin.page.dashboard');
		})
		->name('admin.dashboard');
	Route::get('dashboard', function () {
	    route('admin.dashboard');
	});
	// User
	Route::resource('user', 'UserController')->except([
	    'show'
	]);

	// Questionnaire
	Route::resource('questionnaire', 'QuestionnaireController')->except([
	    'store', 'show', 'update'
	]);
	Route::get('response/{id}', 'QuestionnaireController@response')->where('id', '[0-9]+')->name('response');
	Route::post('valideResponse', 'QuestionnaireController@valideResponse')->name('valideResponse');

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
        
        Route::get('stat','StatController@search')->name('search.search'); 
        Route::post('stat/livesearch','StatController@liveSearch'); 
    });
    
    
    
    
    
       
            
            


});
