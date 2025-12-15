<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view("login");
    }


    public function check(Request $request)
    {
        $validate= $request->validate([
        "email"=> "required|email",
        "password"=> "required|min:8"
       ]);
if(Auth::attempt($validate)){
    return redirect("dashboard");
    }
    return back()->with("error","قم بتسجيل الدخول");

}
public function logout()
{
    Auth::logout();
    return redirect("login");
}
}
