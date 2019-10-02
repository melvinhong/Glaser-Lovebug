@extends('layouts.app')

@section('title')
LoveBug
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-left">
      <div class="col-md-2 "></div>
        <div class="col-md-8">

            <style>
            /*------ CSS Use Case Example START ------*/

/* import font ROBOTO */
@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');



/* class created only for a better preview*/

.stage.hidden {
  opacity: 0;
  transition: all 400ms ease;
}

@media screen and (max-width: 600px) {
    .stage {
        max-width: 100%;
      }
  }

 h1, h2, h3 {
   margin: 0;
 }

 h1 {
   font-size: 32px;
   font-weight: 400;
 }

 h2 {
   font-size: 24px;
   font-weight: 100;
   color: #FFF;
   text-align: center;
 }

 h3 {
   font-size: 18px;
   font-weight: 300;
   color: #BFBFBE;
   margin-top: 10px;
 }

 .title {
     width: 100%;
     padding-bottom: 30px;
     text-align: center;
     font-weight: 400;
     font-size: 22px;
     color: #fff;
 }

 .card-content {
   position: relative;
   color: #fff;
   padding: 5px;
 }

 .card-image {
   width: 100%;
   height: 100%;
 }
 .card-image img {
   border-top-left-radius: 10px;
   border-top-right-radius: 10px;
   -o-object-fit: cover;
      object-fit: cover;
   width: 100%;
   height: 100%;
   min-height: 330px;
 }

 .card-titles {
   position: absolute;
   bottom: 0;
   padding: 40px 30px;
 }

 .card-footer {
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-pack: center;
       -ms-flex-pack: center;
           justify-content: center;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
   padding: 25px 35px;
 }

 .popular-destinations-text {
   font-size: 16px;
   font-weight: 400;
   color: #8E9AA4;
   width: 100%;
   min-width: 110px;
 }

 .popular-destinations-images {
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: end;
         -ms-flex-pack: end;
             justify-content: flex-end;
     width: 100%;
 }

 .circle {
     width: 40px;
     height: 40px;
     border-radius:  50%;
     background: #fff;
     margin-left: 8px;
 }

 .circle img {
     border-radius: 50%
 }

 /* global actions buttons*/
.global-actions {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding-top: 30px;
    min-width: 200px;
}

 .top-action,
 .right-action,
 .left-action {
     border-radius: 50%;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
   -webkit-box-align: center;
       -ms-flex-align: center;
           align-items: center;
     -webkit-box-pack: center;
         -ms-flex-pack: center;
             justify-content: center;
     background: #fff;
   -webkit-box-shadow: 0 3px 4px 0px rgba(0,0,0,0.5);
           box-shadow: 0 3px 4px 0px rgba(0,0,0,0.5);
 }
 .right-action,
 .left-action {
     width: 60px;
     height: 60px;
 }

.top-action {
    width: 40px;
    height: 40px;
    margin: 0 20px;
}

.final-state.active {
  position: absolute;
  opacity: 1;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: all 400ms ease;
}

.final-state.hidden {
  opacity: 0;
}


/*------ CSS Use Case Example END ------*/

/*----- Stacked Cards component css START -----*/
body {
    overflow-x: hidden;
}

