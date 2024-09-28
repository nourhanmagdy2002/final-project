<?php

namespace App\Http\Controllers;

use App\Actions\SaveUserInfo;
use App\Http\Requests\userFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(UserFormRequest $request){
        $data= $request->validated();

        if($data){
          SaveUserInfo::save($data);
            return redirect()->To('/auth/login');
       }
        else{
            redirect()->back()->with('failedRegister','Wrong data');
        }





    }
}
