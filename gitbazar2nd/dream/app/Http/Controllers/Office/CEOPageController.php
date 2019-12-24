<?php

namespace App\Http\Controllers\Office;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CEOPageController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
              $date=date("Y-m-d");
               $date=$date.'%';
          $neworders=DB::table('orders')->where([['action','pending'],['created_at','like',$date]])->get();
          $pendingorders=DB::table('orders')->where('action','pending')->get();
          $completeorders=DB::table('orders')->where([['action','recived'],['updated_at','like',$date]])->get();
          $checkedorders=DB::table('orders')->where([['action','checked'],['updated_at','like',$date]])->get();
          $cancledorders=DB::table('orders')->where([['action','cancled'],['updated_at','like',$date]])->get();        
          $ptrshops=DB::table('ptrshops')->get();
          $shops=DB::table('shops')->orderBy('created_at','desc')->get();
          $pubshops=DB::table('shops')->where('type','Public')->orderBy('created_at','desc')->get();
          $users=DB::table('users')->get();
          $employers=DB::table('employers')->get();
          $pubproducts=DB::table('products')->orderBy('created_at','desc')->get();
          $ptrproducts=DB::table('ptrproducts')->orderBy('created_at','desc')->get();
          $priproducts=DB::table('private_products')->orderBy('created_at','desc')->get();
             return view('pages.ceo.dashboard',['ptrshops'=>$ptrshops,'shops'=>$shops,'users'=>$users,'employers'=>$employers,'neworders'=>$neworders,'pendingorders'=>$pendingorders,'completeorders'=>$completeorders,'pubproducts'=>$pubproducts,'ptrproducts'=>$ptrproducts,'priproducts'=>$priproducts,'pubshops'=>$pubshops ,'checkedorders'=>$checkedorders,'cancledorders'=>$cancledorders]);
       }else
       {
       
        return redirect()->route('index');
        }
     
    }

    public function ptrshops()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
              $ptrshops=DB::table('ptrshops')->paginate(15);
            return view('pages.ceo.ptrshops',['shops'=>$ptrshops]);
       }else
       {
       
        return redirect()->route('index');
        }
      }
     public function ptrproducts()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
            $ptrproducts=DB::table('ptrproducts')->orderBy('created_at','desc')->paginate(15);
            return view('pages.ceo.ptrproducts',['ptrproducts'=>$ptrproducts]);
       }else
       {
       
        return redirect()->route('index');
        }

     
    }

    public function shops()
    {
       if(Auth::check()&&(Auth::user()->user_role_id == 1)){

            $shops=DB::table('shops')->orderBy('created_at','desc')->paginate(15);
            return view('pages.ceo.shops',['shops'=>$shops]);
       }else
       {
       
        return redirect()->route('index');
        }

     
     
    }

    public function priproducts()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
           
          $priproducts=DB::table('private_products')->orderBy('created_at','desc')->paginate(15);
            return view('pages.ceo.private-products',['priproducts'=>$priproducts]);
       }else
       {
       
        return redirect()->route('index');
        }
      }
        public function pubshops()
       {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
            $pubshops=DB::table('shops')->where('type','Public')->orderBy('created_at','desc')->paginate(15);
            return view('pages.ceo.shops',['shops'=>$pubshops]);
       }else
       {
       
        return redirect()->route('index');
        }
       }
        public function pubproducts()
       {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
          $pubproducts=DB::table('products')->orderBy('created_at','desc')->paginate(15);
          
            return view('pages.ceo.pubproducts',['priproducts'=>$pubproducts]);
       }else
       {
       
        return redirect()->route('index');
        }
      }
    public function workers()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
              
          $employers=DB::table('employers')->paginate(15);
              return view('pages.ceo.workers',['employers'=>$employers]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }

    public function users()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
               $users=DB::table('users')->paginate(15);
          
              return view('pages.ceo.users',['users'=>$users]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }
    public function neworders()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
              $date=date("Y-m-d");
               $date=$date.'%';
          $neworders=DB::table('orders')->where([['action','pending'],['created_at','like',$date]])->paginate(15);
          
              return view('pages.ceo.orders',['orders'=>$neworders]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }
    public function pendingorders()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
             
          $pendingorders=DB::table('orders')->where('action','pending')->paginate(15);
          
              return view('pages.ceo.orders',['orders'=>$pendingorders]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }
    public function completedorders()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
           $date=date("Y-m-d");
               $date=$date.'%';
          $completeorders=DB::table('orders')->where([['action','recived'],['updated_at','like',$date]])->paginate(15);
              return view('pages.ceo.orders',['orders'=>$completeorders]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }

    public function checkedorders()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
           $date=date("Y-m-d");
               $date=$date.'%';
          $completeorders=DB::table('orders')->where([['action','checked'],['updated_at','like',$date]])->paginate(15);
              return view('pages.ceo.orders',['orders'=>$completeorders]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
    }

    public function cancledorders()
    {
        if(Auth::check()&&(Auth::user()->user_role_id == 1)){
           $date=date("Y-m-d");
               $date=$date.'%';
          $completeorders=DB::table('orders')->where([['action','cancled'],['updated_at','like',$date]])->paginate(15);
              return view('pages.ceo.orders',['orders'=>$completeorders]);
            
       }else
       {
       
        return redirect()->route('index');
        }
     
     
    }


    
}
