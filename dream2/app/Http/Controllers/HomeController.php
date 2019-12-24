<?php

namespace App\Http\Controllers;
use App\Model\shop;
use App\Model\ShopUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.home',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function bakery()
    {
        if (Auth::check()) {
           
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.bakery',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function book()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.book',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function butcher()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.butcher',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function clothes()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.clothes',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function drugs()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.drugs',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function fish()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.fish',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function grocery()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.grocery',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

   public function hotel()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.hotel',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }

    public function restaurent()
    {
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=ShopUser::where('user_id',Auth::user()->id)->get();

        return view('pages.auth.restaurent',['shops'=>$shops,'myshops'=>$myshops]);
        }else
        {
            return view('auth.login');
            //return redirect()->route('login');
        }
    }


}
