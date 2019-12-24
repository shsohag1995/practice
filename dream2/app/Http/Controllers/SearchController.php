<?php

namespace App\Http\Controllers;
use\App\Model\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
           
         $shops=Shop::where('user_id',Auth::user()->id)->get();
         $myshops=DB::table('shop_users')->where('user_id',Auth::user()->id)->get();
          if (isset($_GET['name'])) {
                $name='%'.$_GET['name'].'%';
              $allshops = DB::table('shops')->where(
             'name', 'like', $name
             )->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
              return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops]);
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
             ['shop_type', $shop_type ]
                
         ])->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
             return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops]);

            }else{
                $allshops = DB::table('shops')->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
                return view('search',['shops'=>$shops , 'allshops'=> $allshops ,'myshops'=>$myshops]);
            }
        
        }else
        {
            if (isset($_GET['name'])) {
                $name='%'.$_GET['name'].'%';
              $allshops = DB::table('shops')->where(
             'name', 'like', $name
             )->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
              return view('search',['allshops'=> $allshops]);
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
             ['shop_type', $shop_type ]
         ])->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
             return view('search',['allshops'=> $allshops]);
            }else{
                $allshops = DB::table('shops')->orderBy('star','asc' && 'like','asc' && 'connected','asc' && 'unlike','desc' )->get();
                return view('search',['allshops'=> $allshops]);
            }
            
           
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
