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

$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

$api->version('v1', function ($api) {
    $api->get('hello', 'App\Http\Controllers\HomeController@index');
    $api->get('user/{user_id}/roles/{role_nme}', 'App\Http\Controllers\HomeController@attachUserRole');
    $api->get('user/{user_id}/roles', 'App\Http\Controllers\HomeController@getUserRole');
    $api->get('role/permission', 'App\Http\Controllers\HomeController@attachRolePermission');
    $api->post('authenticate', 'App\Http\Controllers\Auth\AuthController@authenticate');


});

$api->version('v1', ['middleware' => 'api.auth'], function ($api) {
    $api->get('users', 'App\Http\Controllers\Auth\AuthController@index');
    $api->get('users/{id}', 'App\Http\Controllers\Auth\AuthController@show');
});