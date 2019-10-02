@extends('layouts.indexpage')

@section('title')
LoveBug
@endsection

@section('content')
<div class="motto text-center">
  <h1 style="font-size: 4.6em;">Make dating great again.</h1>
  <br />
  <a class="btn btn-outline-neutral btn-round" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
  <a class="btn btn-outline-neutral btn-round" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Sign Up</a>
</div>

<div class="modal fade login" style="padding-top: 120px;" id="loginModal">
     <div class="modal-dialog login animated">
         <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="font-weight: 500;">Login with</h4>
             </div>
               <div class="modal-body">
                   <div class="box">
                        <div class="content">
                           <!-- <div class="social">
                             <a id="facebook_login" class="circle facebook" href="#">
                                 <i class="fa fa-facebook-f"></i>
                             </a>
                               <a id="instagram_login" class="circle instagram" href="#">
                                   <i class="fa fa-instagram fa-fw"></i>
                               </a>
                           </div>
                           <div class="division">
                               <div class="line l"></div>
                                 <span>or</span>
                               <div class="line r"></div>
                           </div> -->

                           <div class="form loginBox">
                               <form method="POST" action="{{ route('login') }}">
                                 @csrf
                              <div class="form-group row">
                               <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                             </div>

                              <div class="form-group row">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                             </div>

                               <button type="submit" class="btn btn-default btn-login">{{ __('Login') }}</button>
                               </form>
                           </div>
                        </div>
                   </div>
                   <div class="box">
                       <div class="content registerBox" style="display:none;">
                        <div class="form">
                           <form method="POST" action="{{ route('register') }}">
                             @csrf
                             <div class="form-group row">
                           <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                           @error('name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                          <div class="form-group row">
                           <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                          <div class="form-group row">
                           <input id="age" class="form-control @error('age') is-invalid @enderror" type="text" placeholder="Age" name="age" value="{{ old('age') }}" required autocomplete="age">
                           @error('age')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="gender" class="form-control @error('age') is-invalid @enderror" type="text" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                             <option selected hidden value="">Please select your gender</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                             <option value="Transgender">Transgender</option>
                             <option value="Prefer Not to Say">Prefer Not to Say</option>
                           </select>
                           @error('gender')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="location" class="form-control @error('location') is-invalid @enderror" type="text" name="location" value="{{ old('location') }}" required autocomplete="location">
                             <option selected hidden value="">Please select your location</option>
                             <option value="Victoria">Victoria</option>
                             <option value="New South Wales">New South Wales</option>
                             <option value="Queensland">Queensland</option>
                             <option value="South Australia">South Australia</option>
                             <option value="Western Australia">Western Australia</option>
                             <option value="Tasmania">Tasmania</option>
                             <option value="Prefer Not to Say">Prefer Not to Say</option>
                           </select>
                           @error('location')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="ethnic" class="form-control @error('ethnic') is-invalid @enderror" type="text" name="ethnic" value="{{ old('ethnic') }}" required autocomplete="ethnic">
                             <option selected hidden value="">Please select your ethnic</option>
                             <option value="British">British</option>
                             <option value="Irish">Irish</option>
                             <option value="Italian">Italian</option>
                             <option value="German">German</option>
                             <option value="Chinese">Chinese</option>
                             <option value="Aboriginal Australian">Aboriginal Australian</option>
                             <option value="Indian">Indian</option>
                             <option value="Greek">Greek</option>
                             <option value="Dutch">Dutch</option>
                             <option value="Other">Other</option>
                           </select>
                           @error('ethnic')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="haircolor" class="form-control @error('haircolor') is-invalid @enderror" type="text" name="haircolor" value="{{ old('haircolor') }}" required autocomplete="haircolor">
                             <option selected hidden value="">Please select your haircolor</option>
                             <option value="Black">Black</option>
                             <option value="Brown">Brown</option>
                             <option value="Blond">Blond</option>
                             <option value="Auburn">Auburn</option>
                             <option value="White">Gray/White</option>
                             <option value="Prefer Not to Say">Prefer Not to Say</option>
                           </select>
                           @error('haircolor')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="eyecolor" class="form-control @error('eyecolor') is-invalid @enderror" type="text" name="eyecolor" value="{{ old('eyecolor') }}" required autocomplete="eyecolor">
                             <option selected hidden value="">Please select your eyecolor</option>
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
                           @error('eyecolor')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="skincolor" class="form-control @error('skincolor') is-invalid @enderror" type="text" name="skincolor" value="{{ old('skincolor') }}" required autocomplete="skincolor">
                             <option selected hidden value="">Please select your skincolor</option>
                             <option value="Black">Black</option>
                             <option value="Yellow">Yellow</option>
                             <option value="White">White</option>
                             <option value="Prefer Not to Say">Prefer Not to Say</option>
                           </select>
                           @error('skincolor')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="hobbies" class="form-control @error('hobbies') is-invalid @enderror" type="text" name="hobbies" value="{{ old('hobbies') }}" required autocomplete="hobbies">
                             <option selected hidden value="">Please select one hobby</option>
                             <option value="Traditional Sports">Traditional Sports</option>
                             <option value="Outdoor Adventures">Outdoor Adventures</option>
                             <option value="Watch TV Series/Movies">Watch TV Series/Movies</option>
                             <option value="Writing">Writing</option>
                             <option value="" disabled>---Adding more hobbies soon---</option>
                           </select>
                           @error('hobbies')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="relationship" class="form-control @error('relationship') is-invalid @enderror" type="text" name="relationship" value="{{ old('relationship') }}" required autocomplete="relationship">
                             <option selected hidden value="">Type of relationship</option>
                             <option value="Short-term">Short-term</option>
                             <option value="Long-term">Long-term</option>
                             <option value="One Night Stand">One Night Stand</option>
                             <option value="Just friendship">Just friendship</option>
                           </select>
                           @error('relationship')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                         <div class="form-group row">
                           <select id="occupation" class="form-control @error('occupation') is-invalid @enderror" type="text" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation">
                             <option selected hidden value="">Occupation</option>
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
                           @error('occupation')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>


                         <div class="form-group row">
                           <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password"></input>
                           @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>

                          <div class="form-group row">
                           <input id="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                           </div>
                           <button type="submit" class="btn btn-default btn-register">{{ __('Create Account') }}</button>
                           </form>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <div class="forgot login-footer">
                       <span><b>Don't have an account?</b>
                            <a href="javascript: showRegisterForm();"><b>Sign Up</b></a>
                        </span>
                   </div>
                   <div class="forgot register-footer">
                        <span><b>Already have an account?</b></span>
                        <a href="javascript: showLoginForm();"><b>Login</b></a>
                   </div>
               </div>
         </div>
     </div>
 </div>
@endsection
