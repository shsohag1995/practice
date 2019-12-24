<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductCreatePagesController extends Controller
{
	 public function public_product($sid)
    {
        $shop=DB::table('shops')->where('slug',$sid)->first();
         if($shop){

         if(Auth::check()){
            
             $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin){
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      
        return view('pages.shop.create-public-product',['shop'=>$shop , 'ok'=>$ok ,'brands'=>$brands ,  'categories'=>$categories ,'wishlists'=>$wishlists])->with('success','Store your Product');

        }else
        {     
           return redirect()->route('login');

        }
    }else{
        return redirect()->route('index');
    }

     }

    
public function private_product($sid)
    {
        $shop=DB::table('shops')->where('id',$sid)->first();
         if($shop){

         if(Auth::check()){
            
            
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
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
                if($ok==1){

                     return view('pages.shop.create-private-product',['shop'=>$shop , 'ok'=>$ok ,'brands'=>$brands ,  'categories'=>$categories])->with('success','Store your Product');

                }else{
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