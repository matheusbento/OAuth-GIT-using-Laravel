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

// ROUTE TO REDIRECT TO GITHUB PAGE LOGIN
Route::get('/', ['as' => 'social_redirect', 'uses' => 'Socialogin\SocialoginController@redirectToProvider']); 
 
// ROUTE TO RETURN USER INFORMATION AND REDIRECT TO INFORMATION PAGE
Route::get('/github/callback', ['as' => 'social_callback', 'uses' => 'Socialogin\SocialoginController@handleProviderCallback']);
