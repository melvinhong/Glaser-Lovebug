<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.profile');
    }

    public function store(Request $request)
    {

      if ($request->hasFile('profile_image'))
      {
        $profile_image = $request->file('profile_image');
        $filename = time() . '.' . $profile_image->getClientOriginalExtension();
        Image::make($profile_image)->resize(300,300)->save( public_path ('/storage/storage/Profile_Picture/' . $filename));
        Image::make($profile_image)->resize(300,300)->save( public_path ('/Profile_Picture/' . $filename));

      } else {
        return redirect('/profile')->with('success', 'Profile has been updated.');;
      }

      $user = Auth::user();
      $user->profile_image = $filename;
      $user->profile_image = request()->file('profile_image')->store('Profile_Picture');
      $user->profile_image = request()->file('profile_image')->store('storage/Profile_Picture');

      $user->name = request()->input('name');
      $user->age = request()->input('age');
      $user->gender = request()->input('gender');
      $user->location = request()->input('location');
      $user->ethnic = request()->input('ethnic');
      $user->haircolor = request()->input('haircolor');
      $user->eyecolor = request()->input('eyecolor');
      $user->skincolor = request()->input('skincolor');
      $user->hobbies = request()->input('hobbies');
      $user->relationship = request()->input('relationship');
      $user->occupation = request()->input('occupation');
      $user->save();

      return redirect('/profile')->with('success', 'Profile has been updated.');;
    }
}
