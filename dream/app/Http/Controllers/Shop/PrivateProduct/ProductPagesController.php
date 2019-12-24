<?php

namespace App\Http\Controllers\ShopManage;

use App\Model\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
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
    public function create($sid)
    {
        
       if(Auth::check())
        {
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
                return view('pages.shopmanage.create_category',['shop'=>$shop ,'ok'=>$ok ])->with('success','Create A new category');
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
          if(isset($_POST["create"]) ){

             if(Auth::check() && $_POST["mode"]=='Private')
            {
                $mode=$_POST["mode"];
                 $id=$_POST["shop_id"];
                 $counter=$_POST["sp_counter"];
                 $shop_admins=DB::table('shop_admins')->where('shop_id',$id)->get();
                 $adminid=Auth::user()->id;
                 $admin=Auth::user()->user_name ;
                 $slug ='';
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        $counter++;
                        break;
                    }
                }
                  
                       if(isset($_POST["create"]) && $ok==1 )
                 {
               //$slug = preg_replace(pattern, replacement, subject)
             $slug =$adminid.$counter.'-'.preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));
                    
                
            // $query =  DB::select("SELECT slug FROM products WHERE slug LIKE '$slug%'");
                  


                $product = Product::create([
                'user_name'=>Auth::user()->user_name ,
                'user_id' => Auth::user()->id ,
                'shop_id' =>$request->input('shop_id'),
                'mode'=>$request->input('mode'),
                'sp_counter'=>$counter,
                'title'=> $request->input('title'),
                'category'=> $request->input('category'),
                'type'=> $request->input('type'),
                'brand'=> $request->input('brand'),
                'quantity' => $request->input('quantity'),
                'import_price' => $request->input('import_price'),
                'export_price' => $request->input('export_price'),
                'payment_info'=>$request->input('payment_info'),
                'condition'=> $request->input('condition'),
                
                'slug'=>$slug,
                'description'=> $request->input('description'),
            ]);  
            if ($product) {

                 $sp_counter=Shop::where('id',$id)->update([
                  'sp_counter'=>$counter,
        ]);
             } 
             return back()->withInput()->with('success' , 'Product store successfull .Create new' );
         }else{
            return redirect()->route('index');
         }
        }else
        {
            return redirect()->route('index');
        }



    }else {

         return back()->withInput()->with('success' , 'faileld to store try again' );
    }
            
   



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
