<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CEOPageController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
              $date=date("Y-m-d");
               $date=$date.'%';
          $neworders=DB::table('orders')->where([['action','pending'],['orders.created_at','like',$date]])->get();
          $pendingorders=DB::table('orders')->where('action','pending')->get();
          $completeorders=DB::table('orders')->where([['action','recived'],['orders.created_at','like',$date]])->get();
                
          $ptrshops=DB::table('ptrshops')->get();
          $shops=DB::table('shops')->orderBy('created_at','desc')->get();
          $users=DB::table('users')->get();
          $employers=DB::table('employers')->get();
             return view('pages.ceo.dashboard',['ptrshops'=>$ptrshops,'shops'=>$shops,'users'=>$users,'employers'=>$employers,'neworders'=>$neworders,'pendingorders'=>$pendingorders,'completeorders'=>$completeorders]);
       }else
       {
       
        return redirect()->route('index');
        }
     
    }

    public function ptrshops()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){

            return view('pages.ceo.ptrshops');
       }else
       {
       
        return redirect()->route('index');
        }

     

     
    }

    public function shops()
    {
       if(Auth::check()&&(Auth::user()->user_role_id == 1)){


            return view('pages.ceo.shops');
       }else
       {
       
        return redirect()->route('index');
        }

     
     
    }

    public function workers()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){

              return view('pages.ceo.workers');
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }



    
}
