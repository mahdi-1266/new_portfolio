<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function AboutSection(){
		return view('frontend.layout.about.index');
	}


  public function ContactSection(){
    return view('frontend.layout.contact.index');
  }


  public function PortfolioSection(){
		return view('frontend.layout.portfolio.index');
	}


  public function ResumeSection(){
    return view('frontend.layout.resume.index');
  }


  public function SkillSection(){
		return view('frontend.layout.skill.index');
	}

}
