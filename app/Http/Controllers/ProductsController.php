<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsShowResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function save(){
      $product= Products::query()->get();
      $data=ProductsShowResource::collection($product);
      return view('products')->with(['data'=>$data]);



  }
}
