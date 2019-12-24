<?php

namespace App\Http\Controllers\Office;
use App\Model\Shop\Shop;
use App\Model\Order\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class UpdateController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function order_checked($oid){
    	$order=DB::table('orders')->where('id',$oid)->first();

    	if($order && Auth::user()->user_role_id==1){
         
         Order::where('id',$oid)->update([
           
           'action'=>'checked',
         ]);
    	}

        return back()->withinput();
    }

    public function order_cancled($oid){
        $order=DB::table('orders')->where('id',$oid)->first();

        if($order && Auth::user()->user_role_id==1){
         
         Order::where('id',$oid)->update([
           
           'action'=>'cancled',
         ]);
        }
        return back()->withinput();
    }
    public function order_reback($oid){
        $order=DB::table('orders')->where('id',$oid)->first();

        if($order && Auth::user()->user_role_id==1){
         
         Order::where('id',$oid)->update([
           
           'action'=>'pending',
         ]);
        }
        return back()->withinput();
    }

    public function shop_hide($sid){
        $shops=DB::table('shops')->where('id',$sid)->first();

        if($shops && Auth::user()->user_role_id==1){
         
         Shop::where('id',$sid)->update([
           
           'action'=>'Hide',
         ]);
        }
        return back()->withinput();
    }
    public function shop_show($sid){
        $shop=DB::table('shops')->where('id',$sid)->first();

        if($shop && Auth::user()->user_role_id==1){
         
         Shop::where('id',$sid)->update([
           
           'action'=>'Show',
         ]);
        }
        return back()->withinput();
    }
    

}