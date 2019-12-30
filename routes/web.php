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
Route::resource('questions','QuestionsController')->except('show');
Route::resource('questions.answers','AnswersController')->except('index','create','show');
//Route::post('questions/{question}/answer ','AnswerController@store')->name ('answer.store');



Route::get('/questions/{slug}','QuestionsController@show')->name('questions.show');
Route::post('/answers/{answer}/accept','AcceptAnswerController')->name('answers.accept');

