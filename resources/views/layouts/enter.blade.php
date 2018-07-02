<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="@yield ('metaauth')">
      <meta name="description" content="@yield ('metades')">
      <meta name="keywords" content="@yield ('metakey')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smarter Lifestyle Network
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />




    <style>

    p.break {
        word-break:keep-all;
         word-wrap: break-word;
    }
    .posthold {
      font-family: Helvetica;
  color: #484747;
  font-size: 20px;
  font-weight: 500;
  line-height: 28px;
  text-align: left;
  padding-left:44px;
  padding-right:44px;
  word-break: keep-all;
    }
    .movedown {
             margin-top:50%;
    }
.imspace {
  padding-top:60px;
    padding-bottom:60px;
      padding-left:60px;
        padding-right:0px;
        margin-left:100px;


}
.strapbox {
width:100%;
height:100%;
overflow:hidden;

}
i {
    border: solid white;
    border-width: 0 5px 5px 0;
    display: inline-block;
    padding: 20px;
display: inline-block;
}

.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
margin-right:11px;
margin-top:160px;

    float:right;

border-color:grey;
}
.right:hover {
  cursor:pointer;
  border-color:#98C21F;
      border-width: 0 7px 7px 0;
}

.left {
margin-left:11px;
margin-top:160px;
    float:left;
    border-color:grey;
  transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
}
.left:hover {
  cursor:pointer;
  border-color:#98C21F;
    border-width: 0 7px 7px 0;
}

.spacer {

}
.hmm {

}
.hov:hover {
  cursor:pointer;
}
#lightSlider {
}
#pageOne {

}
#pageTwo {

}
#pageThree {

}

#cateOne{
position:relative;
width:100vw;

}
.cateol {
    background-color:rgba(27, 100, 147, 1);
  background-size:cover;
  /*
  background-color:rgb(192,192,192);
    */
  border-color:rgba(27, 100, 147, 1);

border-width:20px;
border-left-width:0px;
border-right-width:0px;
border-style:ridge;
border-top-left-radius: 0px;
border-top-right-radius: 10px;
}
#cateTwo{
position:relative;

}
#cateThree{
position:relative;
}
#cateFour{
position:relative;
}
#cateFive{
position:relative;
}
#cateSix{
position:relative;
}
#cateSeven{
position:relative;
}
#cateEight{
position:relative;
}
#cateNine{
position:relative;
}
#cateTen{
position:relative;
}
#cateEleven{
position:relative;
}
#cateTwelve{
position:relative;
}
#cateThirteen{
position:relative;
}
#cateFourteen{
position:relative;
}
#cateFifteen{
position:relative;
}
#cateSixteen{
position:relative;
}
#cateSeventeen{
position:relative;
}
.ico {

      transition: transform 1s; /* Animation */
      transform: scale(.9); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */

}
.ico:hover {
  transform: scale(1.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */

}
#contBaseSlider {
  margin-top:90px;/*
background-image:url('{{ asset('storage/car.jpg') }}');*/
  /*background-color:white;*/
  width:100%;
}
/*.hidden {

  height:0px;
  width:0px;
}
*/
#advertise {
  width:1140px;
  height:366px;
}
    </style>
</head>
<body onload="myFunction()">

    <div id="app">

@yield('advertisment')
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">


                <div class="row" id="advertise">
                  <div class="col">
                  </div>
                  <div class="col">
                      <a class="navbar-brand" id="brand" href="{{ url('/') }}">
                    <img class="img-fluid" id="logo" src="{{ asset('storage/logo_circle.png') }}"  alt="Smarter LifeStyle Network Logo">
                  </a>

                  </div>
                  <div class="col">
                  </div>
                </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                      <!--      <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>  -->

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">


          </div>
<!--
          <div class="container">
            <div class="row">
              <div class="col-sm">
              </div>
              <div class="col-sm">
                <img class="img-fluid" id="logo" src="{{ asset('storage/Smarter_LifeStyle.png') }}" width="280" alt="Smarter LifeStyle Network Logo">
              </div>
              <div class="col-sm">
              </div>
            </div>
          </div>
