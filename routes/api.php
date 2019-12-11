<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/todos','UsuarioController@todos');
    Route::get('/todos/{id}','UsuarioController@consulta');
    Route::post('/todos/{id}','UsuarioController@editar');
    Route::post('/tareas/nuevo', 'TareaController@guardar');
    Route::post('/suma/{a}/{b}','CalculadoraController@suma');
    Route::post('/resta/{a}/{b}','CalculadoraController@restar');
    Route::post('/multi/{a}/{b}','CalculadoraController@multiplicasion');
    Route::post('/div/{a}/{b}','CalculadoraController@divicio');

});

