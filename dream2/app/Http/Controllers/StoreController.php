<?php

namespace App\Http\Controllers;
use App\Model\shop;
use App\Model\ShopType;
use App\Model\ShopUser;
use App\Model\UserRole;
use App\Model\Product;
use App\Model\ShopAddress;
use App\Model\ShopNotice;
use App\Model\ShopContact;
use App\Model\ShopAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class StoreController extends Controller
{
    
    
      protected function shoptype_store(Request $request){
          
          if(Auth::check()){
            if(Auth::user()->user_role_id==1){
                $shoptypes = ShopType::create([
                'name' => $request->input('name'),
                'user_id' => Auth::user()->id,
            ]);
            if($shoptypes){
                return redirect()->route('shoptype.create')
                ->with('success', 'Shop type created successfully');
            }

            }else{
                return redirect()->route('index');
            }
            
            
        }else{
             return redirect()->route('login');
        }
       


      }

      protected function userrole_store(Request $request){
       
       if(Auth::check()){
            if(Auth::user()->user_role_id==1){
                $userroles = UserRole::create([
                'name' => $request->input('name'),
                'user_id' => Auth::user()->id,
            ]);
            if($userroles){
                return redirect()->route('userrole.create')
                ->with('success', 'User Role created successfully');
            }

            }return redirect()->route('index');
            
        }
        return redirect()->route('login');
        
      }

protected function product_store(Request $request)
    {
       

                   $id=$_POST["shop_id"];
                 $shop=Shop::find($id);
                 $shopadmin=DB::table('shop_admins')->where('shop_id',$id)->get();
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
               //$slug = preg_replace(pattern, replacement, subject)
             $slug =$id.'-'.preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));

                
            // $query =  DB::select("SELECT slug FROM products WHERE slug LIKE '$slug%'");
                  


                $product = Product::create([
                'user_name'=>Auth::user()->user_name ,
                'user_id' => Auth::user()->id ,
                'shop_id' =>$request->input('shop_id'),
                'title'=> $request->input('title'),
                'category'=> $request->input('category'),
                'type'=> $request->input('type'),
                'brand'=> $request->input('brand'),
                'quantity' => $request->input('quantity'),
                'import_price' => $request->input('import_price'),
                'export_price' => $request->input('export_price'),
               
                'condition'=> $request->input('condition'),
                'slug'=>$slug,
                'description'=> $request->input('description'),
            ]);   
             
         }


         
}

protected function shop_store(Request $request)
    {
            
                  $slug ='';
                  $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["name"])));
                   $slug2 = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["shop_type"])));
                  $directory1='public/shop/default/profile/front-image.png';
                  $directory2='public/shop/default/profile/right-image.png';
                  $directory3='public/shop/default/profile/center-image.png';
                  $directory4='public/shop/default/profile/left-image.png';
                  
           
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
                
                  $directory1='public/shop/'.$slug2.'/'.$slug.'/profile/front-image.png';
                   $directory2='public/shop/'.$slug2.'/'.$slug.'/profile/right-image.png';
                    $directory3='public/shop/'.$slug2.'/'.$slug.'/profile/center-image.png';
                     $directory4='public/shop/'.$slug2.'/'.$slug.'/profile/left-image.png';
                  
            Storage::copy('public/shop/default/profile/front-image.png' , $directory1);
             Storage::copy('public/shop/default/profile/right-image.png' , $directory2);
              Storage::copy('public/shop/default/profile/center-image.png' , $directory3);
               Storage::copy('public/shop/default/profile/left-image.png' , $directory4);

               if ($validator->fails()){
           $shops=Shop::where('user_id',Auth::user()->id)->get(); 
           return view('pages.auth.create_shop',['shops'=>$shops]);
                         }else{
                            $shop = Shop::create([

                 'user_name'=>Auth::user()->user_name ,
                 'user_id' => Auth::user()->id ,
                 'creator_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $request->input('name'),
                'front_image'=> $directory1,
                'right_image'=> $directory2,
                'center_image'=>$directory3,
                'left_image'=> $directory4,
                'slug'=>$slug ,
                'shop_type'=> $request->input('shop_type'),
            
            ]);
            $address=ShopAddress::create([
             'user_id' => Auth::user()->id ,
             'shop_id'=>$shop->id ,
             'shop_slug'=>$slug,

            ]);
            $contact=ShopContact::create([
                'user_id' => Auth::user()->id ,
                'shop_id'=>$shop->id ,
                'shop_slug'=>$slug,

            ]);
            $contact=ShopNotice::create([
                'user_id' => Auth::user()->id ,
                'shop_id'=>$shop->id ,
                'shop_slug'=>$slug,

            ]);
            $shopadmin=ShopAdmin::create([
                 'shop_id'=>$shop->id ,
                 'shop_slug'=>$slug,
                 'user_id' => Auth::user()->id ,
                'user_name' => Auth::user()->user_name,
               

            ]);

            if($shop){
                $url='/shop/'.$shop->slug;
                return redirect($url)->with('success', 'Shop created successfully');
            }



                         }

                
             
            

           }else{
            return redirect()->route('verification.index');
           }
           
        }
        return redirect()->route('login');
    }






}