<?php

namespace App\Http\Controllers;

use App\Actions\SaveContactInfo;
use App\Http\Requests\ContactFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create(){
        if(Auth::check()){
            return view('contact');
        }
        else{
            return redirect('/login');
        }

    }
    public function store (ContactFormRequest $request){
        $data= $request->validated();
        $users=Auth::user();
        if($data['email']==$users['email']){

            $user=auth()->id();
            SaveContactInfo::save($data,$user);
            return redirect()->back()->with('contact','Your message has been sent successfully');

        }
        else{
            return redirect()->back()->with('contactfailed','Something went wrong');

        }
    }
}
