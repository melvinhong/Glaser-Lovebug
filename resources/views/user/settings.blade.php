@extends('layouts.app')

@section('content')

<div class="container">
  <script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>
    <h1>Settings<h1>
  </div>
  <table>
    <h2> Change matchmaking perfomance</h2>
    <tr>
      <td>Age :</td>
      <td>From
        <select name="agestart"  >
          <option value="" selected disabled hidden>{{ Auth::user()->ageper1 }}</option>
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
        <select name="ageend" >
          <option value="" selected disabled hidden>{{ Auth::user()->ageper2 }}</option>

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
        <select name="gender">
          <option value="" selected disabled hidden>{{ Auth::user()->genderper }}</option>
          <option type="radio" name="gender" value="male" >Male
        <option type="radio" name="gender" value="female" >Female
        <option type="radio" name="gender" value="transgender">Transgender
        <option type="radio" name="gender" value="nottosay" >Prefer not to say
      </td>
    </tr>
    <tr>
      <td>Location :</td>
      <td>
        <select name="location" >
          <option value="" selected disabled hidden>{{ Auth::user()->locationper }}</option>


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
        <select name="ethnic" >
          <option value="" selected disabled hidden>{{ Auth::user()->ethnicper }}</option>

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
        <select name="haircolor" >
          <option value="" selected disabled hidden>{{ Auth::user()->haircolorper }}</option>

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
        <select name="eyecolor" >
          <option value="" selected disabled hidden>{{ Auth::user()->eyecolorper }}</option>

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
        <select name="skincolor" >
          <option value="" selected disabled hidden>{{ Auth::user()->skincolorper }}</option>
          <option value="black">black</option>
          <option value="yelllow">yellow</option>
          <option value="white">white</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>Hobbies:</td>
      <td>
        <select name="hobbies" >
          <option value="" selected disabled hidden>{{ Auth::user()->hobbiesper }}</option>

          <option value="tsports"> traditional sports</option>
          <option value="advt">outdoor advantures</option>
          <option value="tvs">watch tv series/movies</option>
          <option value="writing">Writing</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Relationship prefer:</td>
      <td>
        <select name="relationship" >
          <option value="" selected disabled hidden>{{ Auth::user()->relationshipper }}</option>


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

            <option value="" selected disabled hidden>{{ Auth::user()->occupationper }}</option>

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
    </tr>
    <tr>
      <td><input type="submit" value="Update"></td>
    </tr>
  </table>
@endsection
