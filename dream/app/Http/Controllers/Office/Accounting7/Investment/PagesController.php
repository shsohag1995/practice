<?php

namespace App\Http\Controllers\Office\Accounting7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
	public function dashboard(){

		return view('pages.office.accounting.dashboard');
	}


}