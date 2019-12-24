<?php

namespace App\Http\Controllers;
use App\Model\Shop\shop;
use App\Model\Shop\ShopType;
use App\Model\Shop\ShopUser;
use App\Model\UserRole;
use App\Model\City;
use App\Model\Shop\ShopAddress;
use App\Model\Shop\ShopNotice;
use App\Model\Shop\ShopContact;
use App\Model\Shop\ShopAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class StoreController1 extends Controller
{
    
    
      
      protected function shop_store(Request $request)
    {

        if(Auth::check()){
         $validator = Validator::make($request->all(), [
            'country'=>'required',
            'state'=>'required',
            'district'=>'required',
            'city'=>'required',
            'market'=>'required',
            'name' => 'required|unique:shops|max:255',
            'shop_type' =>'required',
            
                ]);
                $shopname=strtolower($_POST["name"]);
                  $slug ='';
                  $patterns=array();
                  $patterns[0]='/ /';
                  $patterns[1]='/ /';
                  $replacement=array();
                  $replacement[0]='-';
                  $replacement[1]='-';
                  $slug=preg_replace($patterns, $replacement,  $shopname);
                 // $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["name"])));
                   //$slug2 = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["shop_type"])));

                $shop = Shop::create([

                 'user_name'=>Auth::user()->user_name ,
                 'user_id' => Auth::user()->id ,
                 'creator_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $shopname,
                
                'slug'=>$slug ,
                'shop_type'=> $request->input('shop_type'),
            
            ]);

                if ($shop) {
                  $shoplink='/shop/'.$slug;
                  return redirect($shoplink);
                }else{
                  return back()->withinput();
                }
        }
                 
        return redirect()->route('login');
    }




}