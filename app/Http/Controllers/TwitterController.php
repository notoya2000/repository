<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TwitterController extends Controller
{
  public function index(){
    return view('timeline');
  }  
   
  public function tweet(){
    return view('post');
  }

}
