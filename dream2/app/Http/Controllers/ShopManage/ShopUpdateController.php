<?php
namespace App\Http\Controllers\ShopManage;

use App\Model\Shop;
use App\Model\ShopContact;
use App\Model\ShopNotice;
use App\Model\ShopAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopUpdateController extends Controller
{
   
    public function shop_image_update(Request $request, $sid)
    {
        if(Auth::check())
        {         $data=$_POST['data'];
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
            $shop= Shop::find($sid);
            $slug2 = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($shop->shop_type)));
            $directory='public/shop/'.$slug2.'/'.$shop->slug.'/profile';
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
                $this->validate($request ,[
                    
            'image'=> 'required|image',

               ]);
               if ($request->hasFile('image')) {


                if ($data=='front') {
                    $imageuplode=Shop::where('id',$sid)->update([

                    'front_image'=> $request->image->store($directory),    
             ]);
                    Storage::delete($shop->front_image);
                 return back()->withInput();
                }elseif ($data=='right') {
                     $imageuplode=Shop::where('id',$sid)->update([

                    'right_image'=> $request->image->store($directory),    
             ]);
                     Storage::delete($shop->right_image);
                 return back()->withInput();

                }elseif ($data=='center') {
                     $imageuplode=Shop::where('id',$sid)->update([

                    'center_image'=> $request->image->store($directory),    
             ]);
                     Storage::delete($shop->center_image);
                 return back()->withInput();
                }else{
                     $imageuplode=Shop::where('id',$sid)->update([

                    'left_image'=> $request->image->store($directory),    
             ]);
                     Storage::delete($shop->left_image);
                 return back()->withInput();

                }

                   
               }
                
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }  
    }
   
    public function shop_notice_update(Request $request, $sid)
    {
        if(Auth::check())
        {         
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
                $this->validate($request ,[
                    
            'notice_info'=> 'required',
             'notice'=>'required',
               ]);
              
                $shopnoticeUpdate=ShopNotice::where('shop_id', $sid)->update([
          
          'notice_info'=>$request->input('notice_info'),
           'notice'=>$request->input('notice'),
        ]);

                 $redirect='/shop/'.$shop->slug.'/notice';

            
             return redirect($redirect);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }  
    }

    public function shop_contact_update(Request $request, $sid)
    {
        if(Auth::check())
        {         
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
                $this->validate($request ,[
                    
            'address'=> 'required',
             'contact'=>'required',
               ]);
              
                $shopcontactUpdate=ShopContact::where('shop_id',$sid)->update([
          
          'address'=>$request->input('address'),
           'contact'=>$request->input('contact'),
        ]);

                 $redirect='/shop/'.$shop->slug.'/contact';

            
             return redirect($redirect);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }  
    }

    public function shop_address_update(Request $request, $sid)
    {
        if(Auth::check())
        {         
                $shop_admins=DB::table('shop_admins')->where('shop_id',$sid)->get();
                 $admin=Auth::user()->user_name ;
                 $ok=0;
                foreach ($shop_admins as $sadmin) {
                    if($sadmin->user_name==$admin)
                    {
                        $ok=1;
                        break;
                    }
                }
            $shop= Shop::find($sid);
            if($shop && ($shop->user_id==Auth::user()->id || $ok==1) ){
                $this->validate($request ,[
                    
            'visitcost'=> 'required',
             'maplink'=>'required',
               ]);
              
                 $shopaddressUpdate=ShopAddress::where('shop_id',$sid)->update([
          
          'visitcost'=>$request->input('visitcost'),
           'maplink'=>$request->input('maplink'),
        ]);

                 $redirect='/shop/'.$shop->slug.'/address';

            
             return redirect($redirect);
               
            }else {

                 return redirect()->route('index');
          }
          

        }else{
            return redirect()->route('login');
        }  
    }

   


    
}