.no-transition {
  -webkit-transition: none ! important;
  transition: none ! important;
}

 .stackedcards-overflow {
     overflow-y: hidden !important;
 }

 .stackedcards.init {
     opacity: 0;/* set the opacity to 0 if you want a fade-in effect to stacked cards on page load */
 }

 .stackedcards {
     position: relative;
 }

 .stackedcards * {
     -webkit-user-select: none;
             -moz-user-select: none;
              -ms-user-select: none;
          user-select: none;
 }

 .stackedcards--animatable {
     -webkit-transition: all 400ms ease;
             -o-transition: all 400ms ease;
             transition: all 400ms ease;
 }

 .stackedcards .stackedcards-container > *,
 .stackedcards-overlay {
     position: absolute;
     width: 100%; /* set 100% */
     height: 100%; /* set 100% */
     will-change: transform, opacity;
     top: 0;
     border-radius: 10px;
     min-width: 265px;
 }

 .stackedcards-overlay.left > div,
 .stackedcards-overlay.right > div,
 .stackedcards-overlay.top > div {
     width: 100%;
     height: 100%;
     -webkit-box-align: center;
         -ms-flex-align: center;
             align-items: center;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
         -ms-flex-pack: center;
             justify-content: center;
 }

 .stackedcards-overlay.left,
 .stackedcards-overlay.right,
 .stackedcards-overlay.top {
     -webkit-box-align: center;
         -ms-flex-align: center;
             align-items: center;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
         -ms-flex-pack: center;
             justify-content: center;
     left: 0;
     opacity: 0;
     top: 0;
     height: 100%;
 }

 .stackedcards-overlay.top,
 .stackedcards-overlay.right,
 .stackedcards-overlay.left {
     background: #fff;
 }

 .stackedcards-overlay.left:empty,
 .stackedcards-overlay.right:empty,
 .stackedcards-overlay.top:empty {
   display: none !important;
 }

 .stackedcards-overlay-hidden {
     display: none;
 }

 .stackedcards-origin-bottom {
     -webkit-transform-origin: bottom;
             -ms-transform-origin: bottom;
         transform-origin: bottom;
 }

 .stackedcards-origin-top {
     -webkit-transform-origin: top;
             -ms-transform-origin: top;
         transform-origin: top;
 }

 .stackedcards-bottom,
 .stackedcards-top,
 .stackedcards-none {
     background: #fff; /* set card background background */
    box-shadow: 0 6px 12px 0 rgba(0,0,0,0.30);
    height: 100%;
 }

 .stackedcards .stackedcards-container > :nth-child(1) {
     position: relative;
     display: block;
 }

/*----- Stacked Cards component css END -----*/
            </style
          <h1>You can change your matchmaking perfomance on setting page</h1>
          <div class="stage">
              <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
                <div class="stackedcards-container">
                  <div class="card">
                    <div class="card-content">
                    <div class="card-image"><img src="https://image.ibb.co/fXPg7n/Beach_and_Chill.png" width="100%" height="100%"/></div>
                      <div class="card-titles">
                        <h1>Molly</h1>
                        <h3>Match suitability: 83%</h3>
                      </div>
                    </div>

                  </div>
                  <div class="card">
                    <div class="card-content">
                    <div class="card-image"><img src="https://image.ibb.co/c9gTnn/Romantic_Gateways.png" width="100%" height="100%"/></div>
                      <div class="card-titles">
                        <h1>Lois</h1>
                        <h3>Match suitability: 80%</h3>
                      </div>
                    </div>

                  </div>
                  <div class="card">
                    <div class="card-content">
                    <div class="card-image"><img src="https://image.ibb.co/jY88nn/city_breaks.png" width="100%" height="100%"/></div>
                      <div class="card-titles">
                        <h1>Amber</h1>
                        <h3>Match suitability: 75%</h3>
                      </div>
                    </div>

                  </div>
                  <div class="card">
                    <div class="card-content">
                    <div class="card-image"><img src="https://image.ibb.co/eBNZSn/Family_Vacation.png" width="100%" height="100%"/></div>
                      <div class="card-titles">
                        <h1>Emily</h1>
                        <h3>Match suitability: 64%</h3>
                      </div>
                    </div>

                  </div>
                  <div class="card">
                    <div class="card-content">
                    <div class="card-image"><img src="https://image.ibb.co/epvM7n/Art_and_culture.png" width="100%" height="100%"/></div>
                      <div class="card-titles">
                        <h1>Wings</h1>
                        <h3>Match suitability: 56%</h3>
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

          <div class="final-state hidden"><h2>Query is over, sorry did't give you the best match <br/> .</h2></div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
