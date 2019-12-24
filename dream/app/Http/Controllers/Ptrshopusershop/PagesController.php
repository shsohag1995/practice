<?php

namespace App\Http\Controllers\Ptrshopusershop;
use App\Model\Ptr\Shop\Ptrshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
      
      public function __construct()
    {
        $this->middleware('auth');
    }
     public function index($sid){

            return view('pages.ptrshopusershop.ptrshop-usershop');
      }
      public function dashboard($sid,$ptrsid){

            return view('pages.ptr.ptrshop');
      }
   public function group($sid,$group){

            return view('pages.ptrshopusershop.ptrproduct');
      }

   public function category($sid,$group,$category){

            return view('pages.ptrshopusershop.ptrproduct');
      }

   public function type($sid,$group ,$category,$type){

            return view('pages.ptrshopusershop.ptrproduct');
      }
   public function product($sid,$group ,$category,$type,$product){

            return view('pages.ptrshopusershop.ptrproductshow');
      }
   public function brand($sid,$ptrsid,$brand){

            return view('pages.ptrshopusershop.ptrproductshow');
      }



}
