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

    public function userShow($id){
        $user = User::FindOrFail($id);
        return view('pages-user.show-user', compact('user'));
    }

    public function userCreate(){
        return view('pages-user.create-user');
    }

    public function userStore(Request $request){
        $data = $request -> validate([
            'name' => 'string|max:30',
            'lastname' => 'string|max:30',
            'username' => 'required|string|unique:users|max:30', 
            'email' => 'required|string|unique:users|max:50', 
            'password' => 'required|string|max:30',
        ]);
        if($data['name'] == null)
        return $data['name'] = 'undefined';

        if($data['lastname'] == null)
        return $data['lastname'] = 'undefined';

        dd($data);
        $user = User::create($data);
        return redirect() -> route('userShow', $user -> id);
    }
}
