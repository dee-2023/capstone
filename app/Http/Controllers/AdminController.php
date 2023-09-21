<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function usersview() {
        $users = User::all();
        if(Auth::user()->role == 'admin'){
            return view('admin.users', ['users' => $users]);
        }

        if(Auth::user()->role == 'user'){
            return view('home')->with('message', "You are not an Admin");
    
        } else if(Auth::user()->role == 'admin'){
            
            return view('admin.users');
          } else {
            return view('login');
        }
        
    }
}
