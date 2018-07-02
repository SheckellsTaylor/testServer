@extends ('layouts.enter')

@section ('metaauth')
{{$post->metaauth}}
@endsection

@section ('category')
{{$post->category}}
@endsection

@section ('metades')
{{$post->metades}}
@endsection

@section ('metakey')
{{$post->metakey}}
@endsection

@section ('title')
<!--<div class="col"></div>-->
  <div class="col-6 align-middle text-center mt-5 pt-5">
  <div class="container ml-3 mr-5 pl-5 pr-5">

<p class="text break ">   <h1 class="display-4 break"> {{ nl2br(e($post->title))}}    </h1></p>

  </div>

  </div>
@endsection


@section ('headOne')
<p class="text break "><h2>
{{nl2br(e($post->headingOne))}}
</h2>
</p>
@endsection
@section ('bodyOne')
<p class="text break">
{{nl2br(e($post->body))}}

</p>
@endsection
@section ('headTwo')
<p class="text break">
  <h2>
{{nl2br(e($post->headingTwo))}}
</h2>
</p>
@endsection
@section ('bodyTwo')
<p class="text break">
{{nl2br(e($post->bodyTwo))}}
</p>
@endsection
@section ('headThree')
<p class="text break">
  <h2>
{{nl2br(e($post->headingThree))}}
</h2>
</p>
@endsection
@section ('bodyThree')
<p class="text break">
{{nl2br(e($post->bodyThree))}}
</p>
@endsection

@section ('headFour')
<p class="text break">
  <h2>
{{nl2br(e($post->headingFour))}}
</h2>
</p>
@endsection

@section ('bodyFour')
<p class="text break">
{{nl2br(e($post->bodyFour))}}
</p>
@endsection

@section ('headFive')
<p class="text break">
  <h2>
{{nl2br(e($post->headingFive))}}
</h2>
</p>
@endsection
@section ('bodyFive')
<p class="text break">
{{nl2br(e($post->bodyFive))}}
</p>
@endsection
@section ('headSix')
<p class="text break">
  <h2>
{{nl2br(e($post->headingSix))}}
</h2>
</p>
@endsection
@section ('bodySix')
<p class="text break">
{{nl2br(e($post->bodySix))}}
</p>
@endsection
@section ('headSeven')
<p class="text break">
  <h2>
{{nl2br(e($post->headSeven))}}
</h2>
</p>
@endsection
@section ('bodySeven')
<p class="text break">
{{nl2br(e($post->bodySeven))}}
</p>
@endsection
@section ('headEight')
<p class="text break">
  <h2>
{{nl2br(e($post->headingEight))}}
</h2>
</p>
@endsection
@section ('bodyEight')
<p class="text break">
{{nl2br(e($post->bodyEight))}}
</p>
@endsection
@section ('image')
<div class="row posthold">
  <div class="text-left">
<div class="imspace">
  <img class="img-fluid float-right w-50 m-3" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">

</div>
@endsection
<!--img-fluid w-100" style="height:40vh;-->
@section ('video')
<figure id="videoContainer">
  <video id="video" controls preload="metadata" poster="{{ asset('/storage/' . $post->image) }}">
    <source src="{{ asset('/storage/' . $post->video) }}" type="video/mp4">
  </video>
  <figcaption>&copy; Smarter Lifestyle Network | <a href="link">Link here</a></figcaption>
</figure>
<ul id="video-controls" class="controls">
    <li><button id="playpause" type="button">Play/Pause</button></li>
    <li class="progress">
      <progress id="progress" value="0" min="0">
        <span> id="progress-bar"></span>
      </progress>
    </li>
    <li><button id="mute" type="button">Mute/Unmute</button></li>
    <li><button id="volinc" type="button">Vol+</button></li>
    <li><button id="voldec" type="button">Vol -</button></li>
    <li><button id="fs" type="button">Fullscreen</button></li>
</ul>
@endsection
@section ('spacer')



@endsection