-->
@yield('side')


                                @yield('placeCover')

                                @yield('categoryOne')

                                @yield('categoryTwo')

                                @yield('categoryThree')

                                @yield('categoryFour')

                                @yield('categoryFive')
    </div>
</div>
</div>

<!---end of index content -->

<div class="row ml-5 mr-5">
            @yield('spacer')

            @yield('title')

  @yield('image')
  @yield('video')

@yield('headOne')
@yield('bodyOne')
@yield('headTwo')
@yield('bodyTwo')
@yield('headThree')
@yield('bodyThree')
@yield('headFour')
@yield('bodyFour')
@yield('headFive')
@yield('bodyFive')
@yield('headSix')
@yield('bodySix')
@yield('headSeven')
@yield('bodySeven')
@yield('headEight')
@yield('bodyEight')
</div>
</div>
<div class="col"></div>
</div>



</div>
        </main>

    </div>
    <!--Footer-->
    <footer class=" font-small bg-dark pt-4 mt-4">

        <!--Footer Links-->
        <div class="container text-center text-md-left">
            <div class="row">

                <!--First column-->
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Our Mission</h5>
                    <p>Mission Statement goes here.</p>
                </div>
                <!--/.First column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="clearfix w-100 d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <hr>




        <!--Social buttons-->
        <div class="text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-fb mx-1">
                        <i class="fa fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-tw mx-1">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-gplus mx-1">
                        <i class="fa fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-li mx-1">
                        <i class="fa fa-linkedin"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-dribbble mx-1">
                        <i class="fa fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
           Gen1 Media Group, Inc.
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
(function () {
  'use strict';

  // Does the browser actually support the video element?
  var supportsVideo = !!document.createElement('video').canPlayType;

  if (supportsVideo) {
  	// Obtain handles to main elements
  	var videoContainer = document.getElementById('videoContainer');
   	var video = document.getElementById('video');
   	var videoControls = document.getElementById('video-controls');

   	// Hide the default controls
   	video.controls = false;

   	// Display the user defined video controls
   	videoControls.style.display = 'block';

   	// Obtain handles to buttons and other elements
   	var playpause = document.getElementById('playpause');
   	var mute = document.getElementById('mute');
   	var volinc = document.getElementById('volinc');
   	var voldec = document.getElementById('voldec');
   	var progress = document.getElementById('progress');
    var progressBar = document.getElementById('progress-bar');
   	var fullscreen = document.getElementById('fs');

    // Check if the browser supports the Fullscreen API
    var fullScreenEnabled = !!(document.fullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitSupportsFullscreen || document.webkitFullscreenEnabled || document.createElement('video').webkitRequestFullScreen);
    // If the browser doesn't support the Fulscreen API then hide the fullscreen button
    if (!fullScreenEnabled) {
      fullscreen.style.display = 'none';
    }

   	// Change the volume
   	var alterVolume = function(dir) {
   		var currentVolume = Math.floor(video.volume * 10) / 10;
   		if (dir === '+') {
   			if (currentVolume < 1) video.volume += 0.1;
   		}
   		else if (dir === '-') {
  			if (currentVolume > 0) video.volume -= 0.1;
   		}
   	}

   	// Set the video container's fullscreen state
  	var setFullscreenData = function(state) {
  		videoContainer.setAttribute('data-fullscreen', !!state);
  	}

  	// Checks if the document is currently in fullscreen mode
   	var isFullScreen = function() {
   		return !!(document.fullScreen || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.fullscreenElement);
   	}

   	// Fullscreen
   	var handleFullscreen = function() {
   		// If fullscreen mode is active...
    		if (isFullScreen()) {
    			// ...exit fullscreen mode
    			// (Note: this can only be called on document)
    			if (document.exitFullscreen) document.exitFullscreen();
    			else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
    			else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
    			else if (document.msExitFullscreen) document.msExitFullscreen();
    			setFullscreenData(false);
    		}
    		else {
    		  // ...otherwise enter fullscreen mode
    			// (Note: can be called on document, but here the specific element is used as it will also ensure that the element's children, e.g. the custom controls, go fullscreen also)
          if (videoContainer.requestFullscreen) videoContainer.requestFullscreen();
    		  else if (videoContainer.mozRequestFullScreen) videoContainer.mozRequestFullScreen();
    		  else if (videoContainer.webkitRequestFullScreen) {
    				// Safari 5.1 only allows proper fullscreen on the video element. This also works fine on other WebKit browsers as the following CSS (set in styles.css) hides the default controls that appear again, and
            // ensures that our custom controls are visible:
            // figure[data-fullscreen=true] video::-webkit-media-controls { display:none !important; }
            // figure[data-fullscreen=true] .controls { z-index:2147483647; }
    				video.webkitRequestFullScreen();
    			}
    			else if (videoContainer.msRequestFullscreen) videoContainer.msRequestFullscreen();
    			setFullscreenData(true);
    		}
  	}

   	// Only add the events if addEventListener is supported (IE8 and less don't support it, but that will use Flash anyway)
   	if (document.addEventListener) {
   		// Wait for the video's meta data to be loaded, then set the progress bar's max value to the duration of the video
   		video.addEventListener('loadedmetadata', function() {
   			progress.setAttribute('max', video.duration);
   		});

   		// Add events for all buttons
   		playpause.addEventListener('click', function(e) {
   			if (video.paused || video.ended) video.play();
   			else video.pause();
   		});

   		// The Media API has no 'stop()' function, so pause the video and reset its time and the progress bar

   		mute.addEventListener('click', function(e) {
   			video.muted = !video.muted;
   		});
   		volinc.addEventListener('click', function(e) {
   			alterVolume('+');
   		});
   		voldec.addEventListener('click', function(e) {
   			alterVolume('-');
   		});
   		fs.addEventListener('click', function(e) {
   			handleFullscreen();
   		});

   		// As the video is playing, update the progress bar
   		video.addEventListener('timeupdate', function() {
        // For mobile browsers, ensure that the progress element's max attribute is set
        if (!progress.getAttribute('max')) progress.setAttribute('max', video.duration);
        progress.value = video.currentTime;
        progressBar.style.width = Math.floor((video.currentTime / video.duration) * 100) + '%';
   		});

      // React to the user clicking within the progress bar
      progress.addEventListener('click', function(e) {
        var pos = (e.pageX  - this.offsetLeft) / this.offsetWidth;
        video.currentTime = pos * video.duration;
      });

   		// Listen for fullscreen change events (from other controls, e.g. right clicking on the video itself)
   		document.addEventListener('fullscreenchange', function(e) {
   			setFullscreenData(!!(document.fullScreen || document.fullscreenElement));
   		});
   		document.addEventListener('webkitfullscreenchange', function() {
   			setFullscreenData(!!document.webkitIsFullScreen);
   		});
   		document.addEventListener('mozfullscreenchange', function() {
   			setFullscreenData(!!document.mozFullScreen);
   		});
   		document.addEventListener('msfullscreenchange', function() {
   			setFullscreenData(!!document.msFullscreenElement);
   		});
   	}
  }

})();
</script>

