<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
      

    public function category_show($sid,$category)
    {
        $shop=DB::table('shops')->where('slug',$sid)->first();

        if($shop){
            if(Auth::check()){
            
            //$shop= Shop::find($sid);
            
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
                      $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
                       $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                     $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                     return view('pages.shop.category',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories,'wishlists'=>$wishlists ]);
                 }else{
                       $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                      $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                      $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                      $types = DB::select('select DISTINCT type from private_products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
                     $products = DB::table('private_products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                      return view('pages.shop.category',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories ,'wishlists'=>$wishlists]);

                 }
         
        

        }else
        {     
            
             
             if($shop->type=="Public"){
                  $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                  $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                  $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
            
                $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
            }else{
                $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                $types = DB::select('select DISTINCT type from private_products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
            
                $products = DB::table('private_products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
            }
            
     return view('pages.shop.category',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'types'=>$types , 'category'=>$category ,'categories'=>$categories]);

        }



        }else{
            return redirect()->route('index');
        }

         
     }


     public function type_show($sid,$category,$type)
    {
             $shop=DB::table('shops')->where('slug',$sid)->first();
             if($shop){
                if(Auth::check()){
           $tpe=$type;
            //$shop= Shop::find($sid);
            
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
           if ($shop->type=="Public"){
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id ',['id'=>$shop->id]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id',['id'=>$shop->id]);
            $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
             $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
              $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
             return view('pages.shop.category-type',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories,'tpe'=>$tpe ,'wishlists'=>$wishlists]);
           }else{
             $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
               $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id ',['id'=>$shop->id]);
            $categories = DB::select('select DISTINCT category from private_products where shop_id =:id',['id'=>$shop->id]);
            $types = DB::select('select DISTINCT type from private_products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
             $products = DB::table('private_products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
             return view('pages.shop.category-type',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories,'tpe'=>$tpe,'wishlists'=>$wishlists]);

           }
          
        

        }else
        {     $tpe=$type;
              if($shop->type=="Public"){
                $brands = DB::select('select DISTINCT brand from products where shop_id =:id',['id'=>$shop->id]);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id',['id'=>$shop->id]);
             $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
            
            $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);

              }else{
                $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id',['id'=>$shop->id]);
             $categories = DB::select('select DISTINCT category from private_products where shop_id =:id',['id'=>$shop->id]);
             $types = DB::select('select DISTINCT type from private_products where shop_id =:id AND category=:category ',['id'=>$shop->id ,'category'=>$category]);
            
            $products = DB::table('private_products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
              }
             
     return view('pages.shop.category-type',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'types'=>$types , 'category'=>$category ,'categories'=>$categories ,'tpe'=>$tpe]);

        }

             }else{
                return redirect()->route('index');
             }

         

     }


    public function brand_show($sid,$brand)
    {
        $shop=DB::table('shops')->where('slug',$sid)->first();
             if($shop){

                if(Auth::check()){

            //$shop= Shop::find($sid);
            
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
                if ($shop->type=="Public") {
                    $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                    $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                   $products = DB::table('products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                    $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                   return view('pages.shop.brand',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists]);
                }else{
                     $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                     $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                    $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                   $products = DB::table('private_products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                   return view('pages.shop.brand',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories,'wishlists'=>$wishlists]);
                }
      
         
        

        }else
        {     
            if($shop->type=="Public"){
                $brands = DB::select('select DISTINCT brand from products where shop_id =:id ',['id'=>$shop->id]);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $products = DB::table('products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
        }else{
            $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id ',['id'=>$shop->id]);
             $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
            $products = DB::table('private_products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
        }
             
     return view('pages.shop.brand',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]);

        }

             }else{
                return redirect()->route('index');
             }

    	 

     }

      public function search($sid)
    {
        $shop=DB::table('shops')->where('slug',$sid)->first();
             if($shop){
                if(isset($_GET["value"]) ){

        $value='%'.$_GET['value'].'%';

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
               
                if ($shop->type=='Public') {
                    $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                   $products = DB::table('products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'show']

         ])->orderBy('updated_at', 'desc')->get();
                    $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
              return view('pages.shop.search',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists]);
                   
                }else{
                     $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                    $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                  $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                   $products = DB::table('private_products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'show']

         ])->orderBy('updated_at', 'desc')->get();
                   return view('pages.shop.search',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists]);

                }
        
        

        }else
        {     
           if ($shop->type=='Public') {
               $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'show']
         ])->orderBy('updated_at', 'desc')->get();
           }else{
                
                $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('private_products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'show']
         ])->orderBy('updated_at', 'desc')->get();
           }
             
     return view('pages.shop.search',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]);

        }


    }
        
    }
             

    }

    


}
