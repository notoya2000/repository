<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function index(){
        // 現在ログインしているユーザーのIDを取得
        $currentUserId = Auth::id();

        // ログインユーザーを除くすべてのユーザーを取得
        $users = User::where('id', '!=', $currentUserId)->get();

        return view('index', compact('users'));
    }
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
        $user->password = Hash::make($request->input('password') );
        $user->save();
        
        session(['username' => $user->name]);
        return view('created', ['username' => $user->name]);


    }


    

}
