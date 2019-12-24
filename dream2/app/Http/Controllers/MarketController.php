<?php

namespace App\Http\Controllers;
use\App\Model\Shop;
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
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $allshops = DB::table('shops')->orderBy('star','asc' && 'connected','asc' && 'like','asc' && 'unlike','desc' )->paginate(5);
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
        return view('market',['shops'=>$shops , 'allshops'=>$allshops ,'myshops'=>$myshops]);
        }else
        {
            $allshops = DB::table('shops')->orderBy('star','asc'&& 'connected','asc' && 'like','asc'  && 'unlike','desc' )->paginate(5);
           
            return view('market',['allshops'=>$allshops]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
