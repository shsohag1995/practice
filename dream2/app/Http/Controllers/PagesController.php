<?php

namespace App\Http\Controllers;
use App\Model\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
   
    public function myshops()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
             $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
        return view('pages.auth.myshops',['shops'=>$shops ,'myshops'=>$myshops]);
        }else
        {
            
            return redirect()->route('login');
        }
    }
    	
    
}
