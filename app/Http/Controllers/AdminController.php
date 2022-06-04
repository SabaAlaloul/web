<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function view_product(){

      return view('admin.product');
  }

  public function add_product(Request  $request){
      $product = new Product;
      $product->title = $request->title;
      $product->description = $request->des;
      $product->price	 = $request->price;
      $product->discount_price = $request->disprice;
      $product->quantity	 = $request->quantity;
      $product->catagory= $request->catagory;

       $image =  $request->image;
      $imagename=time(). '.' . $request->file->extension();
      $request->file->move(public_path('product'), $imagename);
      $product->image = $imagename;
      
      $product->save();

      return redirect()->back()->with('message', 'product Added successfully');
}


public function menproduct()
{
    $name = Auth()->user()->name;
    $product = Product::where('catagory', '=', 'men')->get();
    return view('admin.show_product', compact('product', 'name'));
}

public function wommenproduct()
{
    $name = Auth()->user()->name;
    $product = Product::where('catagory', '=', 'wommen')->get();
    return view('admin.show_product', compact('product', 'name'));
}

public function kidsproduct()
{
    $name = Auth()->user()->name;
    $product = Product::where('catagory', '=', 'kids')->get();
    return view('admin.show_product', compact('product', 'name'));
}

public function show_product(){
    $product = Product::all();

    return view('admin.show_product', compact('product'));
}

public function delete_product($id){
    $product = Product::find($id);
    $product->delete();

    return redirect()->back();
}


public function update_product($id){
    $product = Product::find($id);

   

    return view('admin.update_product', compact('product'));
}

public function edit_product(Request  $request,$id){
    $product = Product::find($id);
    $product->title = $request->title;
    $product->description = $request->des;
    $product->price	 = $request->price;
    $product->discount_price = $request->disprice;
    $product->quantity	 = $request->quantity;
    $product->catagory = $request->catagory;
    
    $image =  $request->image;
    $imagename=time(). '.' . $request->file->extension();
    $request->file->move(public_path('product'), $imagename);
    $product->image = $imagename;
  
 

      $product->save();

   

      return redirect()->back();
}


}
