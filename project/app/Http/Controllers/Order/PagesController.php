<?php

namespace App\Http\Controllers\Order;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    
    

     public function wishlist($sid)
    {
        $shop=DB::table('shops')->where('slug',$sid)->first();
             if($shop){

                if(Auth::check()){
        $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
                if ($shop->type=="Public") {
                    $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->get();
                     $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                    $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                   
                   return view('pages.shop.wishlist',['shop'=>$shop , 'ok'=>$ok , 'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists]);
                
                }else{
                     $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->get();
                     $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                    $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                   
                   return view('pages.shop.wishlist',['shop'=>$shop , 'ok'=>$ok , 'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists]);
                }

        }else
        {     
            return redirect()->route('login');

        }

             }else{
                return redirect()->route('index');
             }

    	 

     }

      
    public function order($sid)
    {
        if(Auth::check())
        {
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
              
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){

               $orders = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
               ->where('wishlists.shop_id',$shop->id)
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.created_at','orders.action')
                ->orderBy('created_at', 'desc')->paginate(20);
               
               
                return view('pages.shopmanage.order',['shop'=>$shop ,'ok'=>$ok ,'orders'=>$orders]);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{

            return redirect()->route('login');
        }
        
    }
     public function order_view($sid ,$oid)
    {
        if(Auth::check())
        {
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
              
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
               if ($shop->shop_type=='hotel') {
                  $order = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
               ->where([['wishlists.shop_id',$shop->id],['wishlists.order_id',$oid]])
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.created_at','orders.action')
               ->first();
               $orderproducts=DB::table('wishlists')->where([['shop_id',$sid],['order_id',$oid]])
                ->orderBy('created_at', 'desc')->get();
                return view('pages.shopmanage.booking-view',['shop'=>$shop ,'ok'=>$ok ,'order'=>$order ,'orderproducts'=>$orderproducts ]);
               }else{
                $order = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
               ->where([['wishlists.shop_id',$shop->id],['wishlists.order_id',$oid]])
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.created_at','orders.action')
               ->first();
               $orderproducts=DB::table('wishlists')->where([['shop_id',$sid],['order_id',$oid]])
                ->orderBy('created_at', 'desc')->get();
                return view('pages.shopmanage.order-view',['shop'=>$shop ,'ok'=>$ok ,'order'=>$order ,'orderproducts'=>$orderproducts ]);
               }
               
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{

            return redirect()->route('login');
        }
        
    }
    
     public function receipt($sid ,$oid)
    {
        
        if(Auth::check())
        {
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
              
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){

               $order = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
               ->where([['wishlists.shop_id',$shop->id],['wishlists.order_id',$oid]])
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.contact_info','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.contact_info','orders.created_at','orders.action')
               ->first();
               $orderproducts=DB::table('wishlists')->where([['shop_id',$sid],['order_id',$oid],['action','packed']])
                ->orderBy('product_slug', 'asc')->get();
                if ($order) {
                   return view('pages.shopmanage.receipt',['shop'=>$shop ,'ok'=>$ok ,'order'=>$order ,'orderproducts'=>$orderproducts ]);
                }else{
                    return back()->withinput();
                }
                
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{

            return redirect()->route('login');
        }
        
        
    }


}
