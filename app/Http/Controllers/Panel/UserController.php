<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function user_view(){
        $users = User::where('role','singer')->get();
        return view('musicworld.panel.user_view',compact('users'));
    }
    public function company_view(){
        $users = User::where('role','company')->get();
        return view('musicworld.panel.company_view',compact('users'));
    }
    public function signup_view(){
        return view('auth.register');
    }
}
