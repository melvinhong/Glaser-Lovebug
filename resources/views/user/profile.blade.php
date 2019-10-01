@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:30px;">
    <!-- <h1>My Profile</h1> -->

      <div class="profile-card">

        <a href="{{ url('/profile/info') }}"><button class ="profile-button">Edit Info</button></a>
        <img src="{{ Auth::user()->profile_image }}" style="width:100%">
        <h1 style="margin: 20px;">Name: </h1>
        <h2 style="margin: 20px;">{{ Auth::user()->name }} </h2>
        <h1 style="margin: 20px;">Age:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->age }} </h2>
        <h1 style="margin: 20px;">Gender:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->gender }} </h2>
        <h1 style="margin: 20px;">My location:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->location }} </h2>
        <h1 style="margin: 20px;">Ethnic:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->ethnic }} </h2>
        <h1 style="margin: 20px;">Haircolor: </h1>
        <h2 style="margin: 20px;">{{ Auth::user()->haircolor }}</h2>
        <h1 style="margin: 20px;">Eyecolor:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->eyecolor }} </h2>
        <h1 style="margin: 20px;">Skincolor:</h1>
        <h2 style="margin: 20px;"> {{ Auth::user()->skincolor }} </h2>
        <h1 style="margin: 20px;">Hobbies: </h1>
        <h2 style="margin: 20px;">{{ Auth::user()->hobbies }} </h2>
        <h1 style="margin: 20px;">Relationship i'd like to find: </h1>
        <h2 style="margin: 20px;">{{ Auth::user()->relationship }} </h2>
        <h1 style="margin: 20px;">My occupation:</h1>
        <h2 style="margin: 20px;">{{ Auth::user()->occupation }} </h2>

        <a href="{{ url('/profile/info') }}"><button class ="profile-button">Edit Info</button></a>
      </div>
</div>

@endsection
