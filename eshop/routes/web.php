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
    -----------Shop Pages Start-------------------------------
*/
 Route::get('/shop/product', 'PagesController@ShopProduct')->name('shop-product');
 Route::get('/shop/product-category', 'PagesController@ProductCategory')->name('product-category');

Route::get('/shop', 'PagesController@ShopIndex')->name('shop-index');

//Route::get('/shop/message', 'PagesController@ShopMessage');

//Route::get('/shop/notice', 'PagesController@ShopNotice');

Route::get('/shop/contact', 'PagesController@Shopcontact')->name('shop-contact');

//Route::get('/shop/address', 'PagesController@ShopAddress');

//Route::get('/shop/', 'PagesController@ShopManage');

//Route::get('/shop/cart', 'PagesController@ShopCart');

/*
    -----------End Shop Pages -------------------------------
*/

 /*
    -----------CityShop Pages Start-------------------------------
*/

 Route::get('/cityshop/product', 'PagesController@CityShopProduct')->name('cityshop-product');

Route::get('/cityshop', 'PagesController@CityShopIndex')->name('cityshop-index');

Route::get('/cityshop/notice', 'PagesController@CityShopNotice')->name('cityshop-notice');

Route::get('/cityshop/add', 'PagesController@CityShopProductAdd')->name('cityshop-product-add');

/*
    -----------End CityShop Pages-------------------------------
*/