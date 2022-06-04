<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(){
        $product = Product::paginate(6);

        return view('home.userpage',compact('product'));
    }

  

    public function redirect(){
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            $product = Product::paginate(6);
            return view('home.userpage',compact('product'));
            
        }


    }
    public function product_detales($id){
        $product = Product::find($id);
        return view('home.product_detales',compact('product'));
    }

    public function prod(){
        $product = Product::paginate(6);
       
        return view('home.product_home',compact('product'));
    }

    public function contact_us(){
      
       
        return view('home.contact_us');
    }
    public function about(){
      
       
        return view('home.about');
    }
    public function test(){
      
       
        return view('home.test');
    }

    
}
