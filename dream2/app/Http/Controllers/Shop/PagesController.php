<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
       public function add_product($sid)
    {

         if(Auth::check()){

            $shop= Shop::find($sid);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
            $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      
        return view('pages.shop.add-product',['shop'=>$shop , 'ok'=>$ok ,'brands'=>$brands ,  'categories'=>$categories])->with('success','Store your Product');

        }else
        {     
            return back();

        }

     }

    public function category_show($sid,$category)
    {

         if(Auth::check()){

            $shop= Shop::find($sid);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
            $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$sid ,'category'=>$category]);
            $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      // $products = DB::table('products')->where('shop_id', $id)->orderBy('updated_at', 'desc')->paginate(1);
       //  $products = DB::select('select * from products where shop_id =:id AND category=:category ORDER BY updated_at =:desc',['id'=>$sid ,'category'=>$category ,'desc'=>'desc']);
          $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
        return view('pages.shop.category',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories]);

        }else
        {     
             $shop= Shop::find($sid);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
             $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$sid ,'category'=>$category]);
            // $products = DB::table('products')->where('shop_id', $shop->id)->orderBy('updated_at', 'desc')->paginate(1);
            //$products = DB::select('select * from products where shop_id =:id AND category=:category ORDER BY updated_at =:desc ',['id'=>$sid ,'category'=>$category ,'desc'=>'desc']);
            $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
     return view('pages.shop.category',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'types'=>$types , 'category'=>$category ,'categories'=>$categories]);

        }

     }


     public function type_show($sid,$category,$type)
    {
            

         if(Auth::check()){
           $tpe=$type;
            $shop= Shop::find($sid);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
            $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$sid ,'category'=>$category]);
            $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      // $products = DB::table('products')->where('shop_id', $id)->orderBy('updated_at', 'desc')->paginate(1);
       //  $products = DB::select('select * from products where shop_id =:id AND category=:category ORDER BY updated_at =:desc',['id'=>$sid ,'category'=>$category ,'desc'=>'desc']);
          $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
        return view('pages.shop.category-type',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands , 'types'=>$types , 'category'=>$category ,'categories'=>$categories,'tpe'=>$tpe]);

        }else
        {     $tpe=$type;
             $shop= Shop::find($sid);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
             $types = DB::select('select DISTINCT type from products where shop_id =:id AND category=:category ',['id'=>$sid ,'category'=>$category]);
            // $products = DB::table('products')->where('shop_id', $shop->id)->orderBy('updated_at', 'desc')->paginate(1);
            //$products = DB::select('select * from products where shop_id =:id AND category=:category ORDER BY updated_at =:desc ',['id'=>$sid ,'category'=>$category ,'desc'=>'desc']);
            $products = DB::table('products')->where([['shop_id', $shop->id], ['category', $category],['type', $type],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
     return view('pages.shop.category-type',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'types'=>$types , 'category'=>$category ,'categories'=>$categories ,'tpe'=>$tpe]);

        }

     }


    public function brand_show($sid,$brand)
    {

    	 if(Auth::check()){

            $shop= Shop::find($sid);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$sid]);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
        $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
      //  $products = DB::table('products')->where('shop_id', $id)->orderBy('updated_at', 'desc')->paginate(1);
       //  $products = DB::select('select * from products where shop_id =:id AND brand=:brand  order by updated_at =:desc ',['id'=>$sid  ,'brand'=>$brand ,'desc'=>'desc']);
         $products = DB::table('products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
        return view('pages.shop.brand',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories]);

        }else
        {     
             $shop= Shop::find($sid);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id ',['id'=>$sid]);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$sid]);
            // $products = DB::table('products')->where('shop_id', $shop->id)->orderBy('updated_at', 'desc')->paginate(1);
           // $products = DB::select('select * from products where shop_id =:id AND brand=:brand order by updated_at =:desc ',['id'=>$sid ,'brand'=>$brand ,'desc'=>'desc']);
            $products = DB::table('products')->where([['shop_id', $shop->id], ['brand', $brand],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
     return view('pages.shop.brand',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]);

        }

     }

      public function search($sid)
    {
     if(isset($_GET["value"]) ){

        $value='%'.$_GET['value'].'%';

        if(Auth::check()){
            

            $shop= Shop::find($sid);

            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
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
                $products = DB::table('products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'Show']

         ])->orderBy('updated_at', 'desc')->get();
        
        return view('pages.shop.search',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories]);

        }else
        {     
             $shop= Shop::find($sid);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([
                ['shop_id', $shop->id],
                ['title', 'like', $value],
                ['action', 'Show']

         ])->orderBy('updated_at', 'desc')->get();
           
     return view('pages.shop.search',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]);

        }
        
    }

    }

    


}
