<?php

namespace App\Http\Controllers\Ptr\Manage;
use App\Model\Ptr\Shop\Ptrshop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function dashboard(){

		return view('pages.office.accounting.dashboard');
	}


}