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

Route::get('/', "MessageController@home");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('send-message','MessageController@sendMessage');
Route::group( ['middleware' => 'auth'], function()
{
    //team
    Route::get('team','TeamController@team');
    Route::post('new-developer','TeamController@newDeveloper');
    Route::post('deleteDev','TeamController@delDev');\
    

    //FAQ   
    Route::get('faq','FaqController@faq');
    Route::post('new-faq','FaqController@newfaq');
    Route::post('delete-faq','FaqController@deleteFaq');
    Route::post('edit-faq/{id}','FaqController@editFaq');

    //Messages
    Route::get('messages','MessageController@messages');

    //Users
    Route::get('users','AccountController@users');
    Route::post('new-account','AccountController@new_account');
}
);