<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CEOPageController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
          
             return view('pages.ceo.dashboard');
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
