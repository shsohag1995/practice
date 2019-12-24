<?php

namespace App\Http\Controllers\Shop\PublicProduct;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class DestroyController extends Controller
{
    
    public function public_product_destroy($sid ,$spcn)
    {

         if (Auth::check()){
                
                  $shop=Shop::find($sid);
                   $product= DB::table('products')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->first();
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
                     
                 
                   if ($ok==1 ||$product->user_id==Auth::user()->id){

                     $images=DB::table('product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->get();
                     foreach ($images as $image){
                    
                        Storage::delete($image->image);
                     }
                     
                     DB::table('product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                     
                     DB::table('products')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->delete();
                       
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

    public function public_product_image_destroy($sid ,$spcn,$image)
    {

         if (Auth::check()){
                
                  $shop=Shop::find($sid);
                   $product= DB::table('products')->where([['shop_id',$sid],['sp_counter_number',$spcn]])->first();
                  if ($shop &&$product) {

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
                     $img= DB::table('product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn],['created_at',$image]])->get();
                  
                   if ($ok==1||$product->user_id==Auth::user()->id){
                    foreach ($img as $img) {
                       Storage::delete($img->image);
                    }
                     
                     DB::table('product_images')->where([['shop_id',$sid],['sp_counter_number',$spcn],['created_at',$image]])->delete();
                     
                       
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


}
