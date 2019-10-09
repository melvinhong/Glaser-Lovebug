@extends('layouts.app')

@section('title')
LoveBug
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-left">
      <div class="col-md-2 "></div>
        <div class="col-md-8">
          <h1 style="text-align: center; font-size: 25px;">You can change your matchmaking perfomance on setting page.</h1>
          <div class="stage">
              <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
                <div class="stackedcards-container">
                  <?php
                  $loages=Auth::user()->ageper1;
                  $loagee=Auth::user()->ageper2;
                  $logender = Auth::user()->genderper;
                  $lolocation = Auth::user()->locationper;
                  $loethnic=Auth::user()->ethnicper;
                  $lohaircolor = Auth::user()->haircolorper;
                  $loeyecolor = Auth::user()->eyecolorper;
                  $loskincolor = Auth::user()->skincolorper;
                  $lohobbies = Auth::user()->hobbiesper;
                  $lorelationship=Auth::user()->relationshipper;
                  $looccupation=Auth::user()->occupationper;
                  $avatar=Auth::user()->profile_image;
                  $matchmark=array();

                  $users = App\User::all();
                  foreach ($users as $row) {
                     {
               			 	$a=0;
               			 	$l=0;
               			 	$et=0;
               			 	$g=0;
               			 	$h=0;
               			 	$ec=0;
               			 	$s=0;
               			 	$r=0;

               			 	if($loages<= $row->gender && $row->gender<=$loagee){
               			 		$a=$a+50;
               			 	}else if($loagee<= $row->gender && $row->gender<=$loages){
               			 		$a=$a+50;
               			 	}else {
               			 		$a=$a+0;
               			 	}

               			 	if($logender!=$row->gender ){
               			 		$g=$g-1000;
               			 	}else{
               			 		$g=$g+0;
               			 	}

               			 	if($lolocation!=$row->location ){
               			 		$l=$l-1000;
               			 	}else{
               			 		$l=$l+0;
               			 	}
               			 	if($loethnic==$row->ethnic){
               			 		$et=$et+20;
               			 	}else{$et=$et+10;}

               			 	if($lohaircolor==$row->haircolor){
               			 		$h=$h+20;
               			 	}else{$h=$h+10;}

               			 	if($loeyecolor==$row->eyecolor){
               			 		$ec=$ec+20;
               			 	}else{$ec=$ec+10;}

               			 	if($loskincolor==$row->skincolor){
               			 		$s=$s+100;
               			 	}else{$s=$s+10;}

               			 	if($lorelationship==$row->relationship){
               			 		$r=$r+20;
               			 	}else{$r=$r+10;}
                      $hb=0;
               			 	if($lohobbies==$row->hobbies){
               			 		$hb=$hb+20;
               			 	}else{$hb=$hb+0;}
                      $oc=0;
                      if($looccupation==$row->occupation){
               			 		$oc=$oc+20;
               			 	}else{$oc=$oc+0;}

               			 	$j=($a+$l+$g+$h+$et+$ec+$s+$r+$hb+$oc)/2.6;

               			 	$matchmark[$row->name]=$j;
                		}
                    arsort($matchmark);
                   }
                   $z=0;
                    foreach ($matchmark as $matchname => $markscore){

             		   $pro = DB::table('users')->where('name', $matchname)->first();

                   echo "<div class='card'>";
                   echo "<div class='card-content'>";
                   echo "<div class='card-image'><img src='/storage/Profile_Picture/$pro->profile_image'></div>";
                   echo "<div class='card-titles'>";
                   echo "<h1 style='color: black; font-weight: 600;'>$matchname</h1>";
                   echo "<h3 style='color: black;'> Match suitability: $markscore%</h3>";
                   echo "</div>";
                   echo "</div>";
                   echo "</div>";

                     $z++;
             		  	 if ($z > 4) break;

                   }
                   ?>

                </div>
                <div class="stackedcards--animatable stackedcards-overlay top"><img src="https://image.ibb.co/m1ykYS/rank_army_star_2_3x.png"  width="18" height="16"/></div>
                <div class="stackedcards--animatable stackedcards-overlay right"><img src="https://image.ibb.co/dCuESn/Path_3x.png" width="26" height="26"/></div>
                <div class="stackedcards--animatable stackedcards-overlay left"><img src="https://image.ibb.co/heTxf7/20_status_close_3x.png" width="26" height="26"/></div>
              </div>
              <div class="global-actions">
                <div class="left-action"><img src="https://image.ibb.co/heTxf7/20_status_close_3x.png" width="26" height="26"/></div>
                <a href="{{ url('/messenger') }}"><div class="top-action"><img src="https://image.ibb.co/m1ykYS/rank_army_star_2_3x.png" width="18" height="16"/></div></a>
                <div class="right-action"><img src="https://image.ibb.co/dCuESn/Path_3x.png" width="30" height="28"/></div>
            </div>
          </div>

          <div class="final-state hidden"><h2>Query is over, sorry didn't give you the best match.</h2></div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
