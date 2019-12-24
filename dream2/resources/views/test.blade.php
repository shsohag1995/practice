if(Auth::check()){
            

           // $shop= Shop::find($sid);
             $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
            if($shop){
                foreach ($shop as $shop) {
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
                }
            
        }else{
            return redirect()->route('index');
         }

        }else
        {     
            // $shop= Shop::find($sid);
            
             $shop = DB::select('select * from shops where slug = :slug', ['slug' => $sid]);
             if($shop){
             foreach ($shop as $shop) {
                
                $categories = DB::select('select DISTINCT category from products where shop_id =:id  ',['id'=>$shop->id]);
             $brands = DB::select('select DISTINCT brand from products where shop_id =:id  ',['id'=>$shop->id]);
             $products = DB::table('products')->where([['shop_id', $shop->id],['action', 'Show']])->orderBy('updated_at', 'desc')->paginate(1);
             return view('pages.shop.show',['shop'=>$shop ,'products'=>$products ,'brands'=>$brands ,'categories'=>$categories]); 
            
             }
              }else{
            return redirect()->route('index');
         }
             
         
             
        }

        /*
        if (Auth::check()) {
           // dump(Auth::user()->id);

         $shops=Shop::where('user_id',Auth::user()->id)->get();
             
        return view('pages.shop.index',['shops'=>$shops]);
        }else
        {
            
            return redirect()->route('login');
        }
        */
    }