<?php

namespace App\Http\Controllers\Shop;
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
    public function index($sid)
    {
         if(Auth::check()){
            

           // $shop= Shop::find($sid);
             $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
            if($shop){
                $i=0;
                foreach ($shop as $shop) {
                    $i++;
                    $n1=0.0;
                    $n2=0.0;
                    $n3=0.0;
                    $n4=0.0;
                    $n5=0.0;
                    $star=0.0;
                    if($shop->like >0 || $shop->unlike >0 )
                    {
                        $n1=2.0*$shop->like /($shop->like+$shop->unlike);
                    }
                    if($shop->comment >0){
                      $n2=$shop->rating /$shop->comment;
                    }
                    if($shop->mode=='Premium'){
                      $n3=2.5;
                    }

                    if($shop->view <500){
                       $n4=0.5;
                    }elseif ($shop->view <1000) {
                      $n4=1.0;
                    }else{
                       $n4=1.5;
                    }

                    if($shop->connected <500){
                       $n5=0.5;
                    }elseif ($shop->connected <1000) {
                      $n5=1.0;
                    }else{
                       $n5=1.5;
                    }
                    $star=$n1+$n2+$n3+$n4+$n5;
                    if($star){
                      Shop::where('id', $shop->id)->update([

                     'star' => $star,
                     'view'=>$shop->view+1 ,
                        ]);
                    }

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
            
             if ($i==1) {
                 break;
                }
                
                }
                
            
        }else{
            return redirect()->route('index');
         }

        }else
        {     
            // $shop= Shop::find($sid);
            
             $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
             if($shop){
                $i=0;
             foreach ($shop as $shop) {
                $i++;

                    $n1=0.0;
                    $n2=0.0;
                    $n3=0.0;
                    $n4=0.0;
                    $n5=0.0;
                    $star=0.0;
                    if($shop->like >0 || $shop->unlike >0 )
                    {
                        $n1=(2.0*$shop->like) /($shop->like+$shop->unlike);
                    }
                    if($shop->comment >0){
                      $n2=$shop->rating /$shop->comment;
                    }
                    if($shop->mode=='Premium'){
                      $n3=2.5;
                    }

                    if($shop->view <500){
                       $n4=0.5;
                    }elseif ($shop->view <1000) {
                      $n4=1.0;
                    }else{
                       $n4=1.5;
                    }

                    if($shop->connected <500){
                       $n5=0.5;
                    }elseif ($shop->connected <1000) {
                      $n5=1.0;
                    }else{
                       $n5=1.5;
                    }
                    $star=$n1+$n2+$n3+$n4+$n5;
                    
                      Shop::where('id', $shop->id)->update([

                     'star' => $star,
                     'view'=>$shop->view+1 ,
                
                        ]);
                 

                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
             return view('pages.shop.show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]); 
               if ($i==1) {
                   break;
               }
             }
              }else{
            return redirect()->route('index');
         }
             
         
             
        }

        
    }

    public function address($sid)
    {

       
            
            $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
              $ok=0;
            
            if($shop){
                 $i=0;
             foreach ($shop as $shop) {
                $i++;
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $address=DB::table('shop_addresses')->where('shop_id',$shop->id)->get();
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
               return view('pages.shop.location',['shop'=>$shop ,'address'=>$address ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok]);

               if ($i==1) {
                   break;
               }

           }
            } else {

                 return redirect()->route('index');
          }
          
         

        //
    }
    

    public function notice($sid)
    {

       
            
            $shop = DB::select('select * from shops where slug = :slug', ['slug'=>$sid]);

              $ok=0;
            
            if($shop){
                 $i=0;
             foreach ($shop as $shop) {
                $i++;
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $notice=DB::table('shop_notices')->where('shop_id',$shop->id)->get();
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
              return view('pages.shop.notice',['shop'=>$shop ,'notice'=>$notice , 'brands'=>$brands,'categories'=>$categories ,'ok'=>$ok]);

               if ($i==1) {
                   break;
               }

           }
            } else {

                 return redirect()->route('index');
          }
          
         

        //
    }

public function contact($sid)
    {

       
            
            $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
              $ok=0;
            
            if($shop){
                 $i=0;
             foreach ($shop as $shop) {
                $i++;
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                $contact=DB::table('shop_contacts')->where('shop_id',$shop->id)->get();
               // $contact=ShopContact::where('shop_id',$shop->id)->get();
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
               
               return view('pages.shop.contact',['shop' =>$shop,'contact'=>$contact ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok]);

               if ($i==1) {
                   break;
               }

           }
            } else {

                 return redirect()->route('index');
          }
          
         

        //
    }




    
}
