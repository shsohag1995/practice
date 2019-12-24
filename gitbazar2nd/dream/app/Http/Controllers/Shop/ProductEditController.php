<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductEditController extends Controller
{
      

    public function product_edit($sid,$spcn)
    {
        $shop=DB::table('shops')->where('id',$sid)->first();

        if($shop){
            if(Auth::check()){
            
            
            
            $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      
                if($shop->type=="Public"){

                  $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                  $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                    $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                     $product=DB::table('products')->where([['user_id',Auth::user()->id],['sp_counter_number',$spcn]])->first();
                     if ($product && ($product->user_id==Auth::user()->id || $ok==1)) {

                       return view('pages.shop.edit-public-product',['shop'=>$shop , 'ok'=>$ok ,'product'=>$product , 'brands'=>$brands , 'categories'=>$categories,'wishlists'=>$wishlists ]);

                     }
                     return redirect()->route('index');
                    
                 }else{
                       $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                      $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                      $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                     $product=DB::table('private_products')->where([['shop_id',$shop->id],['sp_counter_number',$spcn]])->first();
                     if ( $product && $ok==1) {
                      
                      return view('pages.shop.edit-private-product',['shop'=>$shop , 'ok'=>$ok ,'product'=>$product , 'brands'=>$brands  ,'categories'=>$categories ,'wishlists'=>$wishlists]);

                       }
                       return redirect()->route('index');
                 }
         
        

        }else
        {     
            
             return redirect()->route('login');
        }



        }else{
            return redirect()->route('index');
        }

         
     }
}