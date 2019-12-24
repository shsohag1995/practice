<?php

namespace App\Http\Controllers\Shop\PrivateProduct;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class ProductDestroyController extends Controller
{
    
    public function private_product_destroy( $sid , $spcn)
    {

         if (Auth::check()){
               
                  $shop=Shop::find($sid);
                   $product=DB::table('private_products')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->first();
                   if ($shop && $product) {
                     $shopadmin=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
                $orders=DB::table('wishlists')->where([['shop_id',$sid],['sp_counter_number',$spcn],['action','pending']])->get();
                $wishlist=0;
                foreach ($orders as $order) {
                  $wishlist++;
                }
                  if ($wishlist==0) {
                     
                  
                   if ($ok==1){

                     $images=DB::table('private_product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->get();
                     foreach ($images as $image){
                    
                        Storage::delete($image->image);
                     }
                     if ($shop->shop_type=='clothes') {
                         DB::table('private_product_clothes_sizes')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     }elseif ($shop->shop_type=='shoes') {
                         DB::table('private_product_shoe_sizes')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     }
                     DB::table('private_product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     DB::table('private_product_likes')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     DB::table('private_product_comments')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     DB::table('private_product_ratings')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     DB::table('private_product_infos')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     DB::table('private_products')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                       
                   }else{
                    return redirect()->route('index');
                   }
                
                 return back()->withinput();
             }else
             {
                return ('You cancle this product order then delete');
             }
                   }
                 return redirect()->route('index');
       }else{
        return redirect()->route('login');
       }
    }

    public function private_product_image_destroy($sid ,$spcn,$image)
    {

         if (Auth::check()){
                
                  $shop=Shop::find($sid);
                  if ($shop) {
                    $shopadmin=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
                     $img= DB::table('private_product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn],['created_at',$image]])->get();
                  
                   if ($ok==1){
                    foreach ($img as $img) {
                       Storage::delete($img->image);
                    }
                     
                     DB::table('private_product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn],['created_at',$image]])->delete();
                     
                       
                   }else{
                    return redirect()->route('index');
                   }
                
                 return back()->withinput();
                    
                  }
                 
            return redirect()->route('index');
       }else{
        return redirect()->route('login');
       }
    }

public function private_product_clothes_size_destroy($sid ,$spcn,$created_at)
    {

         if (Auth::check()){
                
                  $shop=Shop::find($sid);
                 $shopadmin=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
                    
                  
                   if ($ok==1){
                    
                     DB::table('private_product_clothes_sizes')->where([['shop_id',$sid],['sp_counter_number',$spcn],['created_at',$created_at]])->delete();
                     
                       
                   }else{
                    return redirect()->route('index');
                   }
                
                 return back()->withinput();
            
       }else{
        return redirect()->route('login');
       }
    }

}
