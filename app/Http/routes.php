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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/{id}', function ($id) {
    return 'hi i\'m contact'.$id;
});

Route::resource('post','PostsController');


Route::get('/contact','PostsController@contact');

Route::get('/insert', function () {
    // это строка позволяет нам заполнить базу прямо запросом чз куери
    DB::insert('insert into posts(title, body) value (?, ?)', ['PHP is the best of the best','Laravel is the best what heppens wth php'] );
});
Route::get('/read', function (){
    // Это строка вернет нам результат в ввиде массива
    $result=DB::select('select * from posts where (id=?)',[1]);
    var_dump($result);

});
Route::get('/update', function (){
    // Это строка обновит значения
    $result=DB::update('update posts set title=? where (id=?)',['update post',1]);
    var_dump($result);

});