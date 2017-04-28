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

Route::get('/', 'ViewController@home');
Route::get('/template-website', 'ViewController@templateWebsite');
Route::get('/paket-website', 'ViewController@paketWebsite');
Route::get('/cara-pesan', 'ViewController@caraPesan');
Route::get('/form-isi-data', 'ViewController@formIsiData');

/*admin*/
Route::get('/admin/admin', 'adminViewController@index');
Route::get('/admin/admin/pemesanan', 'adminViewController@pemesanan');
Route::get('/admin/admin/template', 'adminViewController@template');

