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
