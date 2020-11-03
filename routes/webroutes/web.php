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

Route::get('vendor/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('vendor/login', 'Auth\LoginController@login');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vendor_requests', 'HomeController@vendor_requests')->name('vendor_requests');

Route::get('/vendor_order', 'VendorController@vendor_order')->name('vendor_order');
Route::get('/edit_vendor_order/{order_id?}', 'VendorController@edit_vendor_order')->name('edit_vendor_order');
Route::get('/generate_vendor_order/{order_id?}', 'VendorController@generate_vendor_order')->name('generate_vendor_order');
Route::get('/delete_vendor_order/{order_id?}', 'VendorController@delete_vendor_order')->name('delete_vendor_order');
Route::post('/submit_vendor_order','VendorController@submit_vendor_order');
Route::get('/vendor_orders_listing', 'VendorController@vendor_orders_listing')->name('vendor_orders_listing');

Route::get('/vendor_add_admin', 'VendorController@vendor_add_admin')->name('vendor_add_admin');
Route::get('/vendor_listing_admin', 'VendorController@vendor_listing_admin')->name('vendor_listing_admin');
Route::post('/vendor_add_admin_submit', 'VendorController@vendor_add_admin_submit')->name('vendor_add_admin_submit');

Route::get('/vendor_reset_password', 'VendorController@vendor_reset_password')->name('vendor_reset_password');
Route::post('/vendor_reset_password_submit', 'VendorController@vendor_reset_password_submit');


Route::get('/approverejectvendor', 'VendorController@approverejectvendor')->name('approverejectvendor');
