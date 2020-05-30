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

//Route::get('/', function () {
//    return view('welcome');
//});


//Anasayfa Genel *****
Route::get('/','front\HomeController@index'); //front Anasayfa
Route::get('/urun/{id}','front\HomeController@urun'); //front Anasayfa
Route::get('/hakkimizda','front\HomeController@hakkimizda'); //front Anasayfa
Route::get('/iletisim','front\HomeController@iletisim'); //front Anasayfa
Route::get('/bize_yazin','front\HomeController@bize_yazin_formu'); //front Anasayfa
Route::post('/bize_yazin','front\HomeController@bize_yazin_kaydet'); //front Anasayfa

//**** Alışveriş Sepet *****
Route::post('/sepete_ekle','front\HomeController@sepete_ekle');
Route::get('/sepetim','front\HomeController@sepetim');
Route::get('/sepet_sil/{id}','front\HomeController@sepet_sil');
Route::post('/siparis_tamamla','front\HomeController@siparis_tamamla');
Route::post('/satinal','front\HomeController@satinal');
Route::get('/siparis_son','front\HomeController@siparis_son');

Route::get('/admin','admin\HomeController@index'); //admin Anasayfa
//Route::post('/kaydet','HomeController@kaydet'); //Anasayfa
//Route::get('/test','HomeController@test');
//Route::get('/test/{id}/{adsoy}','HomeController@test');
Route::get('/admin/settings','admin\HomeController@settings'); //admin Anasayfa
Route::post('/admin/settingsupdate/{id}','admin\HomeController@settingsupdate'); //admin Anasayfa

//*********Admin Mesaj işlemleri************
Route::get('/admin/mesajlar','admin\HomeController@messages');
Route::get('/admin/message/edit/{id}','admin\HomeController@message_edit');
Route::post('/admin/message/edit/{id}','admin\HomeController@message_update');
Route::get('/admin/message/destroy/{id}','admin\HomeController@message_destroy');

//***********Ürün işlemleri************
Route::get('/admin/urunler','admin\UrunController@index');
Route::get('/admin/urun/edit/{id}','admin\UrunController@edit');
Route::get('/admin/urun/destroy/{id}','admin\UrunController@destroy');
Route::get('/admin/urun/show/{id}','admin\UrunController@show');
Route::get('/admin/urun/ekle','admin\UrunController@create');
Route::post('/admin/urun/save','admin\UrunController@store');
Route::post('/admin/urun/update/{id}','admin\UrunController@update');



//*********Login İşlemleri*********
Route::get('/admin/login','admin\LoginController@index')->name('admin.login');
Route::post('/admin/login','admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout','admin\LoginController@logout')->name('admin.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
