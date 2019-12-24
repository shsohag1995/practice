<?php

namespace App\Http\Controllers\Shop\Manage;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ShopManageEditPagesController extends Controller
{

  public function address($sid)
    {
        if(Auth::check()){
            $shop= Shop::find($sid);
            if($shop){

                if($shop&& $shop->user_id==Auth::user()->id){
                $address=DB::table('shop_addresses')->where('shop_id',$sid)->get();
               return view('pages.shopmanage.editlocation',array('shop' =>$shop,'address'=>$address ));
            }else {

                 return redirect()->route('index');
          }
          
            }else{

                return redirect()->route('index');

            } 
         
      }else
      {
        return redirect()->route('login');
      }
       
    }

    public function contact($sid)
    {
        if(Auth::check()){
            $shop= Shop::find($sid);
            if($shop){

                if($shop&& $shop->user_id==Auth::user()->id){
                $contact=DB::table('shop_contacts')->where('shop_id',$sid)->get();
               return view('pages.shopmanage.editcontact',array('shop' =>$shop,'contact'=>$contact ));
            }else {

                 return redirect()->route('index');
          }
          
            }else{

                return redirect()->route('index');

            }
            
         
      }else
      {
        return redirect()->route('login');
      }
       
    }

    public function notice($sid)
    {
        if(Auth::check()){
            $shop= Shop::find($sid);
            if($shop){

                if($shop&& $shop->user_id==Auth::user()->id){
                $notice=DB::table('shop_notices')->where('shop_id',$sid)->get();
               return view('pages.shopmanage.editnotice',array('shop' =>$shop,'notice'=>$notice ));
            }else {

                 return redirect()->route('index');
          }
          
            }else{

                return redirect()->route('index');

            }
            
         
      }else
      {
        return redirect()->route('login');
      }
       
    }





 }
