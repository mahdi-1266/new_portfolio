<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
	/* ______ Logout Start ______ */ 
	public function AdminLogout(Request $request){
		Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
	}
	/* ______ Logout End ______ */ 


	/* ______ Admin Profile Start ______ */ 
	public function AdminProfile(){
		$id = Auth::user()->id;
		$profileData = User::find($id);
		return view('admin.admin_profile', compact('profileData'));
	}
	/* ______ Admin Profile End ______ */ 


	/* ______ Store Profile Start ______ */ 
	public function StoreProfile(Request $request){
		$id = Auth::user()->id;
		$data = User::find($id);

		$data->name = $request->name;
		$data->email = $request->email;


		$oldPhotoPath = $data->photo;
		if($request->hasFile('photo')){
			$image = $request->file('photo');
			$imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			$image->move(public_path('upload/user_image/'), $imageName);
			$data->photo = $imageName;

			if($oldPhotoPath && $oldPhotoPath !== $imageName){
				$this->deleteOldImage($oldPhotoPath);
			}
		}
		$data->save();
		$notification = array(
			'message' => 'Profile Updated Successfully!',
			'alert-type' => 'success'
		);
		return redirect()->back()->with($notification);
	}

	private function deleteOldImage(string $oldPhotoPath) :void{
		$fullPath = public_path('upload/user_image/'.$oldPhotoPath);
		if(file_exists($fullPath)){
			unlink($fullPath);
		}
	}

	/* ______ Store Profile End ______ */ 


	/* ______ Update Password Start ______ */
	public function UpdatePassword(Request $request){
		$user = Auth::user();
		$request->validate([
			'old_password' => 'required',
			'new_password' => 'required|min:8|confirmed',
		]);

		if(!Hash::check($request->old_password, $user->password)){
			$notification = array(
				'message' => 'Old password does not match!',
				'alert-type' => 'error',
			);
			return back()->with($notification);
		}

		User::whereId($user->id)->update([
			'password' => Hash::make($request->new_password)
		]);

		Auth::logout(); 
		$notification = array(
			'message' => 'Password updated successfully!',
			'alert-type' => 'success',
		);
		return redirect()->route('login')->with($notification);

	} 
	/* ______ Update Password End ______ */ 



}
