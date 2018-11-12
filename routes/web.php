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

Route::get('/page/new/{id}', function () {
    return view('page', [
        'name'=>'Elisabeth'
    ]);
});

//Route::get('/context', function () {
  //  echo config('app.locale');
//});

//Route::any('/comments',function () {
//    print_r($_POST);
//
//});
Route::match(['get','post'],'/fallowe','FileController@getfile');

