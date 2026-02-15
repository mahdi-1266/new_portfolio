<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
  public function HeroSection(){
    return view('admin.backend.home.index');
  }

  public function AddHome(){
    return view('admin.backend.home.add');
  }
}
