<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function(){

    return view('admin.index');

});

Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController');

    Route::resource('admin/posts', 'AdminPostsController'); // With this, posts are admin-accessible only for now

    Route::resource('admin/categories', 'AdminCategoriesController');

    Route::resource('admin/media', 'AdminMediasController'); // Currently no resource, but for future

    // Route::get('admin/media/upload',['as'=>'admin.media.upload']); // For custom URI

});
