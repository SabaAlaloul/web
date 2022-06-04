<?php

namespace App\Http\Controllers;

use App\Models\Aboutt;
use Illuminate\Http\Request;

class AbouttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
      
        return view('admin.add_about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
  public function about(Request  $request){
    $product = new Aboutt();
    $product->feacbook = $request->facebook;
    $product->twitter= $request->tiwtter;
    $product->instagram	 = $request->instagram;
    $product->linkedin = $request->linkedin;
    $product->phone	 = $request->phone;
    $product->address= $request->address;
    $product->location= $request->location;

   
    
    $product->save();

    return redirect()->back()->with('message', 'product Added successfully');
}

public function show(){
    $product = Aboutt::all();

    return view('home.about', compact('product'));
}
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutt  $aboutt
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutt $aboutt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutt  $aboutt
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutt $aboutt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutt  $aboutt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutt $aboutt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutt  $aboutt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutt $aboutt)
    {
        //
    }
}
