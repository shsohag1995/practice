<?php

namespace App\Http\Controllers\Shop;
use App\Model\Shop\Shop;
use App\Model\Shop\ShopContact;
use App\Model\Shop\ShopAddress;
use App\Model\Shop\ShopNotice;
use App\Model\Shop\ShopAdmin;
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

                if ($shop->type=="Public") {
                  $categorytypes = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                ->orderBy('category','asc')
               ->get();
               
                 // $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                  $categories = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
               ->get();
               $brands = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
               ->get();
               //  $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
                  $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                   $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                  return view('pages.shop.shopp-show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists ,'categorytypes'=>$categorytypes]);
            
                }else{
                  $categorytypes = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                ->orderBy('category','asc')
               ->get();
             //  dd($categorytypes);
                   $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                 // $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                  $categories = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
               ->get();
               $brands = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
               ->get();
                // $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
                  $products = DB::table('private_products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
                  if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery') {
                    
                   return view('pages.shop.shopctb-show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists,'categorytypes'=>$categorytypes]);

                  }elseif($shop->shop_type=='books'){
                   
                   return view('pages.shop.shopcb-show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists,'categorytypes'=>$categorytypes]);
                  }elseif($shop->shop_type=='furniture'){
                    
                    return view('pages.shop.shopct-show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists,'categorytypes'=>$categorytypes]);
                  }elseif($shop->shop_type=='hotel'){
                    
                    return view('pages.shop.shopb-show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists,'categorytypes'=>$categorytypes]);
                  }else{
                   
                   return view('pages.shop.show',['shop'=>$shop , 'ok'=>$ok ,'products'=>$products , 'brands'=>$brands ,'categories'=>$categories ,'wishlists'=>$wishlists,'categorytypes'=>$categorytypes]);
                  }
                  
            
                }

        
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
                 

                
             if ($shop->type=="Public") {
               $categorytypes = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                 ->orderBy('category','asc')
               ->get();
               $categories = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
               ->get();
                $brands = DB::table('products')
               ->where('shop_id',$shop->id)
               ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
               ->get();
             //  $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
            // $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
              return view('pages.shop.shopp-show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 
             }else{
               $categorytypes = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('category','type',DB::raw('count(*) as total'))
                ->groupBy('category','type')
                 ->orderBy('category','asc')
               ->get();
               $categories = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('category',DB::raw('count(*) as total'))
                ->groupBy('category')
                ->orderBy('category','asc')
               ->get();
               $brands = DB::table('private_products')
               ->where('shop_id',$shop->id)
               ->select('brand',DB::raw('count(*) as total'))
                ->groupBy('brand')
                ->orderBy('brand','asc')
               ->get();
             // $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
            // $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('private_products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(20);
              if ($shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery') {
                    return view('pages.shop.shopctb-show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 

                  }elseif($shop->shop_type=='books'){
                   
                   return view('pages.shop.shopcb-show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 
                  }elseif($shop->shop_type=='furniture'){
                    
                    return view('pages.shop.shopct-show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 
                  }elseif($shop->shop_type=='hotel'){
                    
                    return view('pages.shop.shopb-show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 
                  }else{
                   
                   return view('pages.shop.show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories,'categorytypes'=>$categorytypes]); 
                  }
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
                  $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }

                return view('pages.shop.location',['shop'=>$shop ,'address'=>$address ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok,'wishlists'=>$wishlists]);

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
                  $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }

                 return view('pages.shop.notice',['shop'=>$shop ,'notice'=>$notice , 'brands'=>$brands,'categories'=>$categories ,'ok'=>$ok,'wishlists'=>$wishlists]);
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
                  $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }

               return view('pages.shop.contact',['shop' =>$shop,'contact'=>$contact ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok,'wishlists'=>$wishlists]);

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

     public function complain($sid)
    {

       
            
            
             $shop=DB::table('shops')->where('slug',$sid)->first();
              $ok=0;
            
            if($shop){
              if($shop->type=='Public'){
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             }else {
              $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
             }
                
                
              
                if(Auth::check()){
                  $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }

               return view('pages.shop.complain',['shop' =>$shop ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok,'wishlists'=>$wishlists]);

            }
               
               return view('pages.shop.complain',['shop' =>$shop,'complains'=>$complains ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok]);

               
           
            } else {

                 return redirect()->route('index');
          }
          
         

        //
    }

public function comment($sid)
    {

       
            
          
            $shop=DB::table('shops')->where('slug',$sid)->first();

              $ok=0;
            
            if($shop){
              
             if($shop->type=='Public'){
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             }else {
              $categories = DB::select('select DISTINCT category from private_products where shop_id =:id  ',['id'=>$shop->id]);
                 $brands = DB::select('select DISTINCT brand from private_products where shop_id =:id  ',['id'=>$shop->id]);
             }
                
             
               
                if(Auth::check()){
                  $wishlists=DB::table('wishlists')->where([['user_name',Auth::user()->user_name],['shop_id',$shop->id],['action','wish']])->take(5)->get();
                $shop_admins=DB::table('shop_admins')->where('shop_id',$shop->id)->get();
                $admin=Auth::user()->user_name ;
            foreach ($shop_admins as $sadmin) {
            if($sadmin->user_name==$admin)
               {
                 $ok=1;
                     break;
                    }
                }
            $comments= DB::table('users')
            ->join('shop_comments', 'users.id', '=', 'shop_comments.user_id')
           ->where('shop_comments.shop_id',$shop->id)
            ->select('users.first_name', 'shop_comments.comment', 'shop_comments.created_at')
            ->orderBy('shop_comments.created_at' ,'desc')
            ->paginate(20);
               return view('pages.shop.comment',['shop' =>$shop,'comments'=>$comments ,'brands'=>$brands ,'categories'=>$categories ,'ok'=>$ok,'wishlists'=>$wishlists]);

            }else{
              return redirect()->route('login');
            }
               
                         
            } else {

                 return redirect()->route('index');
          }
          
         

        //
    }



    
}
