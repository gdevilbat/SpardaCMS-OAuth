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

Route::group(['middleware' => 'core.auth'], function() {
	Route::group(['prefix' => 'control'], function() {

	    Route::group(['prefix' => 'oauth'], function() {

	        Route::group(['middleware' => 'core.menu'], function() {
	            Route::get('client', 'OauthController@client')->name('cms.oauth.client')->middleware('can:super-access');
	            Route::get('authorized-client', 'OauthController@authorizedClient')->name('cms.oauth.authorized-client')->middleware('can:super-access');
	            /*Route::get('personal-access-token', 'OauthController@personalAccessToken')->name('cms.oauth.personal-access-token')->middleware('can:super-access');*/
	        });

	    });

		Route::group(['prefix' => 'oauth'], function() {
		    Route::get('clients', '\Laravel\Passport\Http\Controllers\ClientController@forUser')->name('passport.clients.index')->middleware('can:super-access');
		    Route::post('clients', '\Laravel\Passport\Http\Controllers\ClientController@store')->name('passport.clients.store')->middleware('can:super-access');
		    Route::put('clients/{client_id}', '\Laravel\Passport\Http\Controllers\ClientController@update')->name('passport.clients.update')->middleware('can:super-access');
		    Route::delete('clients/{client_id}', '\Laravel\Passport\Http\Controllers\ClientController@destroy')->name('passport.clients.destroy')->middleware('can:super-access');
		    Route::get('tokens', '\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@forUser')->name('passport.tokens.index')->middleware('can:super-access');
		    Route::delete('tokens', '\Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController@destroy')->name('passport.tokens.destroy')->middleware('can:super-access');
		});

	});

});
