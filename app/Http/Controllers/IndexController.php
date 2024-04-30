<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Cat;
use App\Models\Product;

use Illuminate\Http\Request;


class IndexController extends Controller
{

    public function index(Request $request){
        
        $sliders = Slider::all();
        $cats = Cat::all();

        return view('index', ['sliders'=>$sliders, 'cats'=>$cats]);
    }
     public function infopotrebitel(Request $request){
         $cats = Cat::all();

        return view('infopotrebitel', ['cats'=>$cats]);
    }

    public function reckclear(Request $request){
         $cats = Cat::all();

        return view('reckclear', ['cats'=>$cats]);
    }

    public function politika(Request $request){
         $cats = Cat::all();

        return view('politika', ['cats'=>$cats]);
    }


    public function garantiya(Request $request){
         $cats = Cat::all();

        return view('garantiya', ['cats'=>$cats]);
    }

    public function dostavka(Request $request){
         $cats = Cat::all();

        return view('dostavka', ['cats'=>$cats]);
    }

    public function addcartproduct(Request $request){
        $id = $request->id;
        if ($request->session()->has('carts.cart')) {
            $carts = $request->session()->get('carts.cart');      
            if(in_array($id, $carts)){
                 $request->session()->push('carts.cart', $id);

                  return 1;
            }else{

                $request->session()->push('carts.cart', $id);
                return 2;
            }
            
            
        }else{
            $request->session()->push('carts.cart', $id);
        }
        return 3;
        
    }

    
    
    public function cart(Request $request){
        $prod_list_cart = [];
        $s = 0;
        if ($request->session()->has('carts.cart')) {
            $carts = $request->session()->get('carts.cart');
            $counts = array_count_values($carts);
            $i=0;
            foreach($counts as $key=>$value){
                $pr = Product::where('id', $key)->first();
                $s += ($pr->price * $value);
                $prod_list_cart[$i]['id'] = $key;
                $prod_list_cart[$i]['title'] = $pr->title;
                $prod_list_cart[$i]['description'] = $pr->description;
                $prod_list_cart[$i]['price'] = $pr->price;
                $prod_list_cart[$i]['img'] = $pr->img;
                $prod_list_cart[$i]['count'] = $value;
                $i++;
            }
        }

        $sliders = Slider::all();
        $cats = Cat::all();

        return view('cart', ['sliders'=>$sliders, 'cats'=>$cats, 'prod_list_cart'=> $prod_list_cart, 's'=>$s]);
    }

    public function getsumma(Request $request){
         $s = 0;
            if ($request->session()->has('carts.cart')) {
                $carts = $request->session()->get('carts.cart');
                $counts = array_count_values($carts);
                $i=0;
                foreach($counts as $key=>$value){
                    $pr = Product::where('id', $key)->first();
                    $s += ($pr->price * $value);
                    $prod_list_cart[$i]['id'] = $key;
                    $i++;
                }
            }
        return $s;
    }
    public function productid(Request $request, $id){
        $count = 0;
         if ($request->session()->has('carts.cart')){
            foreach($request->session()->get('carts.cart') as $c){
                if($c==$id){
                    $count++;
                }
            }
         }
         
        

        $sliders = Slider::all();
        $cats = Cat::all();
        $product = Product::where('id', $id)->first();
        return view('productid', ['request'=>$request, 'sliders'=>$sliders, 'cats'=>$cats, 'product'=>$product, 'count'=>$count]);
    }
    public function ajaxcolor(Request $request){
        $id = $request->id;
        $idc = $request->idc;
        $produc = Product::select('images_color')->where('id', $id)->first();
        return json_decode($produc->images_color)[$idc];
    }

    public function catid(Request $request, $id){
       
        $pr_cats = Product::where('cat', $id)->get();
        $cats = Cat::all();
        return view('catid', ['cats'=>$cats, 'pr_cats'=>$pr_cats]);
    }
    public function addcartproductminus(Request $request){
        $id = $request->id;
        if ($request->session()->has('carts.cart')) {
            $carts = $request->session()->get('carts.cart');
            $request->session()->forget('carts.cart');
 
            $m = false;   
           foreach($carts as $key=>$cart){
                if($cart==$id && $m==false){
                    unset($carts[$key]);
                    $m=true;
                }
           }
            $request->session()->put('carts.cart', $carts);
  
        }
    }
}