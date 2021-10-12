<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Illuminate\Support\Arr;
use App\User;
use App\Images;
use App\Payments;
use DB;
use URL;
use Redirect;
use Illuminate\Support\Collection;

class MainController extends Controller
{

    /*******************************
         Admin Login Form Function
       ******************************/
         function main(){
          $data=Images::all()->sortByDesc("id");
          return view('pages.home', compact('data'));
        }

  /*******************************
         Admin Login Form Function
       ******************************/
      function login(){

        return view('pages.login');
    }

 /*******************************
         Admin Login Form Function
       ******************************/
      function signup(){

        return view('pages.signup');
    }
 /*******************************
         Admin Login Form Function
       ******************************/
      function dashboard(){

        return view('pages.dashboard');
    }
    

 /*******************************
         Admin Login Form Function
       ******************************/
      function privacy(){

        return view('pages.privacy');
    }

    /*******************************
         Admin Login Form Function
       ******************************/
      function hoskeychains(){

        return view('pages.hoskeychains');
    }


      /*******************************
        Checking Credentials Function
       ********************************/
        function check_login(Request $request){
            $this->validate($request,[
                'email' => 'Required|email',
                'password' => 'Required|min:5',
            ]);
            /** Data Gather To be Checked For Auth **/
            $user_data=array(
                'email'=> $request->get('email'),
                'password'=>$request->get('password')
            );
            /** Validating Credentials**/
            if(Auth::attempt($user_data)){
                if($request->get('email')=='admin@admin.com'){
                  return redirect('dashboard');
                }else{
                  return redirect('/');
                }
            }
            else{
                return back()->with('error','Wrong Login Details');
            }
        }

        /** Register Function **/ 

        public function register(Request $request){
          $this->validate($request,[
            'name' => 'Required',
            'email' => 'Required|email',
            'password' => 'Required|min:5',
            'c_password' => 'Required|same:password'
          ]);
          $response=User::where('email', '=', $request->email)->count();
          if ($response>0) {
            return back()->with('error','Email Already Exits!');
          }
          else{
            $password= Hash::make($request->password);
            $form_data = array(
              'name'    =>  $request->input('name'),
              'email'     =>  $request->input('email'),
              'password'     =>  $password
            );
            if ($response = User::create($form_data)) {
              return redirect('/signin')->with('success','Account Created!');
            }
            else{
              return back()->with('error','Something Went Wrong! Try Again.');
            }
          }
      
        }


        /*******************************
              Logout Function
         ******************************/
              function logout(){
                /** Logout **/
                Auth::logout();
                return redirect('/');
            }

