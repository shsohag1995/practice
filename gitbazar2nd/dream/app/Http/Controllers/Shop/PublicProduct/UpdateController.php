<?php

namespace App\Http\Controllers\Shop\PublicProduct;
use App\Model\Shop\Shop;
use App\Model\Product\Product;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UpdateController extends Controller
{
    
   
  
    protected function public_product_update(Request $request)
    {
       // $shop=DB::table('shops')->where('slug',$slug)->first();
       if (Auth::check()){

                 $id=$_POST["shop_id"];
                 $shop=Shop::find($id);
                

                if($shop && isset( $_POST["create"]))
                 {

               
                
                $product = Product::where([['shop_id',$shop->id],['sp_counter_number',$_POST['sp_counter_number']]])->update([
                
                'title'=> $request->input('title'),
                'category'=> $request->input('category'),
                'type'=> $request->input('type'),
                'brand'=> $request->input('brand'),
                'quantity' => $request->input('quantity'),
                'price_bdt' => $request->input('price_bdt'),
                'condition'=> $request->input('condition'),
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

