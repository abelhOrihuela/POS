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







//return json(['success' => true, 'url'=>$request]);

 return response()->json(['name' => 'Abigail']);

}

}
