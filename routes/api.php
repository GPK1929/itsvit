<?php

use Illuminate\Http\Request;
use illuminate\Http\Input;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group( ['middleware' => ['guest']], function ($api) {

        $api->post('authenticate', 'App\Http\Controllers\AuthContrloller@authenticate');
    });

    $api->group( ['middleware' => ['jwt.auth'], 'prefix' => 'api'], function ($api) {

        $api->get('test', 'App\Http\Controllers\AuthContrloller@test');

        /**
         * GitHub Route
         */
        $api->get('branches', 'App\Http\Controllers\Api\GitController@listBranches');

    });



});

