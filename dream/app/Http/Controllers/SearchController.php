<?php

namespace App\Http\Controllers;
use\App\Model\Shop\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{
   
    public function index()
    {  
     $searchtype=$_GET["searchtype"];
       if ($searchtype=='home') {
           if (Auth::check()) {
             $name='%'.$_GET['name'].'%';
           // dump(Auth::user()->id);
         $uid=Auth::user()->id;
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
         $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
         $products = DB::table('products')
            ->where('title','like', $name)
            ->orderBy('updated_at','desc' )
            ->take(20)->get();
       
        return view('pages.auth.search',['shops'=>$shops,'myshops'=>$myshops ,'connectedshops'=>$connectedshops , 'products'=>$products ,'searchtype'=>$searchtype]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }

       }else{
        if (Auth::check()) {
           $uid=Auth::user()->id;
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
          $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
          if (isset($_GET['name'])) {
                $name='%'.$_GET['name'].'%';
              $allshops = DB::table('shops')->where(
             'name', 'like', $name
             )->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
              return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);
            }else if(isset($_GET['shop'])){
                 $country=$_GET['country'];
                  $state=$_GET['state'];
                   $district=$_GET['district'];
                    $city=$_GET['city'];
                     $shop_type=$_GET['shop_type'];

             $allshops = DB::table('shops')->where([
             ['country', $country],
             ['state', $state],
             ['district', $district],
             ['city', $city],
             ['shop_type', $shop_type ],
             ['action', 'show' ] 
         ])->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->take(10)->get();
             return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype]);

            }else{
                $allshops = DB::table('shops')->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->take(10)->get();
                return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshop ,'searchtype'=>$searchtype]);
            }
        
        }else
        {
            if (isset($_GET['name'])) {
                $name='%'.$_GET['name'].'%';
              $allshops = DB::table('shops')->where(
             'name', 'like', $name
             )->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->take(10)->get();
              return view('search',['allshops'=> $allshops ,'searchtype'=>$searchtype]);
            }else if(isset($_GET['shop'])){
              $country=$_GET['country'];
                  $state=$_GET['state'];
                   $district=$_GET['district'];
                    $city=$_GET['city'];
                     $shop_type=$_GET['shop_type'];
             $allshops = DB::table('shops')->where([
             ['country', $country],
             ['state', $state],
             ['district',   $district],
             ['city',  $city],
             ['shop_type', $shop_type ],
             ['action', 'show' ]
         ])->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->take(10)->get();
             return view('search',['allshops'=> $allshops ,'searchtype'=>$searchtype]);
            }else{
                $allshops = DB::table('shops')->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->take(10)->get();
                return view('search',['allshops'=> $allshops ,'searchtype'=>$searchtype]);
            }
            
           

        }

          }


    }

   

}
