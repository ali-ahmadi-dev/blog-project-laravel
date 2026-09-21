<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Register or Create User 
    public function register(Request $request){
        // dd($request);
        $request->validate([
            'name' => ['required' , 'max:255'],
            'email' => ['required' , 'max:255' , 'email' , 'unique:users'  ],
            'password' => ['required' , 'confirmed' , 'password::min(8)->max(12)->mixCase()->letters()->numbers()->symbols()'  ],
        ]);
    }
    
}