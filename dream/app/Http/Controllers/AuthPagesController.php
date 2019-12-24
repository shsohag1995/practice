<?php

namespace App\Http\Controllers;
use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AuthPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        return view('pages.auth.dashboard');
    }
    public function diposit(){

        return view('pages.auth.diposit');
    }
    public function withdrow(){

        return view('pages.auth.withdrow');
    }
    public function shoping_blance(){

        return view('pages.auth.shoping-blance');
    }
    public function investment(){

        return view('pages.auth.investment');
    }
    public function pending_investment(){

        return view('pages.auth.pending-investment');
    }
    public function investment_profit(){

        return view('pages.auth.investment-profit');
    }
    public function make_investment(){

        return view('pages.auth.make-investment');
    }

    public function estemated_earn(){

        return view('pages.auth.estemated-earn');
    }
    
}
