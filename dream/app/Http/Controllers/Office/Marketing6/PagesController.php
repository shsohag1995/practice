<?php

namespace App\Http\Controllers\Office\Marketing6;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function dashboard(){

		return view('pages.office.marketing.dashboard');
	}


}