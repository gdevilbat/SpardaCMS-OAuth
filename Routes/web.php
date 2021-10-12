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

Route::group(['prefix' => 'control', 'middleware' => 'core.auth'], function() {

    Route::group(['prefix' => 'oauth'], function() {

        Route::group(['middleware' => 'core.menu'], function() {
            Route::get('client', 'OauthController@client')->name('cms.oauth.client')->middleware('can:super-access');
            Route::get('authorized-client', 'OauthController@authorizedClient')->name('cms.oauth.authorized-client')->middleware('can:super-access');
            /*Route::get('personal-access-token', 'OauthController@personalAccessToken')->name('cms.oauth.personal-access-token')->middleware('can:super-access');*/
        });

    });

});