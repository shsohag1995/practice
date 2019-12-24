<?php

namespace App\Http\Controllers;
use\App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $searchtype='market';
        if (Auth::check()) {
           // dump(Auth::user()->id);
          $uid=Auth::user()->id;
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $allshops = DB::table('shops')->where('action','Show')->orderBy('star','asc' && 'connected','asc' && 'like','asc' && 'unlike','desc' )->paginate(10);
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
           $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
          // dd($connectedshops);
          $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country')
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
        return view('indexnew',['shops'=>$shops , 'allshops'=>$allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype,'countries'=>$countries ]);
        }else
        {
            $allshops = DB::table('shops')->where('action','Show')->orderBy('star','asc'&& 'connected','asc' && 'like','asc'  && 'unlike','desc' )->paginate(10);
           // $countries=DB::table('cities')->groupBy('country')->get();
            $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country',DB::raw('count(*) as total'))
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
                
            return view('indexnew',['allshops'=>$allshops,'countries'=>$countries ]);
        }
        
    }
    public function hotels()
    {
       $searchtype='market';
        if (Auth::check()) {
           // dump(Auth::user()->id);
          $uid=Auth::user()->id;
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $allshops = DB::table('shops')->where([['shop_type','hotel'],['action','Show']])->orderBy('star','asc' && 'connected','asc' && 'like','asc' && 'unlike','desc' )->paginate(10);
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
           $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
          // dd($connectedshops);
          $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country')
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
        return view('indexnew',['shops'=>$shops , 'allshops'=>$allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype,'countries'=>$countries ]);
        }else
        {
            $allshops = DB::table('shops')->where([['shop_type','hotel'],['action','Show']])->orderBy('star','asc'&& 'connected','asc' && 'like','asc'  && 'unlike','desc' )->paginate(10);
           // $countries=DB::table('cities')->groupBy('country')->get();
            $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country',DB::raw('count(*) as total'))
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
                
            return view('indexnew',['allshops'=>$allshops,'countries'=>$countries ]);
        }

        
    }
    public function shop()
    {
       $searchtype='market';
        if (Auth::check()) {
           // dump(Auth::user()->id);
          $uid=Auth::user()->id;
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $allshops = DB::table('shops')->where('action','Show')->orderBy('star','asc' && 'connected','asc' && 'like','asc' && 'unlike','desc' )->paginate(10);
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
           $connectedshops=DB::table('shop_admins')->where('user_id',$uid)->get();
          // dd($connectedshops);
          $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country')
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
        return view('market',['shops'=>$shops , 'allshops'=>$allshops ,'myshops'=>$myshops ,'connectedshops'=>$connectedshops ,'searchtype'=>$searchtype,'countries'=>$countries ]);
        }else
        {
            $allshops = DB::table('shops')->where('action','Show')->orderBy('star','asc'&& 'connected','asc' && 'like','asc'  && 'unlike','desc' )->paginate(10);
           // $countries=DB::table('cities')->groupBy('country')->get();
            $countries = DB::table('cities')
           // ->where([['wishlists.shop_id',$shop->id],['orders.created_at','like',$date]])
               ->select('country',DB::raw('count(*) as total'))
                ->groupBy('country')
                ->orderBy('country','asc')
                ->get();
                
            return view('market',['allshops'=>$allshops,'countries'=>$countries ]);
        }
        
    }

    public function fetch(Request $request){
            $select=$request->get('select');
            $value=$request->get('value');
            $dependent=$request->get('dependent');
            $data =  DB::table('cities')
               ->where($select ,$value)
              // ->select($dependent)
                ->groupBy($dependent)
               // ->orderBy($dependent,'asc')
                ->get();
            $output = '<option value="">Select '.ucfirst($dependent).'</option>';
            foreach ($data as $row ) {
              $output.= '<option value ="'.$row->$dependent.'">'.$row->dependent.'</option>';
            }

            echo $output;
    }
}
