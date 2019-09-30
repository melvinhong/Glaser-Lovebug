@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:30px;">
    <!-- <h1>My Profile</h1> -->

      <div class="profile-card">
        <img src="../assets/img/male.jpg" style="width:100%">
        <h1 style="margin: 20px;">{{ Auth::user()->name }}</h1>
        <a href="#"><button class ="profile-button">Save</button></a>
      </div>
</div>

@endsection
