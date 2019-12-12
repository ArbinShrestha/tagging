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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/create', [
    'uses' => 'PostsController@create',
    'as'=>'post.create'
]);

Route::post('/post/store', [
    'uses' => 'PostsController@store',
    'as'=>'post.store'
]);

Route::get('/tag/create', [
    'uses' => 'TagsController@create',
    'as'=>'tag.create'
]);

Route::post('/tag/store', [
    'uses' => 'TagsController@store',
    'as'=>'tag.store'
]);

Route::get('/posts', 'PostsController@show');

Route::get('/live_search', 'LiveSearchController@index');

Route::get('/live_search/action', 'LiveSearchController@action')->name('live_search.action');



