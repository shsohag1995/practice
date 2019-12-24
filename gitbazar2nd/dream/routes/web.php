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
Route::get('/blank','PagesController@blank')->name('blank');
Route::get('/','MarketController@index')->name('index');
Route::get('/shop','MarketController@shop')->name('shop');
Route::get('/dynamicdependent/cities','MarketController@fetch')->name('dynamicdependent.cities');
Route::resource('search','SearchController');
Route::get('/contact', 'PagesController@contact')->name('contact');
//-------------------Auth User Route Start-----------------
Auth::routes();
Route::get('/dashboard','AuthPagesController@dashboard')->name('dashboard');
Route::get('/diposit','AuthPagesController@diposit')->name('diposit');
Route::get('/withdrow','AuthPagesController@withdrow')->name('withdrow');
Route::get('/shoping-blance','AuthPagesController@shoping_blance')->name('shoping-blance');
Route::get('/investment','AuthPagesController@investment')->name('investment');
Route::get('/pending-investment','AuthPagesController@pending_investment')->name('pending-investment');
Route::get('/investment-profit','AuthPagesController@investment_profit')->name('investment-profit');
Route::get('/make-investment','AuthPagesController@make_investment')->name('make-investment');
Route::get('/estemated-earn','AuthPagesController@estemated_earn')->name('estemated-earn');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@user')->name('profile');
Route::get('/wishlist', 'HomeController@user_wishlist')->name('wishlist');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/order', 'HomeController@user_order')->name('order');
Route::get('/order/{oid}/view', 'HomeController@user_order_view');
Route::get('/booking', 'HomeController@user_booking');
Route::get('/booking/{oid}/view', 'HomeController@user_booking_view');
Route::get('/getorder', 'HomeController@getorder');
Route::get('/getorder/{oid}/view', 'HomeController@getorder_view');
Route::get('/myshops','PagesController@myshops')->name('myshops');
Route::get('/shops','PagesController@shops')->name('shops');
//-------------------auth user route end---------------
//------------------------------Resorce Route Start---------------------------
 Route::resources([
 	//'shop' => 'Shop\Resources\ShopController',
 	//'shop/{sid}/contact' => 'Shop\Resources\ShopContactController',
   //'shop/{sid}/address' => 'Shop\Resources\ShopAddressController',
    //'shop/{sid}/notice' => 'Shop\Resources\ShopNoticeController',
   // 'shop/{sid}/complain' => 'Shop\Resources\ShopComplainController',
  //  'profile' =>'User\Resources\UserProfileController',
   'verification' =>'User\Resources\VerifiedController'
]);

 //Route::get('/shop/{sid}/product/create','Shop\Resources\ProductController@create');
 //Route::post('/product/store','Shop\Resources\ProductController@store');
 Route::get('/shop/{sid}/search','Shop\PagesController@search')->name('shop.{sid}.search');

//----------------------------- resorce route end----------------------------
//--------------------------------------------Shop Route--------------------
 Route::get('/shop/{sid}','Shop\ShopController@index');
 Route::get('/shop/{sid}/address','Shop\ShopController@address');
 Route::get('/shop/{sid}/contact','Shop\ShopController@contact');
 Route::get('/shop/{sid}/notice','Shop\ShopController@notice');
 Route::get('/shop/{sid}/complain','Shop\ShopController@complain');
 Route::get('/shop/{sid}/comment','Shop\ShopController@comment');
 Route::get('/shop/{sid}/category/{category}','Shop\PagesController@category_show')->name('shop.{sid}.category.{category}');
   Route::get('/shop/{sid}/category/{category}/type/{type}','Shop\PagesController@type_show')->name('shop.{sid}.category.{category}/type/{type}');
   Route::get('/shop/{sid}/brand/{brand}','Shop\PagesController@brand_show')->name('shop.{sid}.brand.{brand}');

Route::get('/shop/{sid}/like/{like}','Shop\StoreController@store_like_unlike');
Route::post('/shop/comment/store','Shop\StoreController@store_shop_comment');
Route::post('/shop/complain/store','Shop\StoreController@store_shop_complain');
Route::get('/shop/{sid}/connecte','Shop\StoreController@store_shop_user');

Route::get('/shop/{sid}/public/product/create','Shop\ProductCreatePagesController@public_product');
Route::post('/shop/public/product/store','Shop\PublicProduct\PublicProductController@public_product_store');
Route::get('/shop/{sid}/product/{spcn}/edit','Shop\ProductEditController@product_edit');
Route::post('/shop/public/product/update','Shop\PublicProduct\UpdateController@public_product_update');
Route::post('/shop/private/product/update','Shop\PrivateProduct\ProductUpdateController@private_product_update');

