<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
  public function index(){
    return view('product.index');
  }

  public function newproduct(){
    return view('product.new');
  }

  public function create(Request $request){
    $errors         = array();  	// array to hold validation errors
    $data 			= array(); 		// array to pass back data

    if($request->ajax()){

      $product= new Product();
      $product->name=$request->name;
      $product->description1=$request->description1;
      $product->description2=$request->description2;
      $product->other=$request->other;
      $product->code=$request->code;


      if($product->save()){
        //return Response::json(['success' => true, 'url'=>$candidate->url]);
        return response()->json(['succes' => true, 'ok' => 'Operacion exitosa' ]);
      }else{
        return response()->json(['return' => "Operacion fallida..."]);
      }
    }
  }

  public function store(Request $request){

    if($request->ajax()){

      $product=Product::where('code', "=", $request->code);

      return response()->json(['succes' => true, 'ok' => 'Operacion exitosa' ]);
    }

  }
}
