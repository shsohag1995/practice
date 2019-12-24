<?php

namespace App\Http\Controllers\Product;
use App\Model\Shop\shop;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchtype='home';
        
        
         $products = DB::table('private_products')
            ->orderBy('updated_at','desc' )
            ->paginate(30);
        $categorytypes=DB::table('private_products')
        ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                ->orderBy('category','asc')
                ->get();
                
         $categories=DB::table('private_products')
        ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
                ->get(); 
         $brands=DB::table('private_products')
        ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
                ->get(); 
        if(Auth::check()){
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
           $connectedshops=DB::table('shop_admins')->where('user_id',Auth::user()->id)->get();
              
        return view('gitbazar.product.pages.index',['products'=>$products ,'myshops'=>$myshops,'connectedshops'=>$connectedshops,'categories'=>$categories,'brands'=>$brands, 'categorytypes'=>$categorytypes,'searchtype'=>$searchtype]);
        }
        return view('gitbazar.product.pages.index',['products'=>$products ,'categories'=>$categories,'brands'=>$brands, 'categorytypes'=>$categorytypes,'searchtype'=>$searchtype]);

    }

    public function category($category)
    {
        $searchtype='home';
        
        
         $products = DB::table('private_products')
             ->where('category',$category)
            ->orderBy('updated_at','desc' )
            ->paginate(30);
        $categorytypes=DB::table('private_products')
        ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                ->orderBy('category','asc')
                ->get();
                
         $categories=DB::table('private_products')
        ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
                ->get(); 
         $brands=DB::table('private_products')
        ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
                ->get(); 
        if(Auth::check()){
           $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
           $connectedshops=DB::table('shop_admins')->where('user_id',Auth::user()->id)->get();
              
        return view('gitbazar.product.pages.index',['products'=>$products ,'categories'=>$categories,'brands'=>$brands,'myshops'=>$myshops,'connectedshops'=>$connectedshops, 'categorytypes'=>$categorytypes,'searchtype'=>$searchtype]);
        }
        return view('gitbazar.product.pages.index',['products'=>$products ,'categories'=>$categories,'brands'=>$brands, 'categorytypes'=>$categorytypes,'searchtype'=>$searchtype]);
    }

    public function type($category ,$type)
    {
        $searchtype='home';
        
        
         $products = DB::table('private_products')
            ->where([['category',$category],['type',$type]])
            ->orderBy('updated_at','desc' )
            ->paginate(30);
        $categorytypes=DB::table('private_products')
        ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                ->orderBy('category','asc')
                ->get();
                
         $categories=DB::table('private_products')
        ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
                ->get(); 
         $brands=DB::table('private_products')
        ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
                ->get(); 
                if(Auth::check()){
                    $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
               $connectedshops=DB::table('shop_admins')->where('user_id',Auth::user()->id)->get();

                 return view('gitbazar.product.pages.index',['products'=>$products ,'categories'=>$categories,'brands'=>$brands, 'categorytypes'=>$categorytypes,'myshops'=>$myshops,'connectedshops'=>$connectedshops,'searchtype'=>$searchtype]);
        
                }

                return view('gitbazar.product.pages.index',['products'=>$products ,'categories'=>$categories,'brands'=>$brands, 'categorytypes'=>$categorytypes,'searchtype'=>$searchtype]);
        
         
              
        
    }

    
}
