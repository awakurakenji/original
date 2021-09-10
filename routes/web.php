<?php


use Illuminate\Support\Facades\Route;
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

  Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('original/create', 'Admin\OriginalController@add');
    Route::post('original/create', 'Admin\OriginalController@create'); 
    Route::get('original', 'Admin\OriginalController@index')->middleware('auth');
    Route::get('original/edit', 'Admin\OriginalController@edit')->middleware('auth'); // 追記
    Route::post('original/edit', 'Admin\OriginalController@update')->middleware('auth'); // 追記
    Route::get('original/delete', 'Admin\OriginalController@delete')->middleware('auth');
});

  Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create'); 
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth'); // 追記
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth'); // 追記
    Route::get('profile/delete', 'Admin\ProfileController@delete')->middleware('auth');
});


  
    
  // 主菜ページ
  Route::get('resipi/syusai', 'Resipi\ResipiController@syusai');
    // 副菜ページ
    Route::get('resipi/fukusai', 'Resipi\ResipiController@fukusai');
    // 主食ページ
    Route::get('resipi/meinn', 'Resipi\ResipiController@meinn');
    // お汁ページ
    Route::get('resipi/soup', 'Resipi\ResipiController@soup');
    // おやつページ
    Route::get('resipi/desert', 'Resipi\ResipiController@desert');
    
    
    // レシピ豚の生姜焼き
    Route::get('/butasyouga', 'Menu\MenuController@buta');
    
    Route::get('/sawarapiza', 'Menu\MenuController@sawara');
  
    
  
  
  // お問い合わせ入力ページ
  Route::get('/contacts', 'ContactsController@index')->name('contact');
    // 確認ページ
    Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
    // DB挿入、メール送信
    Route::post('/process', 'ContactsController@process')->name('process');
    // 完了ページ
    Route::get('/complete', 'ContactsController@complete')->name('complete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'OriginalController@index');
