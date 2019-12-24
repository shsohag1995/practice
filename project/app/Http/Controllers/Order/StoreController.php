<?php

namespace App\Http\Controllers\Order;

use App\Model\Shop\Shop;
use App\Model\Order\Wishlist;
use App\Model\Order\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StoreController extends Controller
{
  public function shop_private_product_wishlist_store(Request $request){
       $sid=$_POST['shop_id'];
       $spcn=$_POST['sp_counter_number'];
       
       $shop=DB::table('shops')->where('id',$sid)->first();
       if (Auth::check()){
        if ($shop->type=='Public') {
         $product = DB::table('products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
          if($product){
              $wishlist=DB::table('wishlists')->where([['shop_id', $sid], ['sp_counter_number',$spcn],['user_name', Auth::user()->user_name],['action','wish']])->first();
              
              if($wishlist){
                
                  Wishlist::where([['shop_id', $sid], ['sp_counter_number', $spcn],['user_name',Auth::user()->user_name] ,['action','wish']])->update([
                      'image'=>$request->input('image'),
                      'shop_id' => $sid,
                      'sp_counter_number'=>$spcn,
                      'product_name'=>$product->title,
                      'product_slug'=>$product->slug,
                       'price'=>((float)$product->price_bdt + ((float)$product->price_bdt*$product->profit_rate/100)),
                      'quantity'=> $request->input('quantity'),
                     ]);

              }else{
               
                 $wishlist = Wishlist::create([
                'image'=>$request->input('image'),
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name'=>Auth::user()->user_name,
                'product_name'=>$product->title,
                'product_slug'=>$product->slug,
                'price'=>((float)$product->price_bdt + ((float)$product->price_bdt*$product->profit_rate/100)),
                'quantity'=>$request->input('quantity'),
                'unit'=>$product->unit, 
                'action'=>'wish',
                ]);

                 }
                 if ($_POST['submit']=='order'){

                    $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
                   return view('pages.order.single-order',['sid'=>$sid ,'spcn'=>$spcn ,'orderaddress'=>$orderaddress]);
                 }else{
                   return back()->withinput();
                 }
                
              }else{
             return redirect()->route('index');
          }
        }else{
            $product = DB::table('private_products')->where([['shop_id', $sid],['sp_counter_number', $spcn],['action', 'Show']])->first();
              if($product){
              $wishlist=DB::table('wishlists')->where([['shop_id', $sid], ['sp_counter_number',$spcn],['user_name', Auth::user()->user_name],['action','wish']])->first();
               if ($shop->shop_type=='clothes') {
                   $size=$_POST['size'] .' '.'size';
                 }else{
                  $size=null;
                 }
              if($wishlist){
                 $price=((float)$product->price_bdt + ((float)$product->price_bdt*$product->profit_rate/100)+((float)$product->price_bdt*$product->seller_profit_rate/100));

                  Wishlist::where([['shop_id', $sid], ['sp_counter_number', $spcn],['user_name',Auth::user()->user_name],['action','wish']])->update([
                       'image'=>$request->input('image'),
                      'shop_id' => $sid,
                      'sp_counter_number'=>$spcn,
                      'product_name'=>$product->title,
                      'product_slug'=>$product->slug,
                       'price'=>$price,
                      'info' => $size,
                      'quantity'=> $request->input('quantity'),
                     ]);

              }else{
                  $price=((float)$product->price_bdt + ((float)$product->price_bdt*$product->profit_rate/100)+((float)$product->price_bdt*$product->seller_profit_rate/100));
                 $wishlist = Wishlist::create([
                'image'=>$request->input('image'),
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'ptrshop_id'=>$product->ptrshop_id, 
                'ptr_sp_counter_number'=>$product->ptr_sp_counter_number,
                'product_name'=>$product->title,
                'product_slug'=>$product->slug,
                'price'=>$price,
                'quantity'=>$request->input('quantity'),
                'unit'=>$product->unit, 
                 'info' => $size,
                'action'=>'wish',
                ]);

                 }
                 if ($_POST['submit']=='order') {

                    $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
                   return view('pages.order.single-order',['sid'=>$sid ,'spcn'=>$spcn ,'orderaddress'=>$orderaddress]);
                 }else{
                   return back()->withinput();
                 }
                
              }else{
             return redirect()->route('index');
          }
        }
         
       }else{
        return redirect()->route('login');
       }
    
  }
	public function private_product_wishlist_store($sid ,$spcn){
       
       $shop=DB::table('shops')->where('id',$sid)->first();
       if (Auth::check()){
        if ($shop->type=='Public') {
           $product = DB::table('products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
          if($product){
              $wishlist=DB::table('wishlists')->where([['shop_id', $sid], ['sp_counter_number',$spcn],['user_name', Auth::user()->user_name],['action','wish']])->first();
              if($wishlist){

                  Wishlist::where([['shop_id', $sid], ['sp_counter_number', $spcn],['user_name',Auth::user()->user_name],['action','wish']])->update([
                       'image'=>$product->image,
                      'shop_id' => $sid,
                      'sp_counter_number'=>$spcn,
                      'product_name'=>$product->title,
                      'product_slug'=>$product->slug,
                      'price'=>($product->price_bdt + ($product->price_bdt*$product->profit_rate/100)),
                      'user_name' => Auth::user()->user_name,
                     ]);

              }else{
               
                 $wishlist = Wishlist::create([
                'image'=>$product->image,
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'product_name'=>$product->title,
                'product_slug'=>$product->slug,
                'price'=>($product->price_bdt + ($product->price_bdt*$product->profit_rate/100)),
                'quantity'=>$product->minimum_order,
                'unit'=>$product->unit, 
                'action'=>'wish',
                ]);

                 }
                 return back()->withinput();
              }else{
             return redirect()->route('index');
          }
        }else{
          $product = DB::table('private_products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
           if($product){
              $wishlist=DB::table('wishlists')->where([['shop_id', $sid], ['sp_counter_number',$spcn],['user_name', Auth::user()->user_name],['action','wish']])->first();
              //dd($like);
              if($wishlist){

                  Wishlist::where([['shop_id', $sid], ['sp_counter_number', $spcn],['user_name',Auth::user()->user_name],['action','wish']])->update([
                       'image'=>$product->image,
                      'shop_id' => $sid,
                      'sp_counter_number'=>$spcn,
                      'product_name'=>$product->title,
                      'product_slug'=>$product->slug,
                      'price'=>((float)$product->price_bdt + ((float)$product->price_bdt*(float)$product->profit_rate/100)+((float)$product->price_bdt*(float)$product->seller_profit_rate/100)),
                      
                      'user_name' => Auth::user()->user_name,
                     ]);

              }else{
               
                 $wishlist = Wishlist::create([
                'image'=>$product->image,
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'ptrshop_id'=>$product->ptrshop_id, 
                'ptr_sp_counter_number'=>$product->ptr_sp_counter_number,
                 'product_name'=>$product->title,
                'product_slug'=>$product->slug,
                'price'=>((float)$product->price_bdt + ((float)$product->price_bdt*(float)$product->profit_rate/100)+((float)$product->price_bdt*(float)$product->seller_profit_rate/100)),
                'quantity'=>$product->minimum_order,
                'unit'=>$product->unit, 
                'action'=>'wish',
                
                
                ]);

                 }
                 return back()->withinput();
              }else{
             return redirect()->route('index');
          }
        }
         
       }else{
        return redirect()->route('login');
       }
    
	}
    
    public function store(Request $request)
    {
        
    }

    
      public function shop_product_order_complete(Request $request)
    {
        if (Auth::check()) {
          $shop=DB::table('shops')->where('id',$_GET['shop_id'])->first();
          if ($shop) {
            if ($shop->type=='Public') {
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
          }else
          {
              $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
              $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
          }
          $ok=0;
          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
          $order=Order::create([
        'order_type'=>'order',
        'user_name'=>Auth::user()->user_name,
        'user_id'=>Auth::user()->id,
       'customer_name'=>$request->input('customer_name'),
        'contact_info'=>$request->input('contact_info'),
        'payment_method'=> $request->input('payment_method'),
        'payment_amount' => $request->input('payment_amount'),
         'account_number' => $request->input('account_number'),
          'trxid' => $request->input('trxid'),
          'address'=> $request->input('shiping_address'),
          'action'=>'pending',
        
          ]);
          Wishlist::where([['shop_id',$_GET['shop_id']],['user_name',Auth::user()->user_name],['sp_counter_number',$_GET['sp_counter_number']],['action','wish']])->update([
           'order_id'=>$order->id,
           'action'=>'pending',
          ]);
          return redirect('/order');
         // $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          // return view('pages.order.single-order-complete',['shop'=>$shop,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'message'=>'Your order is completed']);
       }else {
         return redirect()->route('login');
       }
          }


     }

     public function shop_order_complete(Request $request)
    {
        if (Auth::check()) {
          $shop=DB::table('shops')->where('id',$_GET['shop_id'])->first();
          if ($shop) {
            if ($shop->type=='Public') {
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
          }else
          {
              $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
              $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
          }
          $ok=0;
          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
          $order=Order::create([
        'order_type'=>'order',
        'user_name'=>Auth::user()->user_name,
        'user_id'=>Auth::user()->id,
       'customer_name'=>$request->input('customer_name'),
        'contact_info'=>$request->input('contact_info'),
        'payment_method'=> $request->input('payment_method'),
        'payment_amount' => $request->input('payment_amount'),
         'account_number' => $request->input('account_number'),
          'trxid' => $request->input('trxid'),
          'address' => $request->input('shiping_address'),
          'action'=>'pending',
        
          ]);
          Wishlist::where([['shop_id',$_GET['shop_id']],['user_name',Auth::user()->user_name],['action','wish']])->update([
           'order_id'=>$order->id,
           'action'=>'pending',
          ]);
         // $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          return redirect('/order');
          // return view('pages.order.shop-order-complete',['shop'=>$shop,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'message'=>'Your order is completed']);
       }else {
         return redirect()->route('login');
       }
          }

        
     }

     public function order_complete(Request $request)
    {
        if (Auth::check()) {
          
          $ok=0;
          
          $order=Order::create([
            'order_type'=>'order',
        'user_name'=>Auth::user()->user_name,
        'user_id'=>Auth::user()->id,
       'customer_name'=>$request->input('customer_name'),
        'contact_info'=>$request->input('contact_info'),
        'payment_method'=> $request->input('payment_method'),
        'payment_amount' => $request->input('payment_amount'),
         'account_number' => $request->input('account_number'),
          'trxid' => $request->input('trxid'),
          'address' => $request->input('shiping_address'),
          'action'=>'pending',
        
          ]);
          Wishlist::where([['user_name',Auth::user()->user_name],['action','wish']])->update([
           'order_id'=>$order->id,
           'action'=>'pending',
          ]);
           return redirect('/order');
         // $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
         //  return view('pages.order.multiple-order-complete',['ok'=>$ok ,'message'=>'Your order is completed']);
       }else {
         return redirect()->route('login');
       }



    }

        
    public function shop_product_booking_complete(Request $request)
    {
        if (Auth::check()) {
          $shop=DB::table('shops')->where('id',$_GET['shop_id'])->first();
          if ($shop) {
            if ($shop->type=='Public') {
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
          }else
          {
              $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
              $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
          }
          $ok=0;
          $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
          $order=Order::create([
        'order_type'=>'booking',
        'user_name'=>Auth::user()->user_name,
        'user_id'=>Auth::user()->id,
       'customer_name'=>$request->input('customer_name'),
        'contact_info'=>$request->input('contact_info'),
        'payment_method'=> $request->input('payment_method'),
        'payment_amount' => $request->input('payment_amount'),
         'account_number' => $request->input('account_number'),
          'trxid' => $request->input('trxid'),
          'address'=> $request->input('shiping_address'),
          'action'=>'pending',
        
          ]);
           $product = DB::table('private_products')->where([['shop_id', $_GET['shop_id']], ['sp_counter_number', $_GET['sp_counter_number']],['action', 'Show']])->first();
          $wishlist = Wishlist::create([
                'order_id'=>$order->id,
                'image'=>$product->image,
                'shop_id' => $shop->id,
                'shop_slug'=>$shop->slug,
                'sp_counter_number'=>$product->sp_counter_number,
                'user_id' => Auth::user()->id,
                'user_name' =>Auth::user()->user_name,
                'ptrshop_id'=>$product->ptrshop_id, 
                'ptr_sp_counter_number'=>$product->ptr_sp_counter_number,
                 'product_name'=>$product->title,
                'product_slug'=>$product->slug,
                'price'=>((float)$product->price_bdt + ((float)$product->price_bdt*(float)$product->profit_rate/100)+((float)$product->price_bdt*(float)$product->seller_profit_rate/100)),
                'quantity'=>$product->minimum_order,
                'unit'=>$product->unit, 
                'action'=>'pending',
                
                
                ]);
          return redirect('/booking');
         /* Wishlist::where([['shop_id',$_GET['shop_id']],['user_name',Auth::user()->user_name],['sp_counter_number',$_GET['sp_counter_number']],['action','wish']])->update([
           'order_id'=>$order->id,
           'action'=>'pending',
          ]); */
         // $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          /* return view('pages.order.single-booking-complete',['shop'=>$shop,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'message'=>'Your booking is completed']);*/
       }else {
         return redirect()->route('login');
       }
          }

       
      
      
    }  
       

}
