<?php

namespace App\Http\Controllers\Shop\PrivateProduct;

use App\Model\Shop\Shop;
use App\Model\Product\Product;
use App\Model\Product\PrivateProduct;
use App\Model\Product\ProductImage;
use App\Model\Product\PrivateProductImage;
use App\Model\Product\PrivateProductClothesSize;
use App\Model\Product\PrivateProductInfo;
use App\Model\Product\PrivateProductLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductStoreController extends Controller
{
    
    public function private_product_store(Request $request)
    {
         if (Auth::check()){

                 $id=$_POST["shop_id"];
                 $shop=Shop::find($id);
                 $shopadmin=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                    }
                }

                   $slug ='';
                

                if(isset($_POST["create"])&&$ok==1)
                 {

                $preg=array();
                $preg[0]='/ /';
                $preg[0]='/ /';
                $rep =array();
                $rep[0]='-';
                $rep[2]='-';
                $slug =preg_replace($preg, $rep, $_POST["title"]);
               
               //   $slug=$slug.'-'.$shop->sp_counter;
                  $this->validate($request ,[
                    
                  'image'=> 'required|image',

               ]);

                $directory='public/shop/'.$shop->shop_type.'/'.$shop->slug.'/product';
                $product = PrivateProduct::create([
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
                'unit'=>$request->input('unit'),
                'price_bdt' => $request->input('price_bdt'),
                'price_cgc' => $request->input('price_cgc'),
                 'price_usd' => $request->input('price_usd'),
               //'condition'=> $request->input('condition'),
                'slug'=>$slug,
                //
               // 'using_info'=> $request->input('using_info'),
                'payment_info'=>$request->input('payment_info'),
                'action'=>$request->input('action'),
                'image'=> $image=$request->image->store($directory),

            ]); 
              
            
                
         // $product= DB::table('private_products')->where(['shop_id',$_POST['shop_id'],['sp_counter_number',$shop->sp_counter]])->first();
            if($product) {
              PrivateProductInfo::create([
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$shop->sp_counter,
                  'description'=> $request->input('description'),
                ]);
                PrivateProductImage::create([
                  'p_image_conter'=>1,
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
        
      public function private_product_like_store($sid,$spcn)
    {
      $product = DB::table('private_products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();

       if (Auth::check()){
          if($product){
              $like=DB::table('private_product_likes')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['user_id',Auth::user()->id]])->first();
              //dd($like);
              if($like){
                   DB::table('private_product_likes')->where([['shop_id', $sid],['sp_counter_number', $spcn],['user_id',Auth::user()->id]])->delete();
                  PrivateProduct::where([['shop_id', $sid], ['sp_counter_number', $spcn]])->update([
                       'like' => $product->like-1,
                     ]);

              }else{
               
                 $like = PrivateProductLike::create([
                'shop_id' => $sid,
                'sp_counter_number'=>$spcn,
                'user_id' => Auth::user()->id,
                ]);

                 if ($like) {
                    PrivateProduct::where([['shop_id', $sid], ['sp_counter_number', $spcn]])->update([
                       'like' => $product->like+1,
                     ]);
                 }
              }
             return back()->withinput();
          }else{
             return redirect()->route('index');
          }
       }else{
        return redirect()->route('login');
       }

    }


/*
      public function private_product_images_store(Request $request){

        if (Auth::check()){

                 if($request->hasFile('images')&&$_POST['ok']==1) {
                   $id=$_POST["shop_id"];
                  $shop=Shop::find($id);
                  $directory='public/shop/'.$shop->shop_type.'/'.$shop->slug.'/product';
                 $images=$request->file('images');
                 $count=count($images);
                 for ($i=0; $i<$count ; $i++) { 
                  $size = $images[$i]->getClientSize();
                  PrivateProductImage::create([
                  'user_id'=>Auth::user()->id,
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$request->input('sp_counter_number'),
                  'image'=>$request->images[$i]->store($directory),
                  'size'=>$size,
                ]);
                 }
                 return back()->withinput();

                 }else{
                  return back()->withinput();
                 }
                
        }else{
          return redirect()->route('login');
        }

                     
}

    */
 public function private_product_images_store(Request $request){

        if (Auth::check()){

                 if($request->hasFile('images')) {
                   $id=$_POST["shop_id"];
                  $shop=Shop::find($id);
                  $directory='public/shop/'.$shop->shop_type.'/'.$shop->slug.'/product';
                 $images=$request->file('images');
                  $size = $images->getClientSize();
                  if ($size<300000) {
                    if ($shop->type=='Public') {
                       ProductImage::create([
                  
                  'user_id'=>Auth::user()->id,
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$request->input('sp_counter_number'),
                  'image'=>$request->images->store($directory),
                  
                ]);
                    }else{
                      if ($_POST['ok']==1) {
                        PrivateProductImage::create([
                  
                  'user_id'=>Auth::user()->id,
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$request->input('sp_counter_number'),
                  'image'=>$request->images->store($directory),
                  'size'=>$size,
                ]);
                      }
                       
                    }
                   
                  }
                  
                 
                 return back()->withinput();
                 }else{
                  return back()->withinput();
                 }
                
        }else{
          return redirect()->route('login');
        }

                     
}
 public function private_product_clothes_size_store(Request $request){

        if (Auth::check()){

                 if($_POST['ok']==1) {
                  
                    PrivateProductClothesSize::create([
                  'user_id'=>Auth::user()->id,
                  'shop_id'=>$request->input('shop_id'),
                  'sp_counter_number'=>$request->input('sp_counter_number'),
                  'size'=>$request->input('size'),
                ]);
                  
                 return back()->withinput();
                 }else{
                  return back()->withinput();
                 }
                
        }else{
          return redirect()->route('login');
        }

                     
}
 
 public function private_product_show_store($sid,$spcn)
    {
     
      
       $shop=DB::table('shops')->where('id',$sid)->first();
                   
       if (Auth::check()){
                    $shopadmin=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                    $admin=Auth::user()->user_name ;
                    $ok=0;
                    foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                    }
                }
         
                    
                  if ($shop->type=='Public') {
                     $product = DB::table('products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'hide']])->first();
                     $action='show';
                    if ($product && ($product->user_id==Auth::user()->id ||$ok==1)) {
                     Product::where([['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                      'action'=>$action,
                     ]);
                    }
                   
                  }else{
                     $product = DB::table('private_products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'hide']])->first();
                     $action='show';
                    if ($product && $ok==1) {
                     PrivateProduct::where([['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                      'action'=>$action,
                     ]);
                    }
                   
                  }
                  return back()->withinput();
         
       }else{
        return redirect()->route('login');
       }

    }


 public function private_product_hide_store($sid,$spcn)
    {
     
      
       $shop=DB::table('shops')->where('id',$sid)->first();
                   
       if (Auth::check()){
                    $shopadmin=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                    $admin=Auth::user()->user_name ;
                    $ok=0;
                    foreach ($shopadmin as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                    }
                }
         
                    
                  if ($shop->type=='Public') {
                     $product = DB::table('products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'Show']])->first();
                     $action='hide';
                    if ($product && ($product->user_id==Auth::user()->id ||$ok==1 )) {
                     Product::where([['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                      'action'=>$action,
                     ]);
                    }
                   
                  }else{
                     $product = DB::table('private_products')->where([['shop_id', $sid], ['sp_counter_number', $spcn],['action', 'show']])->first();
                     $action='hide';
                    if ($product && $ok==1 ) {
                     PrivateProduct::where([['shop_id',$sid],['sp_counter_number',$spcn]])->update([
                      'action'=>$action,
                     ]);
                    }
                   
                  }
                  return back()->withinput();
              
            
         
       }else{
        return redirect()->route('login');
       }

    }



    
}


