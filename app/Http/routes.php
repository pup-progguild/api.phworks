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

   //  Route::resource('authenticate', 'AuthenticateController', [
   //      'only' => [
   //         'index'
   //     ]
   // ]);

    Route::get('parse', 'ServiceTransactionController@parseServiceDescription');

    
    Route::resource('client', 'UserController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

    Route::resource('employee', 'EmployeeController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]); 

    Route::resource('field', 'FieldController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

});