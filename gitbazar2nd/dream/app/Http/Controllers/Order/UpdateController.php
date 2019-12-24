<?php

namespace App\Http\Controllers\Order;
use App\Model\Shop\Shop;
use App\Model\Order\OrderUser;
use App\Model\Order\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UpdateController extends Controller
{
    public function order_payment(Request $request)
    {
        if (Auth::check()) {
          
          
           
          $ok=0;
          
          $orderaddress=OrderUser::where('user_name',Auth::user()->user_name)->update([    
       'customer_name'=>$request->input('customer_name'),
         'contact_info'=>$request->input('contact_info'),
        'country'=> $request->input('country'),
        'state'=>$request->input('state'),
       'district'=>$request->input('district'),
       'city'=>$request->input('city'),
      'shiping_address'=>$request->input('shiping_address'),
          ]);
        //  $total=DB::table('wishlists')->where([['action','wish'],['user_name',Auth::user()->user_name]])->get();
          $total = DB::table('wishlists')
                          ->where([['action','wish'],['user_name',Auth::user()->user_name]])
                              ->select('user_name',DB::raw('sum(price) as total'))
                ->groupBy('user_name')
                ->get();
        //  dd($total);
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
           return view('pages.order.multiple-order-payment',['orderaddress'=>$orderaddress , 'ok'=>$ok ,'payment'=>$_GET['payment'],'total'=>$total]);
       }else {
         return redirect()->route('login');
       }
          

     }
   
   public function shop_product_order_payment(Request $request)
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
          $orderaddress=OrderUser::where('user_name',Auth::user()->user_name)->update([    
       'customer_name'=>$request->input('customer_name'),
         'contact_info'=>$request->input('contact_info'),
        'country'=> $request->input('country'),
        'state'=>$request->input('state'),
       'district'=>$request->input('district'),
       'city'=>$request->input('city'),
      'shiping_address'=>$request->input('shiping_address'),
          ]);
          $spcn=$_GET['sp_counter_number'];
          $total = DB::table('wishlists')
                          ->where([['shop_id',$shop->id],['sp_counter_number',$spcn],['action','wish'],['user_name',Auth::user()->user_name]])
                              ->select('user_name',DB::raw('sum(price) as total'))
                ->groupBy('user_name')
                ->get();
        //  dd($total);
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
           return view('pages.order.single-order-payment',['shop'=>$shop,'orderaddress'=>$orderaddress ,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'payment'=>$_GET['payment'],'spcn'=>$_GET['sp_counter_number'],'total'=>$total]);
         }
         return route('index');
       }else {
         return redirect()->route('login');
       }
        	

     }

     public function shop_order_payment(Request $request)
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
          $orderaddress=OrderUser::where('user_name',Auth::user()->user_name)->update([
           
       'customer_name'=>$request->input('customer_name'),
         'contact_info'=>$request->input('contact_info'),
        'country'=> $request->input('country'),
        'state'=>$request->input('state'),
       'district'=>$request->input('district'),
       'city'=>$request->input('city'),
      'shiping_address'=>$request->input('shiping_address'),
          ]);
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
           $total = DB::table('wishlists')
                          ->where([['shop_id',$shop->id],['action','wish'],['user_name',Auth::user()->user_name]])
                              ->select('user_name',DB::raw('sum(price) as total'))
                ->groupBy('user_name')
                ->get();
         // dd($total);
           return view('pages.order.shop-order-payment',['shop'=>$shop,'orderaddress'=>$orderaddress ,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'payment'=>$_GET['payment'] ,'total'=>$total]);
       }else {
         return redirect()->route('login');
       }
          }

     }

     public function wishlist_packed($sid,$spcn,$oid){

      if(Auth::check()){
          $shop=DB::table('shops')->where('id',$sid)->first();
          if ($shop){
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
               
           if ($ok==1){
             $update=Wishlist::where([['order_id',$oid],['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                 'action'=>'packed',
                ]);
             
           }else{
            return redirect()->route('index');
           }
               return back()->withinput();
          }
          
      }else{

        return redirect()->route('login');
      }
     }
     public function wishlist_cancled($sid,$spcn,$oid){

      if(Auth::check()){
          $shop=DB::table('shops')->where('id',$sid)->first();
          if ($shop){
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
               
           if ($ok==1){
             $update=Wishlist::where([['order_id',$oid],['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                 'action'=>'cancled',
                ]);
             
           }else{
            return redirect()->route('index');
           }
               return back()->withinput();
          }
          
      }else{

        return redirect()->route('login');
      }
     }
    public function wishlist_recive($sid,$spcn,$oid){

      if(Auth::check()){
          $shop=DB::table('shops')->where('id',$sid)->first();
          if ($shop){
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
               
           if ($ok==1){
             $update=Wishlist::where([['order_id',$oid],['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                 'action'=>'recive',
                ]);
             
           }else{
            return redirect()->route('index');
           }
               return back()->withinput();
          }
          
      }else{

        return redirect()->route('login');
      }
     }
     public function wishlist_recived($sid,$spcn,$oid){

      if(Auth::check()){
          $shop=DB::table('shops')->where('id',$sid)->first();
          if ($shop){
           
             $update=Wishlist::where([['order_id',$oid],['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                 'action'=>'recived',
                ]);
             
               return back()->withinput();
          }
          
      }else{

        return redirect()->route('login');
      }
     }
     

     public function shop_product_booking_payment(Request $request)
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
          $orderaddress=OrderUser::where('user_name',Auth::user()->user_name)->update([    
       'customer_name'=>$request->input('customer_name'),
         'contact_info'=>$request->input('contact_info'),
        'country'=> $request->input('country'),
        'state'=>$request->input('state'),
       'district'=>$request->input('district'),
       'city'=>$request->input('city'),
      'shiping_address'=>$request->input('shiping_address'),
          ]);
          $orderaddress=DB::table('order_users')->where('user_name',Auth::user()->user_name)->first();
          $spcn=$_GET['sp_counter_number'];
          $total = DB::table('wishlists')
                          ->where([['shop_id',$shop->id],['sp_counter_number',$spcn],['action','wish'],['user_name',Auth::user()->user_name]])
                              ->select('user_name',DB::raw('sum(price) as total'))
                ->groupBy('user_name')
                ->get();
          
           return view('pages.order.single-booking-payment',['shop'=>$shop,'orderaddress'=>$orderaddress ,'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists ,'ok'=>$ok ,'payment'=>$_GET['payment'],'spcn'=>$_GET['sp_counter_number'],'total'=>$total]);
         }
         return route('index');
       }else {
         return redirect()->route('login');
       }
      
    }




}
