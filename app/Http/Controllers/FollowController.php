<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FollowController extends Controller
{
  public function follow(Request $user)
    {
        
        
        Auth::user()->followings()->attach($user);
        return back();
    }

    public function unfollow(User $user)
    {
        // フォロー解除する
        Auth::user()->followings()->detach($user);
        return back();
    }
}
