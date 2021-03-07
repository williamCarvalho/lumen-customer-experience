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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/clients', 'ClientController@index');
    $router->post('/clients', 'ClientController@store');
    $router->put('/clients/{id}', 'ClientController@update');
    $router->delete('/clients/{id}', 'ClientController@destroy');

    $router->get('/collaborators', 'CollaboratorController@index');
    $router->post('/collaborators', 'CollaboratorController@store');
    $router->put('/collaborators/{id}', 'CollaboratorController@update');
    $router->delete('/collaborators/{id}', 'CollaboratorController@destroy');

    $router->get('/stores', 'StoreController@index');
    $router->post('/stores', 'StoreController@store');
    $router->put('/stores/{id}', 'StoreController@update');
    $router->delete('/stores/{id}', 'StoreController@destroy');

    $router->get('/transactions', 'TransactionController@index');
    $router->post('/transactions', 'TransactionController@store');
    $router->put('/transactions/{id}', 'TransactionController@update');

    $router->get('/evaluations', 'EvaluationController@index');
    $router->post('/evaluations', 'EvaluationController@store');
});

// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('collaborators', 'CollaboratorController@index');
//     $router->post('collaborators', 'CollaboratorController@insert');
//     $router->put('collaborators/{id}', 'CollaboratorController@update');
//     $router->delete('collaborators/{id}', 'CollaboratorController@delete');

//     $router->get('stores', 'StoreController@index');
//     $router->post('stores', 'StoreController@insert');
//     $router->put('stores/{id}', 'StoreController@update');
//     $router->delete('stores/{id}', 'StoreController@delete');

//     $router->get('clients', 'ClientController@index');
//     $router->post('clients', 'ClientController@insert');
//     $router->put('clients/{id}', 'ClientController@update');
//     $router->delete('clients/{id}', 'ClientController@delete');

//     $router->post('transactions', 'TransactionController@insert');
//     $router->put('transactions/{id}', 'TransactionController@update');

//     $router->get('evaluations', 'EvaluationController@index');
//     $router->post('evaluations', 'EvaluationController@insert');
// });