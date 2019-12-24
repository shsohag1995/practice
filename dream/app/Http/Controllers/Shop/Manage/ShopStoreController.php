<?php

namespace App\Http\Controllers\Shop\Manage;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ShopStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
                return view('pages.shopmanage.dashboard',['shop'=>$shop ,'ok'=>$ok ]);
               
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

   
}
