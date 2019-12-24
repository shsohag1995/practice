<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\product;
class PagesController extends Controller
{
//-------------Shop pages contoller-----
   public function ProductCategory(){
        return view('pages.shop.product-category');
    }

    public function ShopProduct(){
     // $products=DB::table('products')->where('shop_id','=','1')->orderBy('id','desc')->get();
      $products= product::where('shop_id','=','2')->orderBy('id','desc')->get();
      
    	return view('pages.shop.product')->with('products', $products);
    }
   
    public function ShopIndex(){
    	return view('pages.shop.index');
    }
    /*
    public function ShopMessage(){
    	return view('pages.shop.message');
    }
   */
    /*
    public function ShopNotice(){
    	return view('pages.shop.notice');
    }
   */


    public function ShopContact(){
    	return view('pages.shop.contact');
    }
    /*
    public function ShopAddress(){
    	return view('pages.shop.address');
    }
   */

//---------End Shop Pages Contoller------


//-------------CityShop pages contoller-----
   
    public function CityShopProduct(){
    	return view('pages.cityshop.product');
    }
   
    
    public function CityShopIndex(){
    	return view('pages.cityshop.index');
    }
    
    
    public function CityShopNotice(){
    	return view('pages.cityshop.notice');
    }
   
     
    public function CityShopProductAdd(){
    	return view('pages.cityshop.product_add');
    }
   

     /*
    public function CityShopProductAdd(){
    	return view('pages.cityshop.product_details');
    }
   */

//---------End Shop Pages Contoller------
}