//Route::get('/shop/{sid}/product/{pid}','Shop\PublicProduct\PublicProductController@index');
Route::get('/shopmanage/{sid}/product/create','Shop\ProductCreatePagesController@private_product');
Route::post('/shop/private/product/store','Shop\PrivateProduct\ProductStoreController@private_product_store');
Route::post('/shop/private/product/clothes/size/store','Shop\PrivateProduct\ProductStoreController@private_product_clothes_size_store');
Route::post('/shop/private/product/image/view/update','Shop\PrivateProduct\ProductUpdateController@private_product_image_view_update');
Route::post('/shop/private/product/images/store','Shop\PrivateProduct\ProductStoreController@private_product_images_store');
Route::post('/shopmanage/{sid}/product/{spcn}/private/destroy','Shop\PrivateProduct\ProductDestroyController@private_product_destroy');
Route::get('/shopmanage/{sid}/product/{spcn}/image/{image}/private/destroy','Shop\PrivateProduct\ProductDestroyController@private_product_image_destroy');
Route::get('/shop/{sid}/product/{spcn}/public/destroy','Shop\PublicProduct\DestroyController@public_product_destroy');
Route::get('/shop/{sid}/product/{spcn}/image/{image}/public/destroy','Shop\PublicProduct\DestroyController@public_product_image_destroy');
Route::get('/shopmanage/{sid}/product/{spcn}/clothes/{created_at}/size/destroy','Shop\PrivateProduct\ProductDestroyController@private_product_clothes_size_destroy');
   Route::get('/shop/{sid}/product/{spcn}/like','Shop\PrivateProduct\ProductStoreController@private_product_like_store');
 Route::get('/shop/{sid}/product/{spcn}/hide','Shop\PrivateProduct\ProductStoreController@private_product_hide_store');
  Route::get('/shop/{sid}/product/{spcn}/show','Shop\PrivateProduct\ProductStoreController@private_product_show_store');
Route::get('/shop/{sid}/product/{spcn}/name/{pslug}','Shop\ProductShowController@product_show');

//--------------------------------------------shop route--------------------
//-----------------------------------------Order---------------------------
 Route::get('/user/{sid}/{spcn}/wishlist/destroy', 'Order\DestroyController@wishlist_destroy')->name('user.{sid}/{spcn}.wishlist.destroy');
Route::get('/shop/{sid}/product/{spcn}/wishlist','Order\StoreController@private_product_wishlist_store');
Route::post('/shop/private/product/wishlist/store','Order\StoreController@shop_private_product_wishlist_store');
Route::get('/shop/{sid}/wishlist', 'Order\PagesController@wishlist')->name('shop.{sid}.wishlist');
Route::get('/shopmanage/{sid}/order/{oid}/receipt', 'Order\PagesController@receipt')->name('shopmanage.{sid}.order.receipt');
Route::get('/shopmanage/{sid}/order', 'Order\PagesController@order')->name('shopmanage.{sid}.order');
Route::get('/shopmanage/{sid}/order/{oid}/view', 'Order\PagesController@order_view')->name('shopmanage.{sid}.order.{oid}.view');
Route::get('/shop/{sid}/order', 'Order\CreatePagesController@shop_order')->name('shop.{sid}.order');
Route::get('/shop/order/payment', 'Order\UpdateController@shop_order_payment')->name('shop.order.payment');
Route::get('/shop/order/complete', 'Order\StoreController@shop_order_complete')->name('shop.order.complete');
Route::get('/shop/{sid}/product/{spcn}/order', 'Order\CreatePagesController@shop_product_order')->name('shop.{sid}.product.{spcn}.order');
Route::get('/shop/product/order/payment', 'Order\UpdateController@shop_product_order_payment')->name('shop.product.order.payment');
Route::get('/shop/product/order/complete', 'Order\StoreController@shop_product_order_complete')->name('shop.product.order.complete');
Route::get('/user/order', 'Order\CreatePagesController@order')->name('user.order');
Route::get('/user/order/payment', 'Order\UpdateController@order_payment')->name('user.order.payment');
Route::get('/user/order/complete', 'Order\StoreController@order_complete')->name('user.order.complete');
Route::get('/shop/{sid}/product/{spcn}/booking', 'Order\CreatePagesController@shop_product_booking')->name('shop.{sid}.product.{spcn}.booking');
Route::get('/shop/product/booking/payment', 'Order\UpdateController@shop_product_booking_payment')->name('shop.product.booking.payment');
Route::get('/shop/product/booking/complete', 'Order\StoreController@shop_product_booking_complete')->name('shop.product.booking.complete');
Route::get('/shop/{sid}/product/{spcn}/order/{oid}/packed','Order\UpdateController@wishlist_packed');
Route::get('/shop/{sid}/product/{spcn}/order/{oid}/cancled','Order\UpdateController@wishlist_cancled');
Route::get('/shop/{sid}/product/{spcn}/order/{oid}/recive','Order\UpdateController@wishlist_recive');
Route::get('/shop/{sid}/product/{spcn}/order/{oid}/recived','Order\UpdateController@wishlist_recived');
   //--------------------------------------EndOrder------------------
