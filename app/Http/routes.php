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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'api', 'middleware' => 'cors'], function() {
    Route::post('request', 'ServiceTransactionController@getRequest');

    Route::get('authenticate/user', 'UserController@getAuthenticatedUser');
    Route::get('user/employee', 'UserController@getEmployees');
    Route::post('send', 'ServiceTransactionController@sendMessage');

    Route::post('authenticate', 'UserController@authenticate');
    Route::get('city/{provcode}', 'CityController@show');
    
    Route::get('service', 'ServiceTransactionController@index');
    
    Route::resource('client', 'UserController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

    Route::resource('field', 'FieldController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]); 

    Route::resource('province', 'ProvinceController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

    Route::resource('city', 'CityController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

});