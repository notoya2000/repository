<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function create() {
        return view('create');
    }

    public function created(Request $request) {
        $request->validate([
            'username' => 'required',
            'e-mail' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->input('username');
        $user->email = $request->input('e-mail');
        $user->password = $request->input('password');
        $user->save();
        

        return view('created', ['username' => $user->name]);


    }
}
