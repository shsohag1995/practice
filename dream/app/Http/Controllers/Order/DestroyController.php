<?php

namespace App\Http\Controllers\Order;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DestroyController extends Controller
{
   
     public function wishlist_destroy( $sid,$spcn)
    {
        if (Auth::check()) {
            $wish='wish';
             DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$sid],['sp_counter_number',$spcn],['action' , $wish]])->delete();
             return back()->withinput();
        }else{
            return view('auth.login');
        }
       
    }
}
