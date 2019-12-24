<?php

namespace App\Http\Controllers;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function blank(){

        return view('blank');
    }
    public function myshops()
    {
        $searchtype='myshops';
        if (Auth::check()) {
           // dump(Auth::user()->id);
         $uid=Auth::user()->id;
        //  $shops=Shop::where('user_id',Auth::user()->id)->get();
             $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
             $allshops = DB::table('shop_admins')
            ->join('shops', 'shop_admins.shop_id', '=', 'shops.id')
            ->where('shop_admins.user_id', $uid)
            ->orderBy('shop_admins.created_at','desc')
            ->paginate(10);
              $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
        return view('pages.auth.myshops',['allshops'=>$allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);
        }else
        {
            
            return redirect()->route('login');
        }
    }
    	
    public function shops()
    {
         $searchtype='shops';
        if (Auth::check()) {
           // dump(Auth::user()->id);
         $uid=Auth::user()->id;
        // $shops=Shop::where('user_id',Auth::user()->id)->get();
            $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
             $allshops = DB::table('shop_users')
            ->join('shops', 'shop_users.shop_id', '=', 'shops.id')
            ->where('shop_users.user_id', $uid)
            ->orderBy('shop_users.created_at','desc' )
            ->paginate(10);
        
              $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
        return view('pages.auth.myshops',['allshops'=>$allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);
        }else
        {
            
            return redirect()->route('login');
        }
    }

    public function contact()
    {
        
        if (Auth::check()) {
           // dump(Auth::user()->id);
         $searchtype='market';
        
            $uid=Auth::user()->id;
        
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();

        return view('contact',['myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);
         
        }else
        {
            
             return view('contact');
            
        }
    }

   
    
}
