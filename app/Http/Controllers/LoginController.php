<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginFormRequest $request)
    {
        $data = $request->validated();
        if (auth()->attempt($data)) {
            return redirect()->To('/home');
        }
        else {
            return redirect()->back()->with('failedLogin','wrong name or password');
        }
    }



}
