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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::prefix('/')->group(function(){
    Route::get('','Index\IndexController@index');
});
Route::prefix('/index')->group(function(){
    Route::post('sousuo','Index\IndexController@sousuo');
    Route::get('dosousuo','Index\IndexController@dosousuo');
    Route::get('lunwen-zxnext/{a_id}/{c_id}','Index\IndexController@zxnext');
    Route::get('lunwen-zx','Index\IndexController@zx');
    Route::get('hzqk','Index\IndexController@hzqk');
    Route::get('zhuzuo','Index\IndexController@zhuzuo');
    Route::get('gywm','Index\IndexController@gywm');
    Route::get('jc','Index\IndexController@jc');
    Route::get('zhuxq/{a_id}/{c_id}','Index\IndexController@zhuxq');
    Route::get('zzcb','Index\IndexController@zzcb');
    Route::get('csgm','Index\IndexController@csgm');
    Route::get('fwys','Index\IndexController@fwys');
    Route::get('czlc','Index\IndexController@czlc');
    Route::get('xwlist','Index\IndexController@xwlist');
    Route::get('xw/{a_id}/{c_id}','Index\IndexController@xw');
    Route::get('lxwm','Index\IndexController@lxwm');
    Route::get('page','Index\IndexController@page');
    Route::get('us','Index\IndexController@us');
    Route::get('fblc','Index\IndexController@fblc');
    Route::get('gjcx','Index\IndexController@gjcx');
    Route::get('fkfs','Index\IndexController@fkfs');
    Route::get('lus','Index\IndexController@lus');
    Route::get('zxtg','Index\IndexController@zxtg');
    Route::post('dozxtg','Index\IndexController@dozxtg');
    Route::get('shop1','Index\IndexController@shop');
    Route::get('qkjs','Index\IndexController@qkjs');
    Route::get('lmsz','Index\IndexController@lmsz');
    Route::get('qkjj','Index\IndexController@qkjj');
    Route::get('tgyq','Index\IndexController@tgyq');
    Route::get('zxtg1','Index\IndexController@zxtg1');
    Route::post('dozxtg1','Index\IndexController@dozxtg1');
    Route::get('gjcx1','Index\IndexController@gjcx1');
    Route::post('serchs','Index\IndexController@serchs');
    Route::post('serch1','Index\IndexController@serch1');
    Route::get('shoplxwn','Index\IndexController@shoplxwn');
    Route::get('fk','Index\IndexController@fk');
});

Route::prefix('/keti')->group(function(){
   Route::get('index','Keti\KetiController@index');
   Route::get('jj','Keti\KetiController@jj');
   Route::get('czlc','Keti\KetiController@czlc');
   Route::get('fwys','Keti\KetiController@fwys');
   Route::get('anli','Keti\KetiController@anli');
   Route::get('anlinext/{a_id}/{c_id}','Keti\KetiController@anlinext');
});
Route::prefix('/zhuanli')->group(function(){
    Route::get('index','Zhuanli\ZhuanliController@index');
    Route::get('news','Zhuanli\ZhuanliController@news');
    Route::get('fm','Zhuanli\ZhuanliController@fm');
    Route::get('sy','Zhuanli\ZhuanliController@sy');
    Route::get('wg','Zhuanli\ZhuanliController@wg');
    Route::get('anli','Zhuanli\ZhuanliController@anli');
    Route::get('lxwm','Zhuanli\ZhuanliController@lxwm');
    Route::get('next/{a_id}/{c_id}','Zhuanli\ZhuanliController@next');
});

