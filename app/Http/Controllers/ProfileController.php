<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function store()
    {
      $user = Auth::user();
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