// -----------------------------Crteate Route Start------------------------------
Route::get('/myshop/create','CreateController@shop_create')->name('myshop.create');
Route::get('shoptype/create','CreateController@shoptype_create')->name('shoptype.create');
Route::get('userrole/create','CreateController@userrole_create')->name('userrole.create');
//------------------------------create route end--------------------------------

//-------------------------------Store Route Start------------------------------

 Route::post('shoptype/store','StoreController@shoptype_store')->name('shoptype.store');
 Route::post('userrole/store','StoreController@userrole_store')->name('userrole.store');
  Route::post('shop/store','StoreController@shop_store')->name('shop.store');

//-------------------------------store route end-------------------------------

//-------------------------------Delete Route Start----------------------------

//-------------------------------delete route end-----------------------------

//------------------------------CEO Route Start-------------------------------

Route::get('ceo/dashboard','Office\CEOPageController@dashboard')->name('ceo.dashboard');
Route::get('ceo/ptrshops','Office\CEOPageController@ptrshops')->name('ceo.ptrshops');
Route::get('ceo/ptrproducts','Office\CEOPageController@ptrproducts')->name('ceo.ptrproducts');
Route::get('ceo/shops','Office\CEOPageController@shops')->name('ceo.shops');
Route::get('ceo/priproducts','Office\CEOPageController@priproducts')->name('ceo.priproducts');
Route::get('ceo/pubshops','Office\CEOPageController@pubshops')->name('ceo.pubshops');
Route::get('ceo/pubproducts','Office\CEOPageController@pubproducts')->name('ceo.pubproducts');
Route::get('ceo/workers','Office\CEOPageController@workers')->name('ceo.workers');
Route::get('ceo/users','Office\CEOPageController@users')->name('ceo.users');
Route::get('ceo/new-orders','Office\CEOPageController@neworders')->name('ceo.neworders');
Route::get('ceo/pending-orders','Office\CEOPageController@pendingorders')->name('ceo.pendingorders');
Route::get('ceo/completed-orders','Office\CEOPageController@completedorders')->name('ceo.completedorders');
Route::get('ceo/checked-orders','Office\CEOPageController@checkedorders')->name('ceo.checkedorders');
Route::get('ceo/cancled-orders','Office\CEOPageController@cancledorders')->name('ceo.cancledorders');

Route::get('ceo/order/{oid}/checked','Office\UpdateController@order_checked')->name('ceo.order.{oid}.checked');
Route::get('ceo/order/{oid}/cancled','Office\UpdateController@order_cancled')->name('ceo.order.{oid}.checked');
Route::get('ceo/order/{oid}/reback','Office\UpdateController@order_reback')->name('ceo.order.{oid}.checked');
Route::get('ceo/shop/{sid}/hide','Office\UpdateController@shop_hide')->name('ceo.order.{sid}.hide');
Route::get('ceo/shop/{sid}/show','Office\UpdateController@shop_show')->name('ceo.shop.{sid}.hide');
//------------------------------ceo route end----------------------------------
//------------------------------Partner Route Start----------------------------


//------------------------------partner route end-----------------------------
//------------------------------Shop Route--------------------------------
Route::get('ptrshop/{ptrsid}','Ptr\PagesController@dashboard');
Route::get('ptrshop/{ptrsid}/group/{group}','Ptr\PagesController@group');
Route::get('ptrshop/{ptrsid}/group/{group}/category/{category}','Ptr\PagesController@category');
Route::get('ptrshop/{ptrsid}/group/{group}/category/{category}/type/{type}','Ptr\PagesController@type');
Route::get('ptrshop/{ptrsid}/group/{group}/category/{category}/type/{type}/product/{product}','Ptr\PagesController@product');
Route::get('ptrshop/{ptrsid}/group/{brand}','Ptr\PagesController@brand');
//------------------------------shop route--------------------------------
//------------------------------Partner ShopManage Route--------------------------------

//------------------------------Partner shopmanage route-------------------------------
 //-----------------------------PtrshopUsershop route---------------------------------
