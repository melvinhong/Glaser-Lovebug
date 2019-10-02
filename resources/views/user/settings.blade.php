@extends('layouts.app')

@section('content')

<div class="container">
  <script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>
    <h1>Settings<h1>
  </div>
{!! Form::open(['url=>'settings','method'='post','name' = 'editForm', 'role'='form']) !!}

    {{ csrf_field() }}
    {{ method_field('patch') }}

  <table>
    <h2> Change matchmaking perfomance</h2>
    <tr>
      <td>Age :</td>
      <td>From
        <select name="age1per"  >
          <option value="{{ Auth::user()->ageper1 }}" selected disabled hidden>{{ Auth::user()->ageper1 }}</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="45">45</option>
          <option value="46">46</option>
          <option value="47">47</option>
          <option value="48">48</option>
          <option value="49">49</option>
          <option value="50">50 or above</option>
        </select>
        to
        <select name="age2per" >
          <option value="{{ Auth::user()->ageper2 }}" selected disabled hidden>{{ Auth::user()->ageper2 }}</option>

          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="45">45</option>
          <option value="46">46</option>
          <option value="47">47</option>
          <option value="48">48</option>
          <option value="49">49</option>
          <option value="50">50 or above</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>Gender :</td>
      <td>
        <select name="genderper">
          <option value="{{ Auth::user()->genderper }}" selected disabled hidden>{{ Auth::user()->genderper }}</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Transgender">Transgender</option>
      </td>
    </tr>
    <tr>
      <td>Location :</td>
      <td>
        <select name="locationper" >
          <option value="{{ Auth::user()->locationper }}" selected disabled hidden>{{ Auth::user()->locationper }}</option>


          <option value="Victoria">Victoria</option>
          <option value="New South Wales">New South Wales</option>
          <option value="Queensland">Queensland</option>
          <option value="South Australia">South Australia</option>
          <option value="Western Australia">Western Australia</option>
          <option value="Tasmania">Tasmania</option>
          <option value="Prefer Not to Say">Prefer Not to Say</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Ethnic background:</td>
      <td>
        <select name="ethnicper" >
          <option value="{{ Auth::user()->ethnicper }}" selected disabled hidden>{{ Auth::user()->ethnicper }}</option>

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
      </td>
    </tr>
    <tr>
      <td>Hair color :</td>
      <td>
        <select name="haircolorper" >
          <option value="{{ Auth::user()->haircolorper }}" selected disabled hidden>{{ Auth::user()->haircolorper }}</option>

          <option value="Black">Black</option>
          <option value="Brown">Brown</option>
          <option value="Blond">Blond</option>
          <option value="Auburn">Auburn</option>
          <option value="White">Gray/White</option>
          <option value="Prefer Not to Say">Prefer Not to Say</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>Eye color :</td>
      <td>
        <select name="eyecolorper" >
          <option value="{{ Auth::user()->eyecolorper }}" selected disabled hidden>{{ Auth::user()->eyecolorper }}</option>

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
      </td>
    </tr>

    <tr>
      <td>Skin color :</td>
      <td>
        <select name="skincolorper" >
          <option value="{{ Auth::user()->skincolorper }}" selected disabled hidden>{{ Auth::user()->skincolorper }}</option>
          <option value="Black">Black</option>
          <option value="Yellow">Yellow</option>
          <option value="White">White</option>
          <option value="Prefer Not to Say">Prefer Not to Say</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>Hobbies:</td>
      <td>
        <select name="hobbiesper" >
          <option value="{{ Auth::user()->hobbiesper }}" selected disabled hidden>{{ Auth::user()->hobbiesper }}</option>
          <option value="Traditional Sports">Traditional Sports</option>
          <option value="Outdoor Adventures">Outdoor Adventures</option>
          <option value="Watch TV Series/Movies">Watch TV Series/Movies</option>
          <option value="Writing">Writing</option>

        </select>
      </td>
    </tr>
    <tr>
      <td>Relationship prefer:</td>
      <td>
        <select name="relationshipper" >
          <option value="{{ Auth::user()->relationshipper }}" selected disabled hidden>{{ Auth::user()->relationshipper }}</option>


          <option value="Short-term">Short-term</option>
          <option value="Long-term">Long-term</option>
          <option value="One Night Stand">One Night Stand</option>
          <option value="Just friendship">Just friendship</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Occupation:</td>
      <td>
        <select name="occupationper" >

            <option value="{{ Auth::user()->occupationper }}" selected disabled hidden>{{ Auth::user()->occupationper }}</option>

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
      </td>
    </tr>
    <tr>
      <td><a href="{{ url('/settings') }}"><button type="submit">Update<a></td
    </tr>
  </table>

{!! Form::close() !!}
@endsection
