<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
  public function AboutSection(){
    $about = About::latest()->get();
    return view('admin.backend.about.index', compact('about'));
  }

  public function AddAbout(){
    return view('admin.backend.about.add');
  }

  public function StoreHome(Request $request){

    $validated = $request->validate([
      'name' => 'required|string|max:20',
      'description' => 'required|string|max:800',
      'photo' => 'required|image|mimes:jpg,png,gif,jpeg,webp|max:2048'
    ]);
    
    if($request->file('photo')){
      $image = $request->file('photo');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(400, 400)->save(public_path('upload/about/'.$imageName));
      $saveImage = 'upload/about/'.$imageName;
    
      About::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'photo' => $saveImage,
      ]);
    }

    $notification = array(
      'message' => 'About added successfully!',
      'alert-type' => 'success',
    );
    return redirect()->route('admin.about')->with($notification);
  }

  public function EditAbout($id){
    $about = About::find($id);
    return view('admin.backend.about.edit', compact('about'));
  }

  public function UpdateAbout(Request $request){
    $about = About::findOrFail($request->id);

    $validated = $request->validate([
      'name' => 'required|string|max:20',
      'description' => 'required|string|max:800',
      'photo' => 'nullable|image|mimes:jpg,png,gif,jpeg,webp|max:2048'
    ]);
    
    if($request->file('photo')){

      $image = $request->file('photo');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(350, 350)->save(public_path('upload/about/'.$imageName));

      $saveImage = 'upload/about/'.$imageName;

      if($about->photo && file_exists(public_path($about->photo))){
        unlink(public_path($about->photo));
      }
    
      $about->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'photo' => $saveImage,
      ]);

      $notification = array(
        'message' => 'About updated with image successfully!',
        'alert-type' => 'success',
      );
      return redirect()->route('admin.about')->with($notification);
    }
    else{
      $about->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
      ]);

      return redirect()->route('admin.about')->with([
        'message' => 'About added without image successfully!',
        'alert-type' => 'success',
      ]);
    }
  }

  public function DeleteAbout($id){
    About::findOrFail($id)->delete();
    return redirect()->route('admin.about')->with([
      'message' => 'About deleted successfully!',
      'alert-type' => 'success'
    ]);
  }
}
