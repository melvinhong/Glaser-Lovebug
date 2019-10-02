<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'ethnic' => ['required', 'string', 'max:255'],
            'haircolor' => ['required', 'string', 'max:255'],
            'eyecolor' => ['required', 'string', 'max:255'],
            'skincolor' => ['required', 'string', 'max:255'],
            'hobbies' => ['required', 'string', 'max:255'],
            'relationship' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],

            'ageper1' => ['required', 'string', 'max:255'],
            'ageper2' => ['required', 'string', 'max:255'],
            'genderper' => ['required', 'string', 'max:255'],
            'locationper' => ['required', 'string', 'max:255'],
            'ethnicper' => ['required', 'string', 'max:255'],
            'haircolorper' => ['required', 'string', 'max:255'],
            'eyecolorper' => ['required', 'string', 'max:255'],
            'skincolorper' => ['required', 'string', 'max:255'],
            'hobbiesper' => ['required', 'string', 'max:255'],
            'relationshipper' => ['required', 'string', 'max:255'],
            'occupationper' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'age' =>$data['age'],
            'gender' =>$data['gender'],
            'location' =>$data['location'],
            'ethnic' =>$data['ethnic'],
            'haircolor' =>$data['haircolor'],
            'eyecolor' =>$data['eyecolor'],
            'skincolor' =>$data['skincolor'],
            'hobbies' =>$data['hobbies'],
            'relationship' =>$data['relationship'],
            'occupation' =>$data['occupation'],

            'ageper1' =>$data['ageper1'],
            'ageper2' =>$data['ageper2'],
            'genderper' =>$data['genderper'],
            'locationper' =>$data['locationper'],
            'ethnicper' =>$data['ethnicper'],
            'haircolorper' =>$data['haircolorper'],
            'eyecolorper' =>$data['eyecolorper'],
            'skincolorper' =>$data['skincolorper'],
            'hobbiesper' =>$data['hobbiesper'],
            'relationshipper' =>$data['relationshipper'],
            'occupationper' =>$data['occupationper'],

        ]);
    }
}
