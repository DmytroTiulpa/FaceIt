<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*Route::get('/users', function () {
    return view('users');
})->name('users');*/

// Маршруты CRUD ресурсного контроллера
Route::resource('users', UsersController::class);
/*Route::get('/users', 'UsersController@index');            // index (Отображение списка ресурсов):
Route::get('/users/create', 'UsersController@create');      // create (Отображение формы создания нового ресурса):
Route::post('/users', 'UsersController@store');             // store (Сохранение нового ресурса):
Route::get('/users/{id}', 'UsersController@show');          // show (Отображение информации о конкретном ресурсе):
Route::get('/users/{id}/edit', 'UsersController@edit');     // edit (Отображение формы редактирования ресурса):
Route::put('/users/{id}', 'UsersController@update');        // update (Обновление информации о ресурсе):
Route::delete('/users/{id}', 'UsersController@destroy');    // destroy (Удаление ресурса):*/
