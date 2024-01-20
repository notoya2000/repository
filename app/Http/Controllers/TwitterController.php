<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twitter;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidationRequest;

class TwitterController extends Controller
{
  public function index(){
    $username = session('username');
    $tweets = $this->getTimelineTweet();
    return view('timeline', compact('tweets','username'));
  }  

  public function getTimelineTweet(){
    // ログインユーザーのIDとフォローしているユーザーのIDを取得
    $userIds = Auth::user()->followings->pluck('id')->toArray();
    array_push($userIds, Auth::id());
    
    // これらのユーザーのツイートを取得
    $tweets = Twitter::whereIn('user_id', $userIds)->latest()->get();
    return $tweets;
  }
  public function indetail(){
    $username = session('username');
    
    return view('detail', ['username' => $username]);
  }
  public function tweet(){
    return view('post');
  }
  
  public function store(ValidationRequest $request){
    $twitter=new Twitter();
    $username = session('username');
  
    $twitter->post = $request->input('post');
    $twitter->user_id = Auth::id();
    $twitter->save();

    $tweets = $this->getTimelineTweet();

    return view('timeline', compact('tweets','username'));
  }

  public function follow(){
    $followings = Auth::user()->followings;
    return view('follow', compact('followings'));
    
  }

  public function follower(){
    $followers = Auth::user()->followers;
    return view('follower', compact('followers'));

  }
}
