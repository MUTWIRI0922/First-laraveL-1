<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class maincontroller extends Controller
{
    //
    public function create()
    {
        $user = new User();
        return view('Register', ['user' => $user, 'action' => 'Create', 'actionurl' => 'Store']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);
       
        User::create($validatedData);
        return redirect('/Dashboard')->with('success', 'registered successfully.');
    }

}
