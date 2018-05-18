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
  $router->get('books',  ['uses' => 'BookController@showAllBooks']);

  $router->get('books/{id}', ['uses' => 'BookController@showOneBook']);

  $router->post('books', ['uses' => 'BookController@store']);

  $router->delete('books/{id}', ['uses' => 'BookController@delete']);

  $router->put('books/{id}', ['uses' => 'BookController@update']);

  // ==================================================================

  $router->get('categories',  ['uses' => 'CategoryController@showAllCategories']);

  $router->get('categories/{id}', ['uses' => 'CategoryController@categoryHasBooks']);

  $router->get('categories/{id}?books={bookid}', ['uses' => 'CategoryController@categoryHasOneBook']);

  $router->post('categories/{id}', ['uses' => 'BookController@create']);

  $router->post('categories', ['uses' => 'CategoryController@create']);

  $router->delete('categories/{id}', ['uses' => 'CategoryController@delete']);

  $router->put('categories/{id}', ['uses' => 'CategoryController@update']);
});
