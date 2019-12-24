<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductShowController extends Controller
{
      

   
    public function product_show($sid,$spcn,$pslug)
    {
                
              $shop=DB::table('shops')->where('slug',$sid)->first();
              $publicproduct=DB::table('products')->where([['shop_slug',$sid],['sp_counter_number',$spcn],['slug',$pslug]])->first();
              $product=DB::table('private_products')->where([['shop_slug',$sid],['sp_counter_number',$spcn],['slug',$pslug]])->first();
               $ok=0;
        if($shop &&($product || $publicproduct)){
            if(Auth::check()){
            
            $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
       
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      
                if($shop->type=="Public"){

                       $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                       $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                       $product=$publicproduct;
                        $products=DB::table('products')->where([['shop_id',$shop->id],['type',$product->type]])->paginate(7);
                         $images=DB::table('product_images')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                       return view('pages.shop.public-product',[ 'shop'=>$shop, 'ok'=>$ok ,'product'=>$product, 'brands'=>$brands ,'categories'=>$categories ,'products'=>$products,'images'=>$images ,'wishlists'=>$wishlists ]);
                     
                 }else{
                       $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                      $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                      $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                      $images=DB::table('private_product_images')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                      $products=DB::table('private_products')->where([['shop_id',$shop->id],['type',$product->type]])->paginate(7);
                      if ($shop->shop_type=='clothes') {
                             $sizes=DB::table('private_product_clothes_sizes')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                         return view('pages.shop.clothes-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists ,'images'=>$images ,'products'=>$products ,'sizes'=>$sizes]);
                      }elseif($shop->shop_type=='shoes'){
                          return view('pages.shop.shoes-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists ,'images'=>$images ,'products'=>$products]);
                      }elseif ($shop->shop_type=='hotel') {
                       
                        return view('pages.shop.hotel-room',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists ,'images'=>$images ,'products'=>$products ]);

                      }
                      else{
                         return view('pages.shop.private-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists ,'images'=>$images ,'products'=>$products]);
                      }
                     

                 }
         
        

        }else
        {     
            
             
             if($shop->type=="Public"){
                  $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                  $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                   $product=$publicproduct;
                  $images=DB::table('product_images')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                   
                    $products=DB::table('products')->where([['shop_id',$shop->id],['type',$product->type]])->paginate(7);
                       return view('pages.shop.public-product',[ 'shop'=>$shop,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories,'images'=>$images ,'products'=>$products ]);
                     
            }else{
                $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                $images=DB::table('private_product_images')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                 $products=DB::table('private_products')->where([['shop_id',$shop->id],['type',$product->type]])->paginate(7);
                 if ($shop->shop_type=='clothes') {
                          $sizes=DB::table('private_product_clothes_sizes')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->get();
                         return view('pages.shop.clothes-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'images'=>$images ,'products'=>$products ,'sizes'=>$sizes]);
                      }elseif($shop->shop_type=='shoes'){
                           return view('pages.shop.shoes-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'images'=>$images ,'products'=>$products ]);
                      }elseif ($shop->shop_type=='hotel'){
                        return view('pages.shop.hotel-room',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'images'=>$images ,'products'=>$products ]);
                      }else{
                         return view('pages.shop.private-product',[ 'shop'=>$shop,'ok'=>$ok ,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories ,'images'=>$images ,'products'=>$products ]);
                      }
            }
            
     

        }



        }else{
            return redirect()->route('blank');
        }

    	
     }

     

}
