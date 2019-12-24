<?php

namespace App\Http\Controllers\Shop\Manage;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

class ShopManagePagesController extends Controller
{
    
    public function index($sid)
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
              if($shop->type=='Public'){
               $products = DB::table('products')->where('shop_id',$shop->id)->orderBy('updated_at', 'desc')->get();
               $showproducts = DB::table('products')->where([['shop_id', $shop->id], ['action', 'Show']])->orderBy('updated_at', 'desc')->get();
               $hideproducts = DB::table('products')->where([['shop_id', $shop->id], ['action', 'hide']])->orderBy('updated_at', 'desc')->get();
              }else
              {
                $products = DB::table('private_products')->where('shop_id',$shop->id)->orderBy('updated_at', 'desc')->get();
               $showproducts = DB::table('private_products')->where([['shop_id', $shop->id], ['action', 'Show']])->orderBy('updated_at', 'desc')->get();
               $hideproducts = DB::table('private_products')->where([['shop_id', $shop->id], ['action', 'hide']])->orderBy('updated_at', 'desc')->get();
              }
               
               $date=date("Y-m-d");
               $date=$date.'%';
               $orders = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
               ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.created_at','orders.action')
                ->orderBy('orders.created_at','desc')
                ->get();
             //  db($orders);
              // $orders= DB::select('select * from orders,wishlists  where shop_id = :id groupBy order_id' , ['id' => $shop->id]);
               $orderscount=count($orders);
               $productscount=count($products);
               $showproductscount=count($showproducts);
               $hideproductscount=count($hideproducts);
                return view('pages.shopmanage.dashboard',['shop'=>$shop ,'ok'=>$ok ,'showproductscount'=>$showproductscount,'productscount'=>$productscount,'hideproductscount'=>$hideproductscount ,'orders'=>$orders]);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }
        
    }

     public function edit_profile($sid)
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
                return view('pages.shopmanage.shop-profile',['shop'=>$shop ,'ok'=>$ok ]);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }
        
    }

public function products($sid)
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
                 if ($shop->type=="Public") {
                   $products = DB::table('products')->where('shop_id',$shop->id)->orderBy('created_at', 'desc')->paginate(20);
                 $products = DB::table('products')->where([['shop_id', $shop->id]])->orderBy('updated_at', 'desc')->paginate(20);
                 }else{
                  $products = DB::table('private_products')->where('shop_id',$shop->id)->orderBy('created_at', 'desc')->paginate(20);
                 $products = DB::table('private_products')->where([['shop_id', $shop->id]])->orderBy('updated_at', 'desc')->paginate(20);
                 }
               
                 if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery'||$shop->shop_type=='public') {
                    
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }elseif($shop->shop_type=='books'){
                   return view('pages.shopmanage.cbproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                   
                  }elseif($shop->shop_type=='furniture'){
                    
                    return view('pages.shopmanage.ctproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                    
                  }elseif($shop->shop_type=='hotel'){
                    
                    return view('pages.shopmanage.cproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }else{
                   
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }

                
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }
        
    }





    public function show_products($sid)
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
              if ($shop->type=="Public") {
               $products = DB::table('products')->where([['shop_id', $shop->id], ['action', 'Show']])->orderBy('created_at', 'desc')->paginate(20);
              }else{
                $products = DB::table('private_products')->where([['shop_id', $shop->id], ['action', 'Show']])->orderBy('created_at', 'desc')->paginate(20);
              }
               
               if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery'||$shop->shop_type=='public') {
                    
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }elseif($shop->shop_type=='books'){
                   return view('pages.shopmanage.cbproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                   
                  }elseif($shop->shop_type=='furniture'){
                    
                    return view('pages.shopmanage.ctproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                    
                  }elseif($shop->shop_type=='hotel'){
                    
                    return view('pages.shopmanage.cproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }else{
                   
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }

              //  return view('pages.shopmanage.showproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }
        
    }

    public function hide_products($sid)
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
               if ($shop->type=="Public") {
                 $products = DB::table('products')->where([['shop_id', $shop->id], ['action', 'hide']])->orderBy('created_at', 'desc')->paginate(20);
               }else{
                $products = DB::table('private_products')->where([['shop_id', $shop->id], ['action', 'hide']])->orderBy('created_at', 'desc')->paginate(20);
               }
               
               
                if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery'||$shop->shop_type=='public') {
                    
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }elseif($shop->shop_type=='books'){
                   return view('pages.shopmanage.cbproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                   
                  }elseif($shop->shop_type=='furniture'){
                    
                    return view('pages.shopmanage.ctproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                    
                  }elseif($shop->shop_type=='hotel'){
                    
                    return view('pages.shopmanage.cproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }else{
                   
                   return view('pages.shopmanage.products',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
                  }

              //  return view('pages.shopmanage.hideproducts',['shop'=>$shop ,'ok'=>$ok ,'products'=>$products ]);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{

            return redirect()->route('login');
        }
        
    }

    
}
