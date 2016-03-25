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
      $product->description=$request->description;
      $product->cost=$request->cost;
      $product->price=$request->price;
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

      $product=Product::where("code", "=", $request->code)->get();

      if($product){
        return response()->json($product->first());
      }

    return response()->json(['succes' => 'No exist']);
    //return response()->json(['succes' => $request->code]);


    //  return response()->json(['succes' => true, 'name' => $product->name  ]);

      //return Response::json(['success' => true, 'url'=>$candidate->url]);
    }

  }

  public function listProducts(){
    $products=Product::all();

    return view('product.list')->with('products', $products);
  }
}
