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
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/a', function () {
    return view('a1');
});Route::get('/a1', function () {
    return view('result');
});
Route::get('/b', function () {
    return view('a2');
});
Route::get('/cc', function () {
    return view('a3');
});

Route::get('/cc1', function () {
    return view('lessonquestion');
});


Route::get('/cc2', function () {
    return view('grammer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::group(['middleware' => 'auth'], function () {



    Route::resource('unit', 'UnitController');
    Route::resource('lesson', 'LessonController');
    Route::resource('grammer', 'GrammerController');
    Route::resource('grammertype', 'grammertypeController');
    Route::resource('question', 'QuestionController');
    Route::resource('test', 'TestController');
    Route::resource('tquestion', 'TQuestionController');
    Route::resource('verb', 'verbController');

    Route::resource('answer', 'AnswerController');
    Route::resource('tanswer', 'TAnswerController');


    Route::resource('profile', 'StudentProfileController');

});





Route::get('/main','pagecontroller@main')->name('main');
Route::get('/main2','pagecontroller@main2')->name('main2');

Route::get('/','pagecontroller@showhome')->name('home1');
Route::get('/home1','pagecontroller@showhome')->name('home1');
Route::get('/about','pagecontroller@showabout')->name('about');
Route::get('/verbs','pagecontroller@showverbs')->name('verbs');
Route::get('/grammers','pagecontroller@showgrammers')->name('grammers');
Route::get('/tests','pagecontroller@showtests')->name('tests');
Route::get('/gdetail/{id}','pagecontroller@showgrammersdetail')->name('gdetail');
Route::get('/tdetail/{id}','pagecontroller@showtestdetail')->name('tdetail');
Route::get('/exdetail/{id}','pagecontroller@showtexdetail')->name('exdetail');
Route::get('/grdetail/{id}','pagecontroller@grdetail')->name('grdetail');
Route::get('/main2/{id}','pagecontroller@main2')->name('main2');
Route::get('/details/{id}','pagecontroller@showlesson')->name('details');




