<?php
/**
 * Created by PhpStorm.
 * User: Asher
 * Date: 2019-10-20
 * Time: 23:36
 */

Route::get('/','AjunitController@index');
Route::post('/','AjunitController')->name('junit.store');

// 测试单元测试组件类
Route::get('test','TestController@index');