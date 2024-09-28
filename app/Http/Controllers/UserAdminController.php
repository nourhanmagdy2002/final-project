<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersAdminResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{

   public function store(){
      $user= User::query()->orderBy('id','DESC')->get();
     $data= UsersAdminResource::collection($user);
       return view('admins.users')->with(['data'=>$data]);
   }


}