Route::get('shop/{sid}/ptrshop','Ptrshopusershop\PagesController@index');
Route::get('shop/{sid}/ptrshop/{ptrsid}','Ptrshopusershop\PagesController@dashboard');
Route::get('shop/{sid}/ptrshop/{ptrsid}/group/{group}','Ptrshopusershop\PagesController@group');
Route::get('shop/{sid}/ptrshop/{ptrsid}/group/{group}/category/{category}','Ptr\PagesController@category');
Route::get('shop/{sid}/ptrshop/{ptrsid}/group/{group}/category/{category}/type/{type}','Ptrshopusershop\PagesController@type');
Route::get('shop/{sid}/ptrshop/{ptrsid}/group/{group}/category/{category}/type/{type}/product/{product}','Ptrshopusershop\PagesController@product');
Route::get('shop/{sid}/ptrshop/{ptrsid}/group/{brand}','Ptrshopusershop\PagesController@brand');

 //-----------------------------EndPtrshopUsershop route ---------------------
//------------------------------ShopManage Route--------------------------
Route::get('shopmanage/{sid}','Shop\Manage\ShopManagePagesController@index')->name('shopmanage.{sid}');
Route::get('shopmanage/{sid}/profile','Shop\Manage\ShopManagePagesController@edit_profile');
Route::get('shopmanage/{sid}/products','Shop\Manage\ShopManagePagesController@products');
Route::get('shopmanage/{sid}/showproducts','Shop\Manage\ShopManagePagesController@show_products');
Route::get('shopmanage/{sid}/hideproducts','Shop\Manage\ShopManagePagesController@hide_products');

Route::get('shopmanage/{sid}/notice/edit','Shop\Manage\ShopManageEditPagesController@notice')->name('shopmanage.{sid}.notice.edit');
Route::get('shopmanage/{sid}/contact/edit','Shop\Manage\ShopManageEditPagesController@contact')->name('shopmanage.{sid}.contact.edit');
Route::get('shopmanage/{sid}/address/edit','Shop\Manage\ShopManageEditPagesController@address')->name('shopmanage.{sid}.address.edit');

Route::post('shopmanage/{sid}/profile/image/update','Shop\Manage\ShopUpdateController@shop_image_update');
Route::post('shopmanage/{sid}/contact/info/update','Shop\Manage\ShopUpdateController@shop_contact_update');
Route::post('shopmanage/{sid}/address/info/update','Shop\Manage\ShopUpdateController@shop_address_update');
Route::post('shopmanage/{sid}/notice/info/update','Shop\Manage\ShopUpdateController@shop_notice_update');

  
  
Route::get('shopmanage/{sid}/category/create','Shop\Manage\ProductCategoryController@create')->name('shopmanage.{sid}.category.create');
Route::get('shopmanage/{sid}/type/create','Shop\Manage\ProductTypeController@create')->name('shopmanage.{sid}.type.create');
//-------------------------------shop manage route-----------------------
//-------------------------------Centeral Office Management Route------------
Route::get('co/dashboard','Office\CO3\PagesController@dashboard');

//----Accounting Route---------------------
Route::get('co/ac/dashboard','Office\Accounting7\PagesController@dashboard');

//--Diposit---------------

//--End Diposit----------
//--Withdrow---------------

//--End Withdrow----------
//--Investment---------------

//--End Investment----------
//--Order---------------

//--End Order----------
//--Exchange---------------

//--End Exchange----------

//----End Accounting Route-----------------
//----Developer Route-------------------------
Route::get('co/dev/dashboard','Office\Developer4\PagesController@dashboard');

//----End Developer Route---------------------------

//----Distribution Route-------------------------
Route::get('co/db/dashboard','Office\Distribution5\PagesController@dashboard');
//--Area---------------
Route::get('co/db/ar/dashboard','Office\Distribution5\Area\PagesController@dashboard');
//--End Area----------
//--Local---------------
Route::get('co/db/lo/dashboard','Office\Distribution5\Local\PagesController@dashboard');
//--End Local----------
//--Global---------------
Route::get('co/db/gl/dashboard','Office\Distribution5\Global\PagesController@dashboard');
//--End Global----------
//----End Distributin Route---------------------------

//----Marketing Route-------------------------
Route::get('co/mk/dashboard','Office\Marketing6\PagesController@dashboard');
//--Area---------------

//--End Area----------
//--Local---------------

//--End Local----------
//--Global---------------

//--End Global----------
//----End Marketing Route---------------------------

//----Service Route-------------------------
Route::get('co/se/dashboard','Office\Service8\PagesController@dashboard');

//----End service Route---------------------------

//-------------------------------Centeral Office Management Route------------