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
    
//Route::get('/student','StudentController@index')->name('student');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::resources([
//    'students' => 'StudentController',
//]);

Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'StudentController@index'
    ]);

    Route::get('create', [
        'as' => 'create',
        'uses' => 'StudentController@create'
    ]);

    Route::get('edit/{id}', [
        'as' => 'edit',
        'uses' => 'StudentController@edit'
    ]);

    Route::get('show/{id}', [
        'as' => 'show',
        'uses' => 'StudentController@show'
    ]);

    Route::post('store', [
        'as' => 'store',
        'uses' => 'StudentController@store'
    ]);

    Route::patch('update', [
        'as' => 'update',
        'uses' => 'StudentController@update'
    ]);

    Route::delete('destroy/{id}', [
        'as' => 'destroy',
        'uses' => 'StudentController@destroy'
    ]);
});

Route::group(['prefix' => 'class', 'as' => 'class.'], function () {
        Route::get('/', [
            'as' => 'index',
            'uses' => 'ClassController@index'
        ]);

        Route::get('create', [
            'as' => 'create',
            'uses' => 'ClassController@create'
        ]);

        Route::get('edit/{id}', [
            'as' => 'edit',
            'uses' => 'ClassController@edit'
        ]);

        Route::get('show/{id}', [
            'as' => 'show',
            'uses' => 'ClassController@show'
        ]);

        Route::post('store', [
            'as' => 'store',
            'uses' => 'ClassController@store'
        ]);

        Route::patch('update', [
            'as' => 'update',
            'uses' => 'ClassController@update'
        ]);

        Route::delete('delete{id}', [
            'as' => 'delete',
            'uses' => 'ClassController@delete'
        ]);
    });
Route::group(['prefix' => 'subject', 'as' => 'subject.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'SubjectController@index'
    ]);

    Route::get('create', [
        'as' => 'create',
        'uses' => 'SubjectController@create'
    ]);

    Route::get('edit/{id}', [
        'as' => 'edit',
        'uses' => 'SubjectController@edit'
    ]);

    Route::get('show/{id}', [
        'as' => 'show',
        'uses' => 'SubjectController@show'
    ]);

    Route::post('store', [
        'as' => 'store',
        'uses' => 'SubjectController@store'
    ]);

    Route::patch('update', [
        'as' => 'update',
        'uses' => 'SubjectController@update'
    ]);

    Route::delete('delete{id}', [
        'as' => 'delete',
        'uses' => 'SubjectController@delete'
    ]);
});
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'UserController@index'
    ]);

    Route::get('create', [
        'as' => 'create',
        'uses' => 'UserController@create'
    ]);

    Route::get('edit/{id}', [
        'as' => 'edit',
        'uses' => 'UserController@edit'
    ]);

    Route::get('show/{id}', [
        'as' => 'show',
        'uses' => 'UserController@show'
    ]);

    Route::post('store', [
        'as' => 'store',
        'uses' => 'UserController@store'
    ]);

    Route::patch('update', [
        'as' => 'update',
        'uses' => 'UserController@update'
    ]);

    Route::delete('destroy{id}', [
        'as' => 'destroy',
        'uses' => 'UserController@destroy'
    ]);
});

