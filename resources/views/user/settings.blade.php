@extends('layouts.app')

@section('title')
Settings | LoveBug
@endsection

@section('content')

<div class="container">
  <script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>
  <div class="col-md-10">
    <div class="card">
      <div class="card-header" style="font-weight: bold;">{{ __('Settings') }}</div>
        <div class="card-body">

          <div class="form-group row" style="text-align: center;">
            <label class="col-md-12 col-form-label" style="font-weight: bold; font-size: 25px;">Change Matchmaking Perfomance</label>
          </div>

          <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Age Range</label>
            <div class="col-md-3">
              <select id="ageper1" type="text" class="form-control" name="ageper1">
                <option selected hidden>From</option>
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
            </div>
            <div class="col-md-3">
              <select id="ageper1" type="text" class="form-control" name="ageper1">
                <option selected hidden>To</option>
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
            </div>
          </div>

          <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Gender</label>
              <div class="col-md-6">
                <select id="genderper" type="text" class="form-control" name="genderper">
                  <option selected hidden>---</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Transgender">Transgender</option>
                </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Location</label>
              <div class="col-md-6">
                <select id="locationper" type="text" class="form-control" name="locationper">
                  <option selected hidden>---</option>
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
            <label for="ethnic" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Ethnic Background</label>
              <div class="col-md-6">
                <select id="ethnicper" type="text" class="form-control" name="ethnicper">
                  <option selected hidden>---</option>
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
              </div>
          </div>

          <div class="form-group row">
            <label for="haircolorper" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Haircolor</label>
              <div class="col-md-6">
                <select id="haircolor" type="text" class="form-control" name="haircolorper">
                  <option selected hidden>---</option>
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
                <select id="eyecolorper" type="text" class="form-control" name="eyecolorper">
                  <option selected hidden>---</option>
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
                <select id="skincolorper" type="text" class="form-control" name="skincolorper">
                  <option selected hidden>---</option>
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
                <select id="hobbiesper" type="text" class="form-control" name="hobbiesper">
                  <option selected hidden>---</option>
                  <option value="Traditional Sports">Traditional Sports</option>
                  <option value="Outdoor Adventures">Outdoor Adventures</option>
                  <option value="Watch TV Series/Movies">Watch TV Series/Movies</option>
                  <option value="Writing">Writing</option>
                  <option disabled>---Adding more hobbies soon---</option>
                </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="relationship" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Skincolor</label>
              <div class="col-md-6">
                <select id="relationshipper" type="text" class="form-control" name="relationshipper">
                  <option selected hidden>---</option>
                  <option value="Short-term">Short-term</option>
                  <option value="Long-term">Long-term</option>
                  <option value="One Night Stand">One Night Stand</option>
                  <option value="Just friendship">Just friendship</option>
                </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="occupation" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;">Skincolor</label>
              <div class="col-md-6">
                <select id="occupationper" type="text" class="form-control" name="occupationper">
                  <option selected hidden>---</option>
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
                  <a href="#"><button type="submit" class="btn btn-primary">Update</button></a>
              </div>
          </div>

        </div>
    </div>
  </div>
</div>

<script>
  document.forms['editForm'].elements['ageper1'].value='{{ Auth::user()->ageper1 }}';
  document.forms['editForm'].elements['ageper2'].value='{{ Auth::user()->ageper2 }}';
  document.forms['editForm'].elements['genderper'].value='{{ Auth::user()->genderper }}';
  document.forms['editForm'].elements['locationper'].value='{{ Auth::user()->locationper }}';
  document.forms['editForm'].elements['ethnicper'].value='{{ Auth::user()->ethnicper }}';
  document.forms['editForm'].elements['haircolorper'].value='{{ Auth::user()->haircolorper }}';
  document.forms['editForm'].elements['eyecolorper'].value='{{ Auth::user()->eyecolorper }}';
  document.forms['editForm'].elements['skincolorper'].value='{{ Auth::user()->skincolorper }}';
  document.forms['editForm'].elements['hobbiesper'].value='{{ Auth::user()->hobbiesper }}';
  document.forms['editForm'].elements['relationshipper'].value='{{ Auth::user()->relationshipper }}';
  document.forms['editForm'].elements['occupationper'].value='{{ Auth::user()->occupationper }}';
</script>
@endsection
