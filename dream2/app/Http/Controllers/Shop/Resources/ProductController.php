<?php

namespace App\Http\Controllers\Shop\Resources;
use App\Model\Shop;
use App\Model\Product;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sid,$pid)
    {
        if(Auth::check()){
            $product = DB::table('products')->where([['slug', $pid],['action', 'Show']])->get();

            $shop= Shop::find($sid);

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
      //  $product = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->get();
         $ptype = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->pluck('type');
           
                 
             $products = DB::table('products')->where([['shop_id', $shop->id],['type', $ptype],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(4);
             if($product){
                return view('pages.shop.product-details',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories]);
            }else{
               return redirect()->route('index');
            }
        

        }else
        {      $product = DB::table('products')->where([['slug', $pid],['action', 'Show']])->get();

           if($product){
             $shop= Shop::find($sid);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
            // $product = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->get();
             $ptype = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->pluck('type');
            $products = DB::table('products')->where([['shop_id', $shop->id],['type', $ptype],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(4);
            return view('pages.shop.product-details',['shop'=>$shop ,'products'=>$products ,'product'=>$product,'brands'=>$brands ,'categories'=>$categories]);
        }else {
          return redirect()->route('index');
        }
     
        
        }


    }

    
    public function create($id)
    {
        if(Auth::check())
        {
            $shop= Shop::find($id);
            if($shop){
                return view('pages.shopmanage.addproduct',['shop'=>$shop])->with('success','Store A new Product');;
            }else
               {
                return redirect()->route('index');
               }
        }else{
            return redirect()->route('login');
        }
    }

   
   public function store(Request $request){

    if(isset($_POST["create"]) ){
        $shop= Shop::find($_POST["shop_id"]);            
             if(Auth::check() && ($_POST["mode"]=='Private'||$shop->user_name==Auth::user()->user_name))
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
                'action'=>$request->input('action'),
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


   
}