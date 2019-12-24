<?php

namespace App\Http\Controllers;
use App\Model\Shop\shop;
use App\Model\Shop\ShopUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $searchtype='home';
        if (Auth::check()) {
           // dump(Auth::user()->id);
         $uid=Auth::user()->id;
         
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
         $products = DB::table('shop_users')
            ->join('products', 'shop_users.shop_id', '=', 'products.shop_id')
            ->where([['shop_users.user_id', $uid],['action','show']])
            ->orderBy('products.updated_at','desc' )
            ->paginate(20);
        
        return view('pages.auth.home',['myshops'=>$myshops ,'connectedshops'=>$connectedshops , 'products'=>$products ,'searchtype'=>$searchtype]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

  
 
public function user()
    {   $searchtype='user';
        
            if (Auth::check()){
            
                $user_profile=DB::table('user_profiles')->where('user_name',Auth::user()->user_name)->first();
                //dd($user_profile);
                $uid=Auth::user()->id;
        
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();

        return view('pages.auth.user_profile',['myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'user_profile'=>$user_profile ,'searchtype'=>$searchtype]);
   
          
         
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
           
       


    }
    public function getorder()
    {     $searchtype='order';
       
            if (Auth::check()){
            
         $orders = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
                ->join('products', 'wishlists.shop_id', '=','products.shop_id')
               ->where('products.user_id',Auth::user()->id)
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.account_number','orders.created_at','orders.payment_method','orders.payment_amount','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.account_number','orders.address','orders.payment_method','orders.payment_amount','orders.created_at','orders.action')
                ->orderBy('orders.created_at','desc')
                ->paginate(20);

        return view('pages.auth.getorder',['orders'=>$orders,'searchtype'=>$searchtype ]);
    
         
        }else
        {
            return view('auth.login');
           
        }
           

    }
    public function getorder_view($oid)

    {     $searchtype='order';
       
            if (Auth::check()){
            
          $order = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
                ->join('products', 'wishlists.shop_id', '=','products.shop_id' )
               ->where([['products.user_name',Auth::user()->user_name],['orders.id',$oid]])
               ->select('wishlists.order_id','orders.user_name','orders.customer_name','orders.created_at','orders.payment_method','orders.address','orders.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','orders.user_name','orders.customer_name','orders.address','orders.payment_method','orders.created_at','orders.action')
                ->orderBy('orders.created_at','desc')
                ->get();


        $orderproducts = DB::table('wishlists')
               ->join('orders', 'wishlists.order_id', '=','orders.id' )
                ->join('products', 'wishlists.shop_id', '=','products.shop_id' )
               ->where([['products.user_id',Auth::user()->id],['wishlists.order_id',$oid]])
               ->select('wishlists.order_id','wishlists.user_name','wishlists.image','wishlists.sp_counter_number','wishlists.shop_slug','wishlists.shop_id','wishlists.product_slug','wishlists.price','wishlists.quantity','wishlists.unit','wishlists.info','wishlists.action',DB::raw('count(*) as total'))
                ->groupBy('wishlists.order_id','wishlists.user_name','wishlists.image','wishlists.sp_counter_number','wishlists.shop_slug','wishlists.shop_id','wishlists.product_slug','wishlists.price','wishlists.quantity','wishlists.unit','wishlists.info','wishlists.action')
                ->orderBy('orders.created_at','desc')
                ->get();

        return view('pages.auth.getorder_view',['order'=>$order,'orderproducts'=>$orderproducts,'searchtype'=>$searchtype ]);
    
         
        }else
        {
            return view('auth.login');
           
        }
           

    }


    public function user_order()
    {     $searchtype='order';
       
            if (Auth::check()){
            
         $orders=DB::table('orders')->where([['user_name',Auth::user()->user_name],['user_id',Auth::user()->id],['order_type','order']])->orderBy('id','desc'&&'created_at','desc')->paginate(20);

        return view('pages.auth.user_order',['orders'=>$orders,'searchtype'=>$searchtype ]);
    
         
        }else
        {
            return view('auth.login');
           
        }
           

    }

    public function user_order_view($oid)
    {
       $searchtype='orderview';
      
            if (Auth::check()){
           
               
                $uid=Auth::user()->id;
         
              $order=DB::table('orders')->where([['user_name',Auth::user()->user_name],['user_id',Auth::user()->id],['id',$oid]])->get();
            //  dd($order);
               $orderproducts=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['order_id',$oid]])
                ->orderBy('created_at', 'desc')->get();
        return view('pages.auth.user_order_view',['order'=>$order,'orderproducts'=>$orderproducts,'searchtype'=>$searchtype ]);
   
         
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
           
       


    }
     
     public function user_booking()
    {     $searchtype='order';
       
            if (Auth::check()){
            
         $orders=DB::table('orders')->where([['user_name',Auth::user()->user_name],['user_id',Auth::user()->id],['order_type','booking']])->orderBy('id','desc'&&'created_at','desc')->paginate(20);

        return view('pages.auth.booking',['orders'=>$orders,'searchtype'=>$searchtype ]);
    
         
        }else
        {
            return view('auth.login');
           
        }
           

      }
       public function user_booking_view($oid)
    {     $searchtype='order';
       
            if (Auth::check()){
            
         $orders=DB::table('orders')->where([['user_name',Auth::user()->user_name],['user_id',Auth::user()->id],['id',$oid]])->get();

        return view('pages.auth.user_order',['orders'=>$orders,'searchtype'=>$searchtype ]);
    
         
        }else
        {
            return view('auth.login');
           
        }
           

    }


    public function user_wishlist()
    {
        $searchtype='wishlist';
       

            if (Auth::check()){
           
         
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',Auth::user()->id)->get();
         $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['action','wish']])->get();
         $shopcounter= DB::select('select DISTINCT shop_id from wishlists where user_name =:id  ',['id'=>Auth::user()->user_name]);
         $shopcounter = DB::table('wishlists')
               ->where([['user_name',Auth::user()->user_name],['action','wish']])
               ->select('shop_slug',DB::raw('count(*) as total'))
                ->groupBy('shop_slug')
               ->get();
         $shopcounter=count($shopcounter);
        return view('pages.auth.wishlist',['myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'wishlists'=>$wishlists ,'shopcounter'=>$shopcounter ,'searchtype'=>$searchtype ]);
   
         
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
           
        
        


    }

    public function products()
    {
        $searchtype='products';
      

            if (Auth::check()){
           
                
                $uid=Auth::user()->id;
        
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
         $products=DB::table('products')->where('user_id',Auth::user()->id)->paginate(15);
        // dd($products);
        return view('pages.auth.products',['myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'products'=>$products ,'searchtype'=>$searchtype ]);
   
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
           
       

    }

    


}
