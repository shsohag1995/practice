<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop;
use App\Model\ShopLike;
use App\Model\ShopComment;
use App\Model\ShopUser;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class StoreController extends Controller
{
    
    protected function store_like_unlike($sid , $confirmed){
       
       if(Auth::check()){
       
        $userid=Auth::user()->id;
        $shoplike = ShopLike::where([['shop_id', $sid], ['user_id',$userid]])->first();
        $shop= Shop::where('id', $sid)->first();
      // dd($shoplike);
        
         if ($shoplike) {

          if(($shoplike->shop_id == $sid)&&($shoplike->user_id == $userid)&&($shoplike->confirmed == $confirmed)){
           
           DB::table('shop_likes')->where([['shop_id', $sid],['user_id', $userid]])->delete();

           if($confirmed==1){
          Shop::where('id', $sid)->update([

                'like' => $shop->like-1,
                
            ]);
        }else{
          Shop::where('id', $sid)->update([

                'unlike' => $shop->unlike-1,
                
                
            ]);
        }
           
            return back()->withInput();
        }else{
        
        ShopLike::where([['shop_id', $sid], ['user_id',$userid]])->update([
                'shop_id' => $sid,
                'user_id' => $userid,
                'confirmed' => $confirmed,
                
            ]);
        if($confirmed==1){
          Shop::where('id', $sid)->update([

                'like' => $shop->like+1,
                'unlike' => $shop->unlike-1,
                
            ]);
        }else{
          Shop::where('id', $sid)->update([

                'like' => $shop->like-1,
                'unlike' => $shop->unlike+1,
                
            ]);
        }
        
       
        return back()->withInput();

        }
          
        }else{

           $like = ShopLike::create([
                'shop_id' => $sid,
                'user_id' => Auth::user()->id,
                'confirmed' => $confirmed,
                
            ]);

           if($confirmed==1){
          Shop::where('id', $sid)->update([

                'like' => $shop->like+1,
                
            ]);
        }else{
          Shop::where('id', $sid)->update([

                'unlike' => $shop->unlike+1,
                
                
            ]);
        }
            return back()->withInput();


        }
           

              

        }

        return redirect()->route('login');
        
      }

 protected function store_shop_user($sid ){
       
       if(Auth::check()){

         $userid=Auth::user()->id;
        $shopuser = ShopUser::where([['shop_id', $sid], ['user_id',$userid]])->first();
        $shop= Shop::where('id', $sid)->first();
      // dd($shoplike);
        
         if ($shopuser) {

           
           DB::table('shop_users')->where([['shop_id', $sid],['user_id', $userid]])->delete();

           Shop::where('id', $sid)->update([

                'connected' => $shop->connected-1,
                
                
            ]);
            
            return back()->withInput();
          
        }else{

           ShopUser::create([
                'shop_id' => $sid,
                'user_id' => Auth::user()->id,
                'shop_name' => $shop->name,
                'shop_slug'=>$shop->slug,
            ]);
           
           Shop::where('id', $sid)->update([

                'connected' => $shop->connected+1,
                
                
            ]);
          
            return back()->withInput();


        }
           
               

        }else{
          return redirect()->route('login');
        }
        
        
      }

 protected function store_shop_comment($sid , $confirmed){
       
       if(Auth::check()){
                $like = ShopComment::create([
                'shop_id' => $sid,
                'user_id' => Auth::user()->id,
                'confirmed' => $confirmed,
                
            ]);
            if($like){

                return back()->withInput();
                
            }

        }
        return redirect()->route('login');
        
      }





}
