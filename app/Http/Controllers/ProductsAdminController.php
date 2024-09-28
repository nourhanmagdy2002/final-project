<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminProductsResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsAdminController extends Controller
{
    public function store(){
        $products= Products::query()->orderBy('id','DESC')->get();
        AdminProductsResource::collection($products);
        return view('admins.products', ['products'=>$products]);

    }
}
