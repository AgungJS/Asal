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

Route::get('/home1', function () {
    return view('home1'); });
Route::get('/produk', function () {
    return view('produk'); });
Route::get('/honda', function () {
    return view('merk/honda'); });
Route::get('/yamaha', function () {
    return view('merk/yamaha'); });
Route::get('/suzuki', function () {
    return view('merk/suzuki'); });
Route::get('/kawasaki', function () {
    return view('merk/kawasaki'); });
Route::get('/tvs', function () {
    return view('merk/tvs'); });
Route::get('/other', function () {
    return view('merk/other'); });
Route::get('beli', function () {
    return view('beli'); });
Route::get('keranjang', function () {
    return view('keranjang'); });
Route::get('login', function () {
    return view('login'); });
Route::get('masuk', function () {
    return view('masuk'); });
Route::get('pencarian', function () {
    return view('pencarian'); });
Route::get('hapuskeranjang', function () {
    return view('hapuskeranjang'); });
Route::get('masuk', function () {
    return view('masuk'); });
Route::get('registeration2', function () {
    return view('registeration2'); });
Route::get('checkout', function () {
    return view('checkout'); });

Route::get('/honda', 'ProdukController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
