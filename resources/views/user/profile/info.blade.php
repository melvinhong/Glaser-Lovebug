@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                  <FORM ACTION="/profile/info" METHOD="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                      <div class="form-group row">
                        <div class="profile-header-img col-4 mx-auto d-flex justify-content-center flex-wrap">
                          <img class="rounded-circle" src="../{{ Auth::user()->profile_image }}" style="width: 200px; height:200px;"/>
                        </div>
                      </div>
                      <div class="form-group row"></div>

                      <div class="form-group row">
                        <label for="profile_image" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Profile Image</label>
                          <div class="col-md-6">
                            <input id="profile_image" type="file" class="form-control" name="profile_image"></input>
                          </div>
                      </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Name</label>
                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"></input>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="age" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Age</label>
                      <div class="col-md-6">
                        <input id="age" type="text" class="form-control" name="age" value="{{ Auth::user()->age }}" required></input>
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Gender</label>
                      <div class="col-md-6">
                        <select id="gender" type="text" class="form-control" name="gender" value="{{ Auth::user()->gender }}" required>
                          <!-- <option selected hidden value="">------</option> -->
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Transgender">Transgender</option>
                          <option value="Prefer Not to Say">Prefer Not to Say</option>
                        </select>
                      </div>
                  </div>

                 <div class="form-group row">
                   <label for="location" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Location</label>
                    <div class="col-md-6">
                      <select id="location" type="text" class="form-control" name="location" value="{{ Auth::user()->location }}" required>
                        <option value="Victoria">Victoria</option>
                        <option value="New South Wales">New South Wales</option>
                        <option value="Queensland">Queensland</option>
                        <option value="South Australia">South Australia</option>
                        <option value="Western Australia">Western Australia</option>
                        <option value="Tasmania">Tasmania</option>
                        <option value="Prefer Not to Say">Prefer Not to Say</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ethnic" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Ethnic</label>
                      <div class="col-md-6">
                        <select id="ethnic" type="text" class="form-control" name="ethnic" value="{{ Auth::user()->ethnic }}" required>
                          <option value="Aboriginal Australian">Aboriginal Australian</option>
							  <option value="African">African</option>
							  <option value="British">British</option>
							  <option value="Chinese">Chinese</option>
							  <option value="Dutch">Dutch</option>
							  <option value="German">German</option>
							  <option value="Greek">Greek</option>
							  <option value="Hispanic">Hispanic</option>
							  <option value="Indian">Indian</option>
                              <option value="Irish">Irish</option>
                              <option value="Italian">Italian</option>
							  <option value="Japanese">Japanese</option>
							  <option value="Jews">Jews</option>
							  <option value="Korean">Korean</option>
                              <option value="Latino">Latino</option>
                              <option value="Other">Other</option>
                        </select>
                      </div>
                  </div>

                    <div class="form-group row">
                      <label for="haircolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Haircolor</label>
                        <div class="col-md-6">
                          <select id="haircolor" type="text" class="form-control" name="haircolor" value="{{ Auth::user()->haircolor }}" required>
                            <option value="Black">Black</option>
                            <option value="Brown">Brown</option>
                            <option value="Blond">Blond</option>
                            <option value="Auburn">Auburn</option>
                            <option value="White">Gray/White</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="eyecolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Eyecolor</label>
                        <div class="col-md-6">
                          <select id="eyecolor" type="text" class="form-control" name="eyecolor" value="{{ Auth::user()->eyecolor }}" required>
                            <option value="Amber">Amber</option>
                            <option value="Blue">Blue</option>
                            <option value="Brown">Brown</option>
                            <option value="Gray">Gray</option>
                            <option value="Green">Green</option>
                            <option value="Hazel">Hazel</option>
                            <option value="Red">Red</option>
                            <option value="Violet">Violet</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="skincolor" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Skincolor</label>
                        <div class="col-md-6">
                          <select id="skincolor" type="text" class="form-control" name="skincolor" value="{{ Auth::user()->skincolor }}" required>
                            <option value="Black">Black</option>
                            <option value="Yellow">Yellow</option>
                            <option value="White">White</option>
                            <option value="Prefer Not to Say">Prefer Not to Say</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="hobbies" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Hobbies</label>
                        <div class="col-md-6">
                          <select id="hobbies" type="text" class="form-control" name="hobbies" value="{{ Auth::user()->hobbies }}" required>
                            <option value="Traditional Sports">Traditional Sports</option>
                            <option value="Outdoor Adventures">Outdoor Adventures</option>
                            <option value="Watch TV Series/Movies">Watch TV Series/Movies</option>
                            <option value="Writing">Writing</option>
                            <option value="" disabled>---Adding more hobbies soon---</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="relationship" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Relationship I'd like to find</label>
                        <div class="col-md-6">
                          <select id="relationship" type="text" class="form-control" name="relationship" value="{{ Auth::user()->relationship }}" required>
                            <option value="Short-term">Short-term</option>
                            <option value="Long-term">Long-term</option>
                            <option value="One Night Stand">One Night Stand</option>
                            <option value="Just friendship">Just friendship</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="occupation" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Occupation</label>
                        <div class="col-md-6">
                          <select id="occupation" type="text" class="form-control" name="occupation" value="{{ Auth::user()->occupation }}" required>
                            <option value="Student">Student</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Worker">Worker</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Accountant">Accountant</option>
                            <option value="Auditor">Auditor</option>
                            <option value="Artist">Artist</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Others/prefer Not to Say">Others/Prefer Not to Say</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ url('/profile/info') }}"><button type="submit" class="btn btn-primary">Update</button></a>
                        </div>
                    </div>
                  </FORM>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
