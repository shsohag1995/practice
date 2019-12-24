<?php

namespace App\Http\Controllers\Order;
use App\Model\Order\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CreatePagesController extends Controller
{

    public function order()
    {
       if (Auth::check()) {
          
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          return view('pages.order.multiple-order',['orderaddress'=>$orderaddress]);
       }else {
         return redirect()->route('login');
       }

         
    }

    

     public function shop_order($sid)
    {
      if (Auth::check()) {
           $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
          $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$sid],['action','wish']])->take(5)->get();
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          $shop=DB::table('shops')->where('id',$sid)->first();
          $shopadmin=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
           return view('pages.order.shop-order',['orderaddress'=>$orderaddress ,'shop'=>$shop ,'wishlists'=>$wishlists ,'categories'=>$categories ,'brands'=>$brands ,'ok'=>$ok]);
       }else {
         return redirect()->route('login');
       }

     

    }

     
    
  
   public function shop_product_order($sid ,$spcn)
    {
       if (Auth::check()) {
          $wishlist=DB::table('wishlists')->where([['shop_id', $sid], ['sp_counter_number',$spcn],['user_name', Auth::user()->user_name],['action','wish']])->first();
          if ($wishlist) {
             $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
           return view('pages.order.single-order',['sid'=>$sid ,'spcn'=>$spcn ,'orderaddress'=>$orderaddress]);
          }else{
             
              $shop=DB::table('shops')->where('id',$sid)->first();
              if ($shop->type=="Public") {
               $product = DB::table('products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
              }else{
                $product = DB::table('private_products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
              }
              if ($shop && $product) {
                if ($shop->type=='Public') {
                  $price=($product->price_bdt + ($product->price_bdt*$product->profit_rate/100));
                  $wishlist = Wishlist::create([
                'image'=>$product->image,
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'product_slug'=>$product->slug,
                'price'=>$price,
                'quantity'=>$product->minimum_order,
                'unit'=>$product->unit, 
                'action'=>'wish',
                
                ]);
                }else{
                  $price=($product->price_bdt + ($product->price_bdt*$product->profit_rate/100)+($product->price_bdt*$product->seller_profit_rate/100));
                   
                    $wishlist = Wishlist::create([
                'image'=>$product->image,
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'ptrshop_id'=>$product->ptrshop_id, 
                'ptr_sp_counter_number'=>$product->ptr_sp_counter_number,
                'product_slug'=>$product->slug,
                'price'=>$price,
                'quantity'=>$product->minimum_order,
                'unit'=>$product->unit, 
                'action'=>'wish',
                
                ]);
                }
                  $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
           return view('pages.order.single-order',['sid'=>$sid ,'spcn'=>$spcn ,'orderaddress'=>$orderaddress]);
              }
              return redirect()->route('index');
            
          }
         

       }else {

         return redirect()->route('login');

       }

      
    }

    

       public function shop_product_booking($sid ,$spcn)
    {
       if (Auth::check()) {
           $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$sid]);
          $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$sid]);
          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$sid],['action','wish']])->take(5)->get();
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          $shop=DB::table('shops')->where('id',$sid)->first();
          $shopadmin=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
           return view('pages.order.single-booking',['spcn'=>$spcn,'orderaddress'=>$orderaddress ,'shop'=>$shop ,'wishlists'=>$wishlists ,'categories'=>$categories ,'brands'=>$brands ,'ok'=>$ok]);
       }else {
         return redirect()->route('login');
       }

      
    }

     
    
  
  
  
}