<script>
$(document).ready(function(){
$( "#widen" ).click(function() {
  $( "#widenIt" ).animate({
    width: "150%"
  }, 5000, function() {
    // Animation complete.
  });
});
});
</script>

<script>
var slider = $('#lightSlider').lightSlider({
    controls: false,
    item:4,
    loop:false,
    slideMove:4,
    auto:false,
    autoWidth:200,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    galleryMargin: 50,
    pager: false,
    enableDrag: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});
$('#goToPrevSlide').on('click', function () {
    slider.goToPrevSlide();
});
$('#goToNextSlide').on('click', function () {
    slider.goToNextSlide();
});




</script>
<script>

var sliderone = $('#lightSlider1').lightSlider({
    controls: false,
    item:4,
    loop:false,
    slideMove:4,
    auto:false,
    autoWidth:200,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    galleryMargin: 50,
    pager: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});
$('#goToPrevSlide1').on('click', function () {
    sliderone.goToPrevSlide();
});
$('#goToNextSlide1').on('click', function () {
    sliderone.goToNextSlide();
});
</script>
<script>
var slidertwo = $('#lightSlider2').lightSlider({
    controls: false,
    item:4,
    loop:false,
    slideMove:4,
    auto:false,
    autoWidth:200,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    galleryMargin: 50,
    pager: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});
