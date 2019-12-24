<?php

namespace App\Http\Controllers\Office;
use App\Model\Shop\shop;
use App\Model\Shop\ShopType;
use App\Model\Shop\ShopUser;
use App\Model\UserRole;
use App\Model\Shop\ShopAddress;
use App\Model\Shop\ShopNotice;
use App\Model\Shop\ShopContact;
use App\Model\Shop\ShopAdmin;
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



protected function shop_store(Request $request)
    {

                 $shopname=strtolower($_POST["name"]);
                  $slug ='';
                  $patterns=array();
                  $patterns[0]='/ /';
                  $patterns[1]='/ /';
                  $replacement=array();
                  $replacement[0]='-';
                  $replacement[1]='-';
                  $slug=preg_replace($patterns, $replacement,  $shopname);
                 // $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["name"])));
                   $slug2 = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["shop_type"])));
                   $public= preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["city"])));
                  $directory1='public/shop/default/profile/front-image.png';
                  $directory2='public/shop/default/profile/right-image.png';
                  $directory3='public/shop/default/profile/center-image.png';
                  $directory4='public/shop/default/profile/left-image.png';
                  
                 $public_shop=$public.'-public-shop';
                 $public_shop_name=strtolower($_POST["city"]).' public shop';
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
                
                $publicshop = DB::table('shops')->where('slug', $public_shop )->first();

                //  $directory1='public/shop/'.$slug2.'/'.$slug.'/profile/front-image.png';
                //   $directory2='public/shop/'.$slug2.'/'.$slug.'/profile/right-image.png';
                 //   $directory3='public/shop/'.$slug2.'/'.$slug.'/profile/center-image.png';
                   //  $directory4='public/shop/'.$slug2.'/'.$slug.'/profile/left-image.png';
                    $directory5='public/shop/'.'public'.'/'.$public_shop.'/profile/front-image.png';
                    $directory6='public/shop/'.'public'.'/'.$public_shop.'/profile/right-image.png';
                    $directory7='public/shop/'.'public'.'/'.$public_shop.'/profile/center-image.png';
                     $directory8='public/shop/'.'public'.'/'.$public_shop.'/profile/left-image.png';
                      $public=strpos( $shopname, "public");
                     
               if ($validator->fails()){
           $shops=Shop::where('user_id',Auth::user()->id)->get(); 
           return view('pages.auth.create_shop',['shops'=>$shops]);
                         }else{
                            if ($public=='false'){

                              dd($public);
                                $shop = Shop::create([

                 'user_name'=>Auth::user()->user_name ,
                 'user_id' => Auth::user()->id ,
                 'creator_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $shopname,
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

                                
                            }else{
                       $woner = DB::table('users')->where('user_role_id', 1 )->first();
                        dd($public);
                $publicshop = Shop::create([
                 'user_name'=>$woner->user_name,
                 'user_id' => $woner->id,
                 'creator_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $public_shop_name,
               //'front_image'=> $directory5,
               // 'right_image'=> $directory6,
               // 'center_image'=>$directory7,
               // 'left_image'=> $directory8,
                'slug'=>$public_shop ,
                'type'=>'Public',
                'shop_type'=> 'public',
            
            ]);
            $address=ShopAddress::create([
             'user_id' => $woner->id,
             'shop_id'=>$publicshop->id,
             'shop_slug'=>$public_shop,

            ]);
            $contact=ShopContact::create([
                'user_id' => $woner->id,
             'shop_id'=>$publicshop->id,
             'shop_slug'=>$public_shop,


            ]);
            $contact=ShopNotice::create([
                'user_id' => $woner->id,
             'shop_id'=>$publicshop->id,
             'shop_slug'=>$public_shop,

            ]);
            $shopadmin=ShopAdmin::create([
                 'user_id' => $woner->id,
             'shop_id'=>$publicshop->id,
             'shop_slug'=>$public_shop,
                'user_name' => $woner->user_name,
               
            ]);

           // Storage::copy('public/shop/default/profile/front-image.png' , $directory5);
           //  Storage::copy('public/shop/default/profile/right-image.png' , $directory6);
            //  Storage::copy('public/shop/default/profile/center-image.png' , $directory7);
             //  Storage::copy('public/shop/default/profile/left-image.png' , $directory8);



                            $shop = Shop::create([
                 'user_name'=>Auth::user()->user_name ,
                 'user_id' => Auth::user()->id ,
                 'creator_id' => Auth::user()->id ,
                'country'=> $request->input('country'),
                'state'=> $request->input('state'),
                'district'=> $request->input('district'),
                'city'=> $request->input('city'),
                'market' => $request->input('market'),
                'name' => $shopname,
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

            

             }

                            
            if($shop){

                Storage::copy('public/shop/default/profile/front-image.png' , $directory5);
             Storage::copy('public/shop/default/profile/right-image.png' , $directory6);
              Storage::copy('public/shop/default/profile/center-image.png' , $directory7);
               Storage::copy('public/shop/default/profile/left-image.png' , $directory8);             

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