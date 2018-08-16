<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new','PagesController@new');

Route::get('/todos',[
    'uses'=>'TodosController@index',
    'as'=>'home'
]);

Route::post('/create/todo','TodosController@store');

Route::get('/todo/delete/{id}',[
    'uses'=>'TodosController@delete',
    'as'=>'todo.delete'
]);

Route::get('/todo/update/{id}',[
    'uses'=>'TodosController@update',
    'as'=>'todo.update'
]);

Route::post('/todo/save/{id}',[
    'uses'=>'TodosController@save',
    'as'=>'todos.save'
]);

Route::get('/todo/completed/{id}',[
    'uses'=>'TodosController@completed',
    'as'=>'todo.completed'
]);

Route::get('/todo/notcompleted/{id}',[
    'uses'=>'TodosController@notcompleted',
    'as'=>'todo.notcompleted'
]);