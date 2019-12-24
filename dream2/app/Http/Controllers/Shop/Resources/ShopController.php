<?php

namespace App\Http\Controllers\Shop\Resources;

use App\Model\Shop;
use App\Model\ShopContact;
use App\Model\ShopAddress;
use App\Model\ShopNotice;
use App\Model\ShopAdmin;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ShopController extends Controller
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
             
        return view('pages.shop.index',['shops'=>$shops]);
        }else
        {
            
            return redirect()->route('login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
           if (Auth::user()->type=='Verified') {
         $shops=Shop::where('user_id',Auth::user()->id)->get();
             
        return view('pages.auth.create_shop',['shops'=>$shops]);
              }else{
                return redirect()->route('verification.index');
              }
        }else
        {
            
            return redirect()->route('login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    protected function store(Request $request)
    {
            
                  $slug ='';
                  $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["name"])));
           
        if(Auth::check()){
            if (Auth::user()->type=='Verified') {
             $validator = Validator::make($request->all(), [
            'country'=>'required',
            'state'=>'required',
            'district'=>'required',
            'city'=>'required',
            'market'=>'required',
            'name' => 'required|unique:shops|max:255',
            'shop_type' =>'required',
                ]);

               if ($validator->fails()){
           $shops=Shop::where('user_id',Auth::user()->id)->get(); 
           return view('pages.auth.create_shop',['shops'=>$shops]);
                         }else{
                            $shop = Shop::create([

                 'user_name'=>Auth::user()->user_name ,
                 'user_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $request->input('name'),
                'slug'=>$slug ,
                'shop_type'=> $request->input('shop_type'),
            
            ]);
            $address=ShopAddress::create([
             'user_id' => Auth::user()->id ,
             'shop_id'=>$shop->id ,

            ]);
            $contact=ShopContact::create([
                'user_id' => Auth::user()->id ,
                'shop_id'=>$shop->id ,

            ]);
            $contact=ShopNotice::create([
                'user_id' => Auth::user()->id ,
                'shop_id'=>$shop->id ,

            ]);
            $shopadmin=ShopAdmin::create([
                 'shop_id'=>$shop->id ,
                'user_name' => Auth::user()->user_name,
               

            ]);

            if($shop){
                return redirect()->route('shop.show', ['shop'=> $shop->id])
                ->with('success', 'Shop created successfully');
            }



                         }

                
             
            

           }else{
            return redirect()->route('verification.index');
           }
           
        }
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {

        if(Auth::check()){
            

            $shop= Shop::find($shop->id);

            $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
        $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
        $ok=0;
        $admin=Auth::user()->user_name ;
        foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
        $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
        return view('pages.shop.show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories]);

        }else
        {     
             $shop= Shop::find($shop->id);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
           
     return view('pages.shop.show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]);

        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
