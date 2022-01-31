<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(){
        $users = User::all();
        return view('pages.home', compact('users'));
    }
}
