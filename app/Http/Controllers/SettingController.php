<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use input;

class SettingController extends Controller
{
    //
    public function update($id)
     {
       $settings = users::where('id',$id)->first();
       ([
             'ageper1' => 'required',
             'ageper2' => 'required',
             'genderper' =>'required' ,
             'locationper' => 'required',
             'ethnicper' => 'required' ,
             'haircolorper' => 'required',
             'eyecolorper' => 'required',
             'skincolorper' => 'required',
             'hobbiesper' => 'required',
             'relationshipper' => 'required',
             'occupationper' => 'required'

       ]);






     }
    //   $db = DB::table('users');
    //
    //   $editinfo = $db -> where('id','=','{{ Auth::user()->id }}');->update([
        // 'ageper1' => ,
        // 'ageper2' => ,
        // 'genderper' => ,
        // 'locationper' => ,
        // 'ethnicper' => ,
        // 'haircolorper' => ,
        // 'eyecolorper' => ,
        // 'skincolorper' => ,
        // 'hobbiesper' => ,
        // 'relationshipper' => ,
        // 'occupationper' => ,
    //   ])
    //
    //   dd($editinfo);

}
