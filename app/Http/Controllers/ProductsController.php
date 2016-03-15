<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ProductsController extends Controller
{
  public function index(){
    return view('welcome');
  }

  public function newproduct(){
    return view('product.new');
  }

  public function create(Request $request){
    $errors         = array();  	// array to hold validation errors
    $data 			= array(); 		// array to pass back data

    $product=new Product();
    $product->name=$request->name;
    $product->description1=$request->description1;
    $product->description2=$request->description2;
    $product->code=$request->code;
    $product->other=$request->other;

    if($product->save()){
      return response()->json(['return' => 'Operacion exitosa...']);
    }else{
      return response()->json(['return' => 'Operacion fallida...']);
    }


  }
}
