<?php

namespace App\Http\Controllers\Ptr;
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
	public function dashboard($ptrsid){

		return view('pages.ptr.ptrshop');
	}
   public function group($group){

		return view('pages.ptr.ptrproduct');
	}

   public function category($group,$category){

		return view('pages.ptr.ptrproduct');
	}

   public function type($group ,$category,$type){

		return view('pages.ptr.ptrproduct');
	}
   public function product($group ,$category,$type,$product){

		return view('pages.ptr.ptrproductshow');
	}
   public function brand($brand){

		return view('pages.ptr.ptrproductshow');
	}


}