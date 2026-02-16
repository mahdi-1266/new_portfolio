<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
  public function SkillSection(){
		return view('frontend.layout.skill.index');
	}
}
