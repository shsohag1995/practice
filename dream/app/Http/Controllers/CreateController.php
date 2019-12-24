<?php

namespace App\Http\Controllers;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CreateController extends Controller
{

    

    public function shop_create()
    {
        $searchtype='create';
        if (Auth::check()) {
            $uid=Auth::user()->id;
           if (Auth::user()->type=='Verified') {
         $shops=Shop::where('user_id',Auth::user()->id)->get();
             $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
               $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
        return view('pages.auth.create_shop',['shops'=>$shops ,'myshops'=>$myshops  ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);
              }else{
                return redirect()->route('verification.index');
              }
        }else
        {
            
            return redirect()->route('login');
        }
        
    }
    
    public function shoptype_create()
    {  
        if(Auth::check()&&Auth::user()->user_role_id==1){
         $types=DB::table('shop_types')->get();
         $roles=DB::table('user_roles')->get();
           return view('pages.ceo.shoptype',['types'=>$types,'roles'=>$roles ]);
        }else{
            return redirect()->route('index');
        }
     
    }

    public function userrole_create()
    {
        if(Auth::check()&&Auth::user()->user_role_id==1){
         $roles=DB::table('user_roles')->get();
           return view('pages.ceo.userrole',['roles'=>$roles]);
        }else{
            return redirect()->route('index');
        }
      

    }

   /*  public function public_create($id)
    {
        $searchtype='publiccreate';
        if(Auth::check())
        {
            $uid=Auth::user()->id;
            $shop= Shop::find($id);
            $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
              $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
            if($shop->type=='Public'){
                return view('pages.auth.addproduct',['shop'=>$shop ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype])->with('success','Store A new Product');;
            }else
               {
                return redirect()->route('index');
               }
        }else{
            return redirect()->route('login');
        }
    }
    */
    
}
