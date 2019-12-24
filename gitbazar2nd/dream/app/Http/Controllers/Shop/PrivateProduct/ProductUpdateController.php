<?php

namespace App\Http\Controllers\Shop\PrivateProduct;
use App\Model\Shop\Shop;
use App\Model\Product\Product;
use App\Model\Product\PrivateProduct;
use App\Model\Product\PrivateProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductUpdateController extends Controller
{
    public function private_product_image_view_update(Request $request)
    {
        
        if (Auth::check()) {
          $shop=DB::table('shops')->where('id',$_POST['shop_id'])->first();
          if ($shop->type=='Public') {
              Product::where([['shop_id',$_POST['shop_id']],['sp_counter_number',$_POST['sp_counter_number']]])->update([
                'image'=>$request->input('image'),
            ]);
             }else{
              
              if ($_POST['ok']==1) {

            PrivateProduct::where([['shop_id',$_POST['shop_id']],['sp_counter_number',$_POST['sp_counter_number']]])->update([
                'image'=>$request->input('image'),
            ]);
           
           }
             }
         return back()->withinput();
        }else {
           return redirect()->route('login');
        }
    }
         
          protected function private_product_update(Request $request)
    {
       // $shop=DB::table('shops')->where('slug',$slug)->first();
       if (Auth::check()){

                 $id=$_POST["shop_id"];
                 $shop=Shop::find($id);
                

                if($shop && isset($_POST["create"]))
                 {

                $product = PrivateProduct::where([['shop_id',$shop->id],['sp_counter_number',$_POST['sp_counter_number']]])->update([
                
                'title'=> $request->input('title'),
                'category'=> $request->input('category'),
                'type'=> $request->input('type'),
                'brand'=> $request->input('brand'),
                'quantity' => $request->input('quantity'),
                'price_bdt' => $request->input('price_bdt'),
                'unit' => $request->input('unit'),
                'slug'=> $request->input('title'),
                'payment_info'=>$request->input('payment_info'),
                'action'=>$request->input('action'),
               
            ]); 

             return back()->withinput();
    }else{
         return redirectr()->route('index');

    }
           

       }else{
        return redirectr()->route('login');
       }

                   
}
    
}
