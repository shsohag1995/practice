<?php
namespace App\Http\Controllers\Shop\Resources;

use App\Model\Shop;
use App\Model\ShopAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShopAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($sid,$id)
    {

        if($sid==$id){
            $shop= Shop::find($id);
            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
              $ok=0;
            if(Auth::check()){
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
            }
            if($shop){
                $address=DB::table('shop_addresses')->where('shop_id',$id)->get();
               return view('pages.shop.location',['shop'=>$shop ,'address'=>$address ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok]);
            } else {

                 return redirect()->route('index');
          }
          
         }else {
            return redirect()->route('index');
          }

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sid,$id)
    {
        if(Auth::check()){
             if($sid==$id){
            $shop= Shop::find($id);
            if($shop&& $shop->user_id==Auth::user()->id){
                $address=DB::table('shop_addresses')->where('shop_id',$id)->get();
               return view('pages.shopmanage.editlocation',array('shop' =>$shop,'address'=>$address ));
            }else {

                 return redirect()->route('index');
          }
          
         }else {
            return redirect()->route('index');
          }
      }else
      {
        return redirect()->route('login');
      }
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sid,$id)
    {
        $shop=Shop::find($id);
        if ($shop->user_id==Auth::user()->id){

            $shopaddressUpdate=ShopAddress::where('shop_id',$sid)->update([
          
          'visitcost'=>$request->input('visitcost'),
           'maplink'=>$request->input('maplink'),
        ]);
        
        //redirect 

        return back()->withInput();
            
        }
        return redirect()->route('index');
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
