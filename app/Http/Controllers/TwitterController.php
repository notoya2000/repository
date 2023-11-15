<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twitter;
class TwitterController extends Controller
{
  public function index(){
    
    return view('timeline');
  }  
   
  public function tweet(){
    return view('post');
  }
  
  public function store(Request $request){
    $twitter=new Twitter();
    
    $twitter->post = $request->input('post');
    $twitter->user_id = 1;
    $twitter->save();

    return view('timeline');
  }
}
