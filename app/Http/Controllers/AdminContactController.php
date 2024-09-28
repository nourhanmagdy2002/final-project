<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminContactResource;
use App\Models\Contacts;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function store(){
        $contacts= Contacts::query()->orderBy('id','desc')->get();
        AdminContactResource::collection($contacts);
        return view('admins.contact')->with(['contacts'=>$contacts]);
    }

}
