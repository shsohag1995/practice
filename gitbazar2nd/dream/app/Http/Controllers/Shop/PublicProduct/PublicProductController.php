<?php

namespace App\Http\Controllers\Shop\PublicProduct;
use App\Model\Shop\Shop;
use App\Model\Product\Product;
use App\Model\Product\ProductImage;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PublicProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index($sid,$pid)
    {

        $shop=DB::table('shops')->where('slug',$sid)->first();
        if($shop){
            $product=DB::table('products')->where([['shop_id',$shop->id],['slug',$pid],['action', 'Show']])->first();
            if ($product){

                 if(Auth::check()){
           // $product = DB::table('products')->where([['slug', $pid],['action', 'Show']])->get();

           // $shop= Shop::find($sid);

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
           
                 
             $products = DB::table('products')->where([['shop_id', $shop->id],['type', $ptype],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(3);
             if($product){
                return view('pages.shop.public-product-details',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products,'product'=>$product , 'brands'=>$brands ,'categories'=>$categories]);
            }else{
               return redirect()->route('index');
            }
        

        }else
        {     // $product = DB::table('products')->where([['slug', $pid],['action', 'Show']])->get();

          
             //$shop= Shop::find($sid);
             $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
            // $product = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->get();
             $ptype = DB::table('products')->where([['shop_id', $shop->id],['slug', $pid],['action', 'Show']])->pluck('type');
            $products = DB::table('products')->where([['shop_id', $shop->id],['type', $ptype],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(3);
            return view('pages.shop.public-product-details',['shop'=>$shop ,'products'=>$products ,'product'=>$product,'brands'=>$brands ,'categories'=>$categories]);
        
        
        }


                
            }else{
            return redirect()->route('index');
        }

        }else{
            return redirect()->route('index');
        }
        
       
        
    }
   
   */
  
  
    protected function public_product_store(Request $request)
    {
       // $shop=DB::table('shops')->where('slug',$slug)->first();
       if (Auth::check()){

                 $id=$_POST["shop_id"];
                 $shop=Shop::find($id);
                 $shopadmin=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin==$admin)
                    {
                        $ok=1;
                    }
                }

                   $slug ='';
                

                if(isset($_POST["create"]))
                 {

                  $preg=array();
                $preg[0]='/ /';
                $preg[0]='/ /';
                $rep =array();
                $rep[0]='-';
                $rep[2]='-';
                $slug =preg_replace($preg, $rep, $_POST["title"]);
            
               
                  $slug=$slug.'-'.$shop->sp_counter;
                  $this->validate($request ,[
                    
                  'image'=> 'required|image',

               ]);
                $directory='public/shop/'.$shop->shop_type.'/'.$shop->slug.'/product';
                $product = Product::create([
                'user_name'=>Auth::user()->user_name ,
                'user_id' => Auth::user()->id ,
                'shop_name'=>$shop->name,
                'shop_slug'=>$shop->slug,
                'shop_id' =>$request->input('shop_id'),
                'sp_counter_number'=>$shop->sp_counter,
                'title'=> $request->input('title'),
                'category'=> $request->input('category'),
                'type'=> $request->input('type'),
                'brand'=> $request->input('brand'),
                'quantity' => $request->input('quantity'),
                'price_bdt' => $request->input('price_bdt'),
                'price_cgc' => $request->input('price_cgc'),
                 'price_usd' => $request->input('price_usd'),
                'condition'=> $request->input('condition'),
                'slug'=>$slug,
                'description'=> $request->input('description'),
                'using_info'=> $request->input('using_info'),
                'payment_info'=>$request->input('payment_info'),
                'action'=>$request->input('action'),
                'image'=> $image=$request->image->store($directory),

            ]); 

            
                

            if($product) {
                 ProductImage::create([
                 
                  'user_id'=>Auth::user()->id,
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$shop->sp_counter,
                  'image'=>$image,
                ]);
                Shop::where('id', $shop->id)->update([
                'sp_counter' => $shop->sp_counter+1,
            ]);

                return back()->withinput();
         }
            
    }else{
         return redirectr()->route('index');

    }
           

       }else{
        return redirectr()->route('index');
       }

                   


         
}


}
