@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
      <div class="col-md-2 "></div>
        <div class="col-md-8">
          <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
            <div class="stackedcards-container">
              <div class="card">
                <div class="card-content">
                  <div class="card-image"><img src="https://image.ibb.co/gQsq07/Adventure_and_Outdoor.png" class="img-fluid"></div>
                  <div class="card-titles">
                    <h1>*Names here*</h1>
                    <h3>*Age here*</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="stackedcards--animatable stackedcards-overlay top"><img src="https://image.ibb.co/m1ykYS/rank_army_star_2_3x.png"  width="auto" height="auto"/></div>
            <div class="stackedcards--animatable stackedcards-overlay right"><img src="https://image.ibb.co/dCuESn/Path_3x.png" width="auto" height="auto"/></div>
            <div class="stackedcards--animatable stackedcards-overlay left"><img src="https://image.ibb.co/heTxf7/20_status_close_3x.png" width="auto" height="auto"/></div>
          </div>

          <div class="global-actions">
            <div class="left-action"><img src="https://image.ibb.co/heTxf7/20_status_close_3x.png" width="26" height="26"/></div>
            <div class="top-action"><img src="https://image.ibb.co/m1ykYS/rank_army_star_2_3x.png" width="18" height="16"/></div>
            <div class="right-action"><img src="https://image.ibb.co/dCuESn/Path_3x.png" width="30" height="28"/></div>
          </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
