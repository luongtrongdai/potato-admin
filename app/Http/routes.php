<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('prefix' => 'admin'), function($local)
{
    Route::get('/','AdminController@index');
});

Route::resource('batches', 'BatchController');

Route::get('shippers/list', ['as'           => 'shippers/list'
                            , 'uses'        => 'ShipperController@listShipperName']);

Route::resource('shippers', 'ShipperController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

