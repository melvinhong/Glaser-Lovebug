@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __('My Profile') }}</div>

                <div class="card-body">
                  <div class="form-group row">
                    <div class="profile-header-img col-4 mx-auto d-flex justify-content-center flex-wrap">
                      <img class="rounded-circle" src="{{ Auth::user()->profile_image }}" style="width: 200px; height:200px;"/>
                    </div>
                  </div>
                  <div class="form-group row"></div>

                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Name</label>
                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly></input>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="age" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Age</label>
                      <div class="col-md-6">
                        <input id="age" type="text" class="form-control" name="age" value="{{ Auth::user()->age }}"readonly></input>
                      </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="dob" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Date of Birth</label>
                      <div class="col-md-6">
                        <input id="dob" type="date" class="form-control" name="dob" value="{{ Auth::user()->age }}"readonly></input>
                      </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Gender</label>
                      <div class="col-md-6">
                        <input id="gender" type="text" class="form-control" name="gender" value="{{ Auth::user()->gender }}" readonly></input>
                      </div>
                  </div>

                 <div class="form-group row">
                   <label for="location" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Location</label>
                    <div class="col-md-6">
                      <input id="location" type="text" class="form-control" name="location" value="{{ Auth::user()->location }}" readonly></input>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ethnic" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Ethnic</label>
                      <div class="col-md-6">
                        <input id="ethnic" type="text" class="form-control" name="ethnic" value="{{ Auth::user()->ethnic }}" readonly></input>
                      </div>
                  </div>

                    <div class="form-group row">
                      <label for="haircolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Haircolor</label>
                        <div class="col-md-6">
                          <input id="haircolor" type="text" class="form-control" name="gender" value="{{ Auth::user()->haircolor }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="eyecolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Eyecolor</label>
                        <div class="col-md-6">
                          <input id="eyecolor" type="text" class="form-control" name="eyecolor" value="{{ Auth::user()->eyecolor }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="skincolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Skincolor</label>
                        <div class="col-md-6">
                          <input id="skincolor" type="text" class="form-control" name="skincolor" value="{{ Auth::user()->skincolor }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="hobbies" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Hobbies</label>
                        <div class="col-md-6">
                          <input id="hobbies" type="text" class="form-control" name="hobbies" value="{{ Auth::user()->hobbies }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="relationship" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Relationship I'd like to find</label>
                        <div class="col-md-6">
                          <input id="relationship" type="text" class="form-control" name="relationship" value="{{ Auth::user()->relationship }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="occupation" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Occupation</label>
                        <div class="col-md-6">
                          <input id="occupation" type="text" class="form-control" name="occupation" value="{{ Auth::user()->occupation }}" readonly></input>
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ url('/profile/info') }}"><button type="submit" class="btn btn-primary">Update Profile</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
