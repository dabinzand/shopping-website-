<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
 use App\Models\post;
 use App\Models\shoper;
 use App\Models\contact;
 use App\Models\cart;
 use Illuminate\Support\Facades\File;
 use Illuminate\Support\Facades\cookie;
 use Illuminate\Support\Facades\Auth;//lo auth damannaya
class ShopController extends Controller
{
   
 public function get_user_id(){

    return  Auth::id();
    

 }
    public function guest(){
        $guest = Cookie::has('guest') ? Cookie::get("guest") : Cookie::queue("guest" , rand().rand(), 2628000);
            return $guest;
        // $guest= cookie::make('guest', rand().rand(), 4444);// labo add to cart bakar be zor basha 
                           // nawe cookie zhmarakae , tarixe expire 
                   
               }
    
     function card(){
        $products= post::all();
        return view('card', ["products" => $products , "guest"=>cookie::get("guest"),"userid"=>$this->get_user_id()]);
    
    }
public function viewshoper(){

     $shopers= shoper::all();
    return view('shoper.shoper', ["shopers"=>$shopers ]);
}
public function show($id){

$products= post::where('userid',$id)->orderby('title' ,'DESC')->get();
 
return view('shoper.profile',["products"=>$products, "userid"=>$this->get_user_id()] );
}


// public function insert(){

//     DB::insert("INSERT into `post` (title , price , image , userid) values ('JACKET',33.500,'3.SVG',3)" );

// }
// public function delete(){
// DB::insert("DELETE FROM post WHERE id=2");
// }

public function detail( $userid,$id){

    $products= post::find($id);//find bas shte tak dagarentawa bas (where) comala shtak dainitawa 
    return view('shoper.details',["products"=>$products]);
    }

    public function save(){
        $newpost= new post;//wache objectake nweya wache brey tablake nweya
        $newpost->id='30';
          $newpost->title="t-shirt";
          $newpost->sizes='small';
          $newpost->price=45.000;
          $newpost->image='14.jpg';
          $newpost->userid=5;
          $newpost->details="this is british culture";
          $newpost->save();
        }
        
        public function delete($id){
            $products=post::find($id);
            // $products->destroy($id);
           //  $products->delete();
         //post::where([userid"=>2 , "id"=>$id])->delete();//lo away basha bas useraka btane delete bka  awa anda loya lanaw arraya 
            $image_path =\public_path()."/assets/upload/".$products->image;  // Value is not URL but directory file path
                if(File::exists($image_path)) {
             post::where(['userid'=>$this->get_user_id(), 'id'=>$id])->delete();
                File::delete($image_path);
            }
        
        }

        public function savecontact(){
            $contact= new contact();
            $contact->title=\request('title');
            $contact->desc=\request('desc');
             $k= $contact->save();
           if ($k===1 || $k===true){
            return redirect('/')->with("success" ,"thanks for reporting");  //wahce sessionakya withaka alerta dachin la jeyak daedaneen

           }
        }
        public function order(){

            $guest_id = Cookie::get("guest") ;
            $size = \request('sizes');
            $post_id =\request('post_id');
            if(empty($guest_id) || empty($size) || empty($post_id)){
                return redirect('/')->with("file_order" , "Sorry Please Fill Blanks");
            }else{
                $cart = new cart();
                $cart->guest_id = $guest_id;
                $cart->size = $size;
                $cart->post_id = $post_id;
                $k= $cart->save();
                if($k === 1 || $k === true){
                    return \redirect('/')->with("success_order", "thanks for fill blanks");
                }
    
            }
    }
    public function cart()
    {
        $cart=cart::all();
      return \view('cart' ,["cart"->$cart]);
    }
}
