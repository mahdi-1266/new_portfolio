<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
  public function ResumeSection(){
    return view('frontend.layout.resume.index');
  }
}
