<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Backend.login.login');
    }
    public function registration(){
        return view('Backend.registration.registrationform');
    }
    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('login.view');

    }
    public function dologin(Request $request){
        $check=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('dashboard');
    }
    public function logout(){


            Auth::logout();

            return redirect()->route('login.view');

        }
    }