$('#goToPrevSlide2').on('click', function () {
    slidertwo.goToPrevSlide();
});
$('#goToNextSlide2').on('click', function () {
    slidertwo.goToNextSlide();
});
</script>
<script>
var sliderthree = $('#lightSlider3').lightSlider({
    controls: false,
    item:4,
    loop:false,
    slideMove:4,
    auto:false,
    autoWidth:200,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    galleryMargin: 50,
    pager: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});
$('#goToPrevSlide3').on('click', function () {
    sliderthree.goToPrevSlide();
});
$('#goToNextSlide3').on('click', function () {
    sliderthree.goToNextSlide();
});

</script>
<script>

var sliderfour = $('#lightSlider4').lightSlider({
    controls: false,
    item:4,
    loop:false,
    slideMove:4,
    auto:false,
    autoWidth:200,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    galleryMargin: 50,
    pager: false,
    responsive : [
        {
            breakpoint:800,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:6,
              }
        },
        {
            breakpoint:480,
            settings: {
                item:2,
                slideMove:1
              }
        }
    ]
});
$('#goToPrevSlide4').on('click', function () {
    sliderfour.goToPrevSlide();
});
$('#goToNextSlide4').on('click', function () {
    sliderfour.goToNextSlide();
});

$(function(){
$("#onel").click(function(e){
      e.preventDefault();
      $("#pageOne").delay(180).fadeIn("slow");
      $("#pageTwo").fadeOut("fast");
      $("#pageThree").fadeOut("fast");
      return false;
  });
  });
  $(function(){
  $("#twol").click(function(e){
        e.preventDefault();
        $("#pageOne").fadeOut("fast");
        $("#pageTwo").delay(180).fadeIn("slow");
        $("#pageThree").fadeOut("fast");
        return false;
    });
    });
    $(function(){
    $("#threel").click(function(e){
          e.preventDefault();
          $("#pageOne").fadeOut("fast");
          $("#pageTwo").fadeOut("fast");
          $("#pageThree").delay(180).fadeIn("slow");
          return false;
      });
      });
      $(function(){
      $("#automobile").click(function(e){
            e.preventDefault();

            $("#cateOne").delay(180).fadeIn("fast").removeClass('hidden').animate({
        top: '0%'
    });
    $("#block").fadeOut("fast");

$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

            return false;
        });
        });
        $(function(){
        $("#beauty").click(function(e){
              e.preventDefault();
              $("#cateTwo").delay(180).fadeIn("slow").removeClass('hidden').animate({

          top: '0%'

      });
      $("#block").fadeOut("fast");
      $("#cateOne").fadeOut("fast").animate({
top: '30%'
});

$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});
              return false;
          });
          });
          $(function(){
          $("#cooking").click(function(e){
                e.preventDefault();
                $("#cateThree").delay(180).fadeIn("slow").removeClass('hidden').animate({

            top: '0%'

        });
        $("#block").fadeOut("fast");
        $("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});
                return false;
            });
            });
            $(function(){
            $("#diy").click(function(e){
                  e.preventDefault();
                  $("#cateFour").delay(180).fadeIn("slow").removeClass('hidden').animate({

              top: '0%'

          });
          $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});

$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                  return false;
              });
              });
              $(function(){
              $("#entertainment").click(function(e){
                    e.preventDefault();
                    $("#cateFive").delay(180).fadeIn("slow").removeClass('hidden').animate({

                top: '0%'

            });
            $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});

$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                    return false;
                });
                });
                $(function(){
                $("#exercise").click(function(e){
                      e.preventDefault();
                      $("#cateSix").delay(180).fadeIn("slow").removeClass('hidden').animate({

                  top: '0%'

              });
              $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});

$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                      return false;
                  });
                  });
                  $(function(){
                  $("#fashion").click(function(e){
                        e.preventDefault();
                        $("#cateSeven").delay(180).fadeIn("slow").removeClass('hidden').animate({

                    top: '0%'

                });
                $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});

$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});
                        return false;
                    });
                    });
                    $(function(){
                    $("#financialHealth").click(function(e){
                          e.preventDefault();
                          $("#cateEight").delay(180).fadeIn("slow").removeClass('hidden').animate({

                      top: '0%'

                  });
                  $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});

$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                          return false;
                      });
                      });
                      $(function(){
                      $("#home").click(function(e){
                            e.preventDefault();
                            $("#cateNine").delay(180).fadeIn("slow").removeClass('hidden').animate({

                        top: '0%'

                    });
                    $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});

$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                            return false;
                        });
                        });
                        $(function(){
                        $("#livingGreen").click(function(e){
                              e.preventDefault();
                              $("#cateTen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                          top: '0%'

                      });
                      $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});

$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                              return false;
                          });
                          });
                          $(function(){
                          $("#movieReviews").click(function(e){
                                e.preventDefault();
                                $("#cateEleven").delay(180).fadeIn("slow").removeClass('hidden').animate({

                            top: '0%'

                        });
                        $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});

$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                                return false;
                            });
                            });
                            $(function(){
                            $("#nutrition").click(function(e){
                                  e.preventDefault();
                                  $("#cateTwelve").delay(180).fadeIn("slow").removeClass('hidden').animate({

                              top: '0%'

                          });
                          $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});

$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                                  return false;
                              });
                              });
                              $(function(){
                              $("#parenting").click(function(e){
                                    e.preventDefault();
                                    $("#cateThirteen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                                top: '0%'

                            });
                            $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});

$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                                    return false;
                                });
                                });
                                $(function(){
                                $("#petHealth").click(function(e){
                                      e.preventDefault();
                                      $("#cateFourteen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                                  top: '0%'

                              });
                              $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});

$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});

                                      return false;
                                  });
                                  });
                                  $(function(){
                                  $("#technology").click(function(e){
                                        e.preventDefault();
                                        $("#cateFifteen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                                    top: '0%'

                                });
                                $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});
                                        return false;
                                    });
                                    });
                                    $(function(){
                                    $("#travel").click(function(e){
                                          e.preventDefault();
                                          $("#cateSixteen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                                      top: '0%'

                                  });
                                  $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeventeen").fadeOut("fast").animate({
top: '30%'
});
                                          return false;
                                      });
                                      });
                                      $(function(){
                                      $("#wellness").click(function(e){
                                            e.preventDefault();
                                            $("#cateSeventeen").delay(180).fadeIn("slow").removeClass('hidden').animate({

                                        top: '0%'

                                    });
                                    $("#block").fadeOut("fast");

$("#cateOne").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwo").fadeOut("fast").animate({
top: '30%'
});
$("#cateThree").fadeOut("fast").animate({
top: '30%'
});
$("#cateFour").fadeOut("fast").animate({
top: '30%'
});
$("#cateFive").fadeOut("fast").animate({
top: '30%'
});
$("#cateSix").fadeOut("fast").animate({
top: '30%'
});
$("#cateSeven").fadeOut("fast").animate({
top: '30%'
});
$("#cateEight").fadeOut("fast").animate({
top: '30%'
});
$("#cateNine").fadeOut("fast").animate({
top: '30%'
});
$("#cateTen").fadeOut("fast").animate({
top: '30%'
});
$("#cateEleven").fadeOut("fast").animate({
top: '30%'
});
$("#cateTwelve").fadeOut("fast").animate({
top: '30%'
});
$("#cateThirteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFourteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateFifteen").fadeOut("fast").animate({
top: '30%'
});
$("#cateSixteen").fadeOut("fast").animate({
top: '30%'
});

                                            return false;
                                        });
                                        });

                                        $(document).ready(function(){
    $("#goToPrevSlide").mouseover(function(){
        $(".left").animate({

            height: '10px',
            width: '10px'

        });
    });
});
$(document).ready(function(){
$("#goToPrevSlide").mouseout(function(){
$(".left").animate({

height: '-10px',
width: '-10px'

});
});
});

</script>

</body>
</html>
