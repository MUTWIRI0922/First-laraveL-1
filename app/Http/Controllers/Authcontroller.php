<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    //login
    public function login(){

        return view('login');
    }
    public function loginsubmit(Request $request){
        $email=$request->email;
        $password=$request->password;
        if($email=="")
        {}
    }
    //register
    public function register(){
        return view('register');
    }
    public function registersubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        if($user->save()){
            return redirect(route('login'))-> with('success','User created successfully');
      
     }
        return redirect(route('register'))-> with('fail','Something went wrong');
    }
}
