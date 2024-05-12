<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;

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

$router->get('/loans/{id}', 'LoanController@show'); // Получение конкретного займа
$router->get('/loans', 'LoanController@index'); // Получение списка займов
$router->post('/loans', 'LoanController@store'); // Создание нового займа
$router->put('/loans/{id}', 'LoanController@update'); // Обновление займа
$router->delete('/loans/{id}', 'LoanController@destroy'); // Удаление займа



