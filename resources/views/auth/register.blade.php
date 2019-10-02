@extends('layouts.homepage')

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
                               <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror

                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror

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
                           <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                           @error('name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror

                           <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror

                           <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                           @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror

                           <input id="password_confirmation" class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">


                          //register user info to make algorithm work
                          <!-- <input type="age"class="form-control" name="age" placeholder="age" required> -->

<!--
                          <input id="age" class="form-control @error('age') is-invalid @enderror" type="text" placeholder="age" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                          @error('age')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror



                        	<tr>
                  					<td>Gender :</td>
                  					<td>
                  						<input type="radio" name="gender" value="female" required>Female
                  						<input type="radio" name="gender" value="male" required>Male
                  						<input type="radio" name="gender" value="transgender" required>Transgender
                  						<input type="radio" name="gender" value="nottosay" required>Prefer not to say
                  					</td>
                  				</tr>
                  				<tr>
                  					<td>Location :</td>
                  					<td>
                  						<select name="location" required>

                  							<option value="vic">Victoria</option>
                  							<option value="nsw">New South Wales</option>
                  							<option value="qld">Queensland</option>
                  							<option value="sa">South Australia</option>
                  							<option value="wa">Western Australia</option>
                  							<option value="tas">Tasmania</option>
                  						</select>
                  					</td>
                  				</tr>
                  				<tr>
                  					<td>Ethnic background:</td>
                  					<td>
                  						<select name="ethnic" required>
                  							<option value="british">British</option>
                  							<option value="irish">Irish</option>
                  							<option value="italian">Italian</option>
                  							<option value="german">German</option>
                  							<option value="chinese">Chinese</option>
                  							<option value="aboriginalaustralian">Aboriginal Australian</option>
                  							<option value="indian">Indian</option>
                  							<option value="greek">Greek</option>
                  							<option value="dutch">Dutch</option>
                  							<option value="other">Other</option>
                  						</select>
                  					</td>
                  				</tr>
                  				<tr>
                  					<td>Hair color :</td>
                  					<td>
                  						<select name="haircolor" required>
                  							<option value="black">black</option>
                  							<option value="brown">brown</option>
                  							<option value="blond">blond</option>
                  							<option value="auburn">auburn</option>
                  							<option value="white">gray/white</option>
                  						</select>
                  					</td>
                  				</tr>

                  				<tr>
                  					<td>Eye color :</td>
                  					<td>
                  						<select name="eyecolor" required>
                  							<option value="amber">amber</option>
                  							<option value="blue">blue</option>
                  							<option value="brown">brown</option>
                  							<option value="gray">gray</option>
                  							<option value="green">green</option>
                  							<option value="hazel">hazel</option>
                  							<option value="red">red</option>
                  							<option value="violet">violet</option>

                  						</select>
                  					</td>
                  				</tr>

                  				<tr>
                  					<td>Skin color :</td>
                  					<td>
                  						<select name="skincolor" required>
                  							<option selected hidden="">If your skin color not list here plz contact us</option>
                  							<option value="black">black</option>
                  							<option value="yelllow">yellow</option>
                  							<option value="white">white</option>
                  						</select>
                  					</td>
                  				</tr>

                  				<tr>
                  					<td>Hobbies:</td>
                  					<td>
                  						<select name="hobbies" required>
                  							<option selected hidden value=""> more hobbies on adding...</option>
                  							<option value="tsports"> traditional sports</option>
                  							<option value="advt">outdoor advantures</option>
                  							<option value="tvs">watch tv series/movies</option>
                  							<option value="writing">Writing</option>
                  						</select>
                  					</td>
                  				</tr>
                  				<tr>
                  					<td>Relationship perfer::</td>
                  					<td>
                  						<select name="relationship" required>

                  							<option value="shortterm"> Short term</option>
                  							<option value="longterm">Long term</option>
                  							<option value="ons">One night stand</option>
                  							<option value="friendship">Just friendship</option>
                  						</select>
                  					</td>
                  				</tr>
                  				<tr>
                  					<td>Occupation:</td>
                  					<td>
                  						<select name="occupation" required>

                  							<option value="student">Student</option>
                  							<option value="engineer">Engineer</option>
                  							<option value="worker">Worker</option>
                  							<option value="administrator">Administrator</option>
                  							<option value="teacher">teacher</option>
                  							<option value="accountant">Accountant</option>
                  							<option value="auditor">Auditor</option>
                  							<option value="artist">Artist</option>
                  							<option value="doctor">doctor</option>
                  							<option value="nottosay">Others/perfer not to say</option>


                  						</select>
                  					</td>
                  				</tr>-->

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
