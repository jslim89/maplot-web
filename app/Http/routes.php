<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'home', 'uses' => 'IndexController@index']);

$app->group(['prefix' => 'api'], function() use ($app) {

    $app->get('auth/logout', ['as' => 'api.auth.logout', 'uses' => 'App\Http\Controllers\Api\AuthController@getLogout']);
    $app->post('auth/login', ['as' => 'api.auth.login', 'uses' => 'App\Http\Controllers\Api\AuthController@postLogin']);

    $app->group(['middleware' => 'auth'], function() use ($app) {

        $app->group(['prefix' => 'prospects'], function() use ($app) {
            $app->get('/', ['as' => 'api.prospects', 'uses' => 'Api\ProspectController@index']);
            $app->post('add', ['as' => 'api.prospects.add', 'uses' => 'Api\ProspectController@postAdd']);

            $app->group(['prefix' => '{id}'], function() use ($app) {
                $app->post('update', ['as' => 'api.prospects.update', 'uses' => 'Api\ProspectController@postUpdate']);
            });
        });

    });
});
