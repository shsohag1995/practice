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

//Route::get('/test','PagesController@test')->name('test');

Route::get('/','MarketController@index')->name('index');
Route::resource('search','SearchController');
//-------------------Auth User Route Start-----------------
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bakery', 'HomeController@bakery')->name('bakery');
Route::get('/book', 'HomeController@book')->name('book');
Route::get('/butcher', 'HomeController@butcher')->name('butcher');
Route::get('/clothes', 'HomeController@clothes')->name('clothes');
Route::get('/drugs', 'HomeController@drugs')->name('drugs');
Route::get('/fish', 'HomeController@fish')->name('fish');
Route::get('/grocery', 'HomeController@grocery')->name('grocery');
Route::get('/hotel', 'HomeController@hotel')->name('hotel');
Route::get('/restaurent', 'HomeController@restaurent')->name('restaurent');

Route::get('/myshops','PagesController@myshops')->name('myshops');
//-------------------auth user route end---------------
//------------------------------Resorce Route Start---------------------------
 Route::resources([
 	//'shop' => 'Shop\Resources\ShopController',
 	//'shop/{sid}/contact' => 'Shop\Resources\ShopContactController',
   //'shop/{sid}/address' => 'Shop\Resources\ShopAddressController',
    //'shop/{sid}/notice' => 'Shop\Resources\ShopNoticeController',
   // 'shop/{sid}/complain' => 'Shop\Resources\ShopComplainController',
    'profile' =>'User\Resources\UserProfileController',
    'verification' =>'User\Resources\VerifiedController'
]);

 Route::get('/shop/{sid}/product/create','Shop\Resources\ProductController@create');
 Route::post('/product/store','Shop\Resources\ProductController@store');
 Route::get('/shop/{sid}/search','Shop\PagesController@search')->name('shop.{sid}.search');
Route::get('/shop/{sid}/product/{pid}','Shop\Resources\ProductController@index');
//----------------------------- resorce route end----------------------------
//--------------------------------------------Shop Route--------------------
 Route::get('/shop/{sid}','Shop\ShopController@index');
 Route::get('/shop/{sid}/address','Shop\ShopController@address');
 Route::get('/shop/{sid}/contact','Shop\ShopController@contact');
 Route::get('/shop/{sid}/notice','Shop\ShopController@notice');

Route::get('/shop/{sid}/like/{like}','Shop\StoreController@store_like_unlike');
Route::get('/shop/{sid}/comment/store','Shop\StoreController@store_shop_comment');
Route::get('/shop/{sid}/connecte','Shop\StoreController@store_shop_user');

  Route::get('/shop/{sid}/public/product/create','Shop\PagesController@add_product');
  Route::get('/shop/{sid}/brand/{brand}','Shop\PagesController@brand_show')->name('shop.{sid}.brand.{brand}');
  Route::get('/shop/{sid}/category/{category}','Shop\PagesController@category_show')->name('shop.{sid}.category.{category}');
   Route::get('/shop/{sid}/category/{category}/type/{type}','Shop\PagesController@type_show')->name('shop.{sid}.category.{category}/type/{type}');
//--------------------------------------------shop route--------------------

// -----------------------------Crteate Route Start------------------------------
Route::get('/myshop/create','CreateController@shop_create')->name('create.shop');
Route::get('shoptype/create','CreateController@shoptype_create')->name('shoptype.create');
Route::get('userrole/create','CreateController@userrole_create')->name('userrole.create');
Route::get('/shop/{sid}/public/create','CreateController@public_create')->name('{sid}.public.create');
//------------------------------create route end--------------------------------

//-------------------------------Store Route Start------------------------------

 Route::post('shoptype/store','StoreController@shoptype_store')->name('shoptype.store');
 Route::post('userrole/store','StoreController@userrole_store')->name('userrole.store');
  Route::post('shop/store','StoreController@shop_store')->name('shop.store');
//Route::post('product/store','StoreController@product_store')->name('product.store');
//-------------------------------store route end-------------------------------

//-------------------------------Delete Route Start----------------------------

//-------------------------------delete route end-----------------------------

//------------------------------CEO Route Start-------------------------------

Route::get('ceo/dashboard','CEOPageController@dashboard')->name('ceo.dashboard');
Route::get('ceo/ptrshops','CEOPageController@ptrshops')->name('ceo.ptrshops');
Route::get('ceo/shops','CEOPageController@shops')->name('ceo.shops');
Route::get('ceo/workers','CEOPageController@workers')->name('ceo.workers');

//------------------------------ceo route end----------------------------------
//------------------------------Partner Route Start----------------------------


//------------------------------partner route end-----------------------------
//------------------------------Shop Route--------------------------------
//------------------------------shop route--------------------------------
//------------------------------ShopManage Route--------------------------
Route::get('shopmanage/{sid}','ShopManage\ShopManagePagesController@index')->name('shopmanage.{sid}');
Route::get('shopmanage/{sid}/profile','ShopManage\ShopManagePagesController@edit_profile');

Route::get('shopmanage/{sid}/notice/edit','ShopManage\ShopManageEditPagesController@notice')->name('shopmanage.{sid}.notice.edit');
Route::get('shopmanage/{sid}/contact/edit','ShopManage\ShopManageEditPagesController@contact')->name('shopmanage.{sid}.contact.edit');
Route::get('shopmanage/{sid}/address/edit','ShopManage\ShopManageEditPagesController@address')->name('shopmanage.{sid}.address.edit');

Route::post('shopmanage/{sid}/profile/image/update','ShopManage\ShopUpdateController@shop_image_update');
Route::post('shopmanage/{sid}/contact/info/update','ShopManage\ShopUpdateController@shop_contact_update');
Route::post('shopmanage/{sid}/address/info/update','ShopManage\ShopUpdateController@shop_address_update');
Route::post('shopmanage/{sid}/notice/info/update','ShopManage\ShopUpdateController@shop_notice_update');

Route::get('shopmanage/{sid}/category/create','ShopManage\ProductCategoryController@create')->name('shopmanage.{sid}.category.create');
Route::get('shopmanage/{sid}/type/create','ShopManage\ProductTypeController@create')->name('shopmanage.{sid}.type.create');
//-------------------------------shop manage route-----------------------
