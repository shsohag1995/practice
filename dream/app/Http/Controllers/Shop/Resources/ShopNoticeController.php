<?php

namespace App\Http\Controllers\Shop\Resources;
use App\Model\Shop;
use App\Model\ShopNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShopNoticeController extends Controller
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
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$id]);
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
            
            if($shop ){
                $notice=DB::table('shop_notices')->where('shop_id',$id)->get();
               return view('pages.shop.notice',['shop'=>$shop ,'notice'=>$notice , 'brands'=>$brands,'categories'=>$categories ,'ok'=>$ok]);
            }else {

                 return redirect()->route('index');
          }
          
         }else {
            return redirect()->route('index');
          }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sid,$id)
    {
        if (Auth::check()) {
        if($sid==$id){
            $shop= Shop::find($id);
          
            if($shop && $shop->user_id==Auth::user()->id){
                $notice=DB::table('shop_notices')->where('shop_id',$id)->get();
                
               return view('pages.shopmanage.editnotice',array('shop' =>$shop,'notice'=>$notice ));
            }else {

                 return redirect()->route('index');
          }
          
         }else {
            return redirect()->route('index');
          }

          }else{
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
    public function update(Request $request,$sid, $id)
    {
        $shop=Shop::find($id);
        if ($shop->user_id==Auth::user()->id){

            $shopnoticeUpdate=ShopNotice::where('shop_id',$sid)->update([
          
          'notice_info'=>$request->input('notice_info'),
           'notice'=>$request->input('notice'),
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