            public function upload_image(Request $request)
            {
              $this->validate($request,[
                'name'    =>  'required',
                'image'     =>  'required',
                'asset_name'  => 'required',
                'id'  => 'required',
                'artist_name'  => 'required',
                'price'  => 'required'
              ]);
              // dd($request->adult_content);
              if(!empty($request->adult_content)) {
                $adult='TRUE';
            } else {
              $adult='FALSE';
            }
            $array = [];
            $array = Arr::add($array, 'price', $request->price);
            $array = Arr::add($array, 'quantity', $request->quantity);
            $array = Arr::add($array, 'id', $request->id);
            $array = Arr::add($array, 'Adult Content', $adult);
            $array = Arr::add($array, 'name', preg_replace('/\s+/', '', $request->asset_name));
            $array = Arr::add($array, 'collection name', $request->collection_name);
            $array = Arr::add($array, 'Asset Description', $request->assest_description);
            $array = Arr::add($array, 'Long Description', $request->long_description);
            $array = Arr::add($array, 'Artist Name', $request->artist_name);
            $array = Arr::add($array, 'Publisher URL', $request->publisher_url);
            $array = Arr::add($array, $request->label_1, $request->attr_2);
            $array = Arr::add($array, $request->label_2, $request->attr_2);
            $array = Arr::add($array, $request->label_3, $request->attr_3);
            $array = Arr::add($array, $request->label_4, $request->attr_4);
            $array = Arr::add($array, $request->label_5, $request->attr_5);

            
              $image = $request->file('image');
              $new_name=rand().'.'.$image->getClientOriginalExtension();
              $image->move(public_path('Uploads'),$new_name);
              $url=URL::to('/').'/Uploads/'.$new_name;
                // 

                $ch = curl_init();

                $localFile = "./Uploads/".$new_name;  
    
                $fp = fopen($localFile, 'r');

                $curlFile = curl_file_create($localFile);

                $post = array('file'=> $curlFile );
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,"https://ipfs.blockfrost.io/api/v0/ipfs/add");
                curl_setopt($ch, CURLOPT_POST,1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    
                $headers = array();
                $headers[] = 'project_id: mgY9QY0jEnpemgC7hq9IznPfQWkTcgJX';
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $result=curl_exec ($ch);
                curl_close ($ch);
                $final = json_decode($result, true);
                if(array_key_exists("ipfs_hash",$final)){
                  $image_hash=$final['ipfs_hash'];
                }else{
                  return Redirect::back()->withErrors(['error', 'Internal Server Error From API !']);
                }
              
    
                // 

              $array = Arr::add($array, 'image','ipfs://'.$image_hash);
               $vals = array_filter($array, function($a) {
                return trim($a) !== "";
              });
              $data=json_encode($vals,JSON_PRETTY_PRINT);
              
            
              
              $new=new Images;
              $new->nft_id=$request->id;
              $new->adult_content=$adult;
              $new->assets_name=$request->asset_name;
              $new->collection_name=$request->collection_name;
              $new->asset_description=$request->assest_description;
              $new->long_description=$request->long_description;
              $new->artist_name=$request->artist_name;
              $new->publisher_url=$request->publisher_url;
              $new->image_name=$request->name;
              $new->price=$request->price;
              $new->quantity=$request->quantity;
              $new->label_1=$request->label_1;
              $new->label_2=$request->label_2;
              $new->label_3=$request->label_3;
              $new->label_4=$request->label_4;
              $new->label_5=$request->label_5;
              $new->attr_1=$request->attr_1;
              $new->attr_2=$request->attr_2;
              $new->attr_3=$request->attr_3;
              $new->attr_4=$request->attr_4;
              $new->attr_5=$request->attr_5;
              $new->url=$new_name;
              $new->json_data=$data;
              $new->save();
              return redirect('/dashboard')->with('success', 'Image Added Successfully');
            }
            public function all_images()
            {
                $data=Images::all()->sortByDesc("id");
                return view('pages.all-images', compact('data'));
            }
            public function payments()
            {
            $data = DB::table('payments')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->join('images', 'payments.images_id', '=', 'images.id')
            ->select('users.name','payments.amount','payments.minted','payments.tx_id','images.url','images.status','images.image_name','payments.id','payments.images_id')
            ->orderBy('id', 'desc')
            ->get();
                return view('pages.payments', compact('data'));
            }
            public function do_filter(Request $request)
            {
              $search=$request->input('search');
              $price=$request->input('price');
              $order=$request->input('order');
              if($price!='Price'){
                $t = explode('-',$price);
                $price1 = $t[0];
                $price2 = $t[1];
              }
              if($price=='Price' && $order='Order'){
                $data = DB::table('images')
                ->select('*')
                ->where('assets_name', 'like', '%'.$search.'%')
                ->get();
                return view('pages.result', compact('data'));
              }else if($price!='Price' && $order=='Order'){
                $data = DB::table('images')
                ->select('*')
                ->orwhere('assets_name', 'like', $search.'%')
                ->orwhereBetween('price', [$price1, $price2])
                ->get();
                return view('pages.result', compact('data'));
              } else if($price=='Price' && $order!='Order'){
                $data = DB::table('images')
                ->select('*')
                ->orwhere('assets_name', 'like', $search.'%')
                ->orderBy('id', $order)
                ->get();
                return view('pages.result', compact('data'));
              }else if($price!='Price' && $order!='Order'){
                $data = DB::table('images')
                ->select('*')
                ->orwhere('assets_name', 'like', $search.'%')
                ->orwhereBetween('price', [$price1, $price2])
                ->orderBy('id', $order)
                ->get();
                return view('pages.result', compact('data'));
              }
              
            }
            public function view($id)
            {
               $data=Images::whereid($id)->get();
              //  dd(count($data));
               return view('pages.view')->with('data',$data);
           }
           public function buy($id,$amount)
           {
              return view('pages.buy')->with('amount',$amount)->with('id',$id);
          }
          public function delete($id)
          {
            
            $data = Images::findOrFail($id);
            $data->delete();
            return redirect('/all-images')->with('success', 'Image Deleted Successfully');
          }
          public function sold(Request $request){
            $this->validate($request,[
              'tx'    =>  'required|min:64|max:64',
            ]);
            $data = Images::findOrFail($request->image);
            $metadata=json_decode($data->json_data,true);
        
            $trx_id=$request->tx;
            $amount=(int)$request->amount;     
            /*API CALL*/ 
            $url = 'http://138.197.111.147:5000/mint';

            $data = array("metadata" => $metadata,"price" => $amount,"trx_id"=>$trx_id);
            $postdata = json_encode($data);
  
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $result = curl_exec($ch);
            sleep(5);
            curl_close($ch);
  
           
            $result=json_decode($result);
            // dd($result);
            $status=$result->status;
         
            if($status=='200'){
              $minted='minted';
              $new = new Payments;
            $new->tx_id=$trx_id;
            $new->amount=$amount;
            $new->minted=$minted;
            $new->images_id=$request->image;
            $new->user_id=Auth::user()->id;
            $new->save();
            Images::where('id', $request->image)->update(array('status' => 'minted'));
            return redirect('/profile')->with('success', 'Minted Successfully!');
            }else if($status=='100'){
              $minted='json_exits';
              return Redirect::back()->withErrors(['error', 'Json Already Exits']);
            }else if($status=='401'){
              $minted='exits';
              return Redirect::back()->withErrors(['error', 'Already Minted']);
            }else if($status=='404'){
              return Redirect::back()->withErrors(['error', 'Invalid TRX ID']);
            }
            
            /*End*/ 
            // $new = new Payments;
            // $new->tx_id=$trx_id;
            // $new->amount=$amount;
            // $new->minted=$minted;
            // $new->images_id=$request->image;
            // $new->user_id=Auth::user()->id;
            // $new->save();
            // Images::where('id', $request->image)->update(array('status' => 'minted'));
            // return redirect('/profile')->with('success', 'Minted Successfully!');

          }
          public function confirm($id,$image_id)
          {
            Images::where('id', $image_id)->update(array('status' => 'sold'));
            payments::where('id', $id)->update(array('status' => 'confirm'));
            return redirect('/all-images')->with('success', 'Payment Confirmed Successfully');
          }
          public function profile()
          {
            $data = DB::table('payments')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->join('images', 'payments.images_id', '=', 'images.id')
            ->select('payments.amount','payments.tx_id','payments.minted','images.url','images.image_name')
            ->where('payments.user_id','=',Auth::user()->id)
            ->where('payments.minted','=','minted')
            ->get();
            return view('pages.profile')->with('data',$data);
          }
          /**********/ 
          public function check_id(Request $request){
            $id=(int)$request->id;
            $data = DB::table('images')
            ->where('nft_id','=',$id)
            ->get();
            // dd($data);
            if(count($data)>0){
              return response()->json(['status'=>'200']);
            }else{
              return response()->json(['status'=>'100']);
            }
            
          }
           /**********/ 
           public function check_name(Request $request){
            $name=$request->name;
            $data = DB::table('images')
            // ->where('assets_name', 'like', '%'.$name.'%')
            ->where('assets_name', '=', $name)
            ->get();
            if(count($data)>0){
              return response()->json(['status'=>'200']);
            }else{
              return response()->json(['status'=>'100']);
            }
            
          }
      /*******************************
        Controller End
       ******************************/
    }
