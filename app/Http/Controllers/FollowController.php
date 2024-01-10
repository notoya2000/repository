<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FollowController extends Controller
{
  public function follow(User $user)
    {
        
        //dd($user);
        Auth::user()->followings()->attach($user->id);
        return back();
    }

    public function unfollow(User $user)
    {
        // フォロー解除する
        
        Auth::user()->followings()->detach($user->id);
        return back();
    }
}
