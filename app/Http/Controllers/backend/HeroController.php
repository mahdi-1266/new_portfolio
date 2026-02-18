<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroModel;

class HeroController extends Controller
{
  public function HeroSection(){
    $hero = HeroModel::latest()->get();
    return view('admin.backend.home.index', compact('hero'));
  }

  public function AddHome(){
    return view('admin.backend.home.add');
  }

  public function StoreHome(Request $request){
    $validated = $request->validate([
      'name' => 'required|string|max:50',
      'github_link' => 'required|string|max:255',
      'facebook_link' => 'required|string|max:255',
      'linkedin_link' => 'required|string|max:255',
      'instagram_link' => 'required|string|max:255',
      'description' => 'required|string|max:255',
    ]);

    HeroModel::create([
      'name' => $validated['name'],
      'github_link' => $validated['github_link'],
      'facebook_link' => $validated['facebook_link'],
      'linkedin_link' => $validated['linkedin_link'],
      'instagram_link' => $validated['instagram_link'],
      'description' => $validated['description'],
    ]);

    $notification = array(
      'message' => 'Hero added successfully!',
      'alert-type' => 'success'
    );

    return redirect()->route('admin.home')->with($notification);
  }

  public function EditHome($id){
    $home = HeroModel::find($id);
    return view('admin.backend.home.edit', compact('home'));
  }


  public function UpdateHome(Request $request){
    $homeId = $request->id;

    $validated = $request->validate([
      'name' => 'required|string|max:50',
      'github_link' => 'required|string|max:255',
      'facebook_link' => 'required|string|max:255',
      'linkedin_link' => 'required|string|max:255',
      'instagram_link' => 'required|string|max:255',
      'description' => 'required|string|max:255',
    ]);

    HeroModel::find($homeId)->update([
      'name' => $validated['name'],
      'github_link' => $validated['github_link'],
      'facebook_link' => $validated['facebook_link'],
      'linkedin_link' => $validated['linkedin_link'],
      'instagram_link' => $validated['instagram_link'],
      'description' => $validated['description'],
    ]);

    $notification = array(
      'message' => 'Hero updated successfully!',
      'alert-type' => 'success'
    );

    return redirect()->route('admin.home')->with($notification);
  }

  public function DeleteHome($id){
    HeroModel::find($id)->delete();
    $notification = array(
      'message' => 'Hero deleted successfully!',
      'alert-type' => 'success'
    );
    return redirect()->route('admin.home')->with($notification);
  }
}
