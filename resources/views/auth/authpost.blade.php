@section('authOne')



@foreach ($postsl as $post)

@if($post->category == 1)
<div class="d-flex flex-collumn make flex-wrap">

<div class="p-2">
  <p>{{$post->category}}</p>
      <a href="/auth/{{ $post->id}}">
      <div class="card" style="width: 15rem;">

        <img class="card-img-top" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> {{ $post->title}}</h5></p>
        </div>
      </div>
      </a>
      <form action="" method="POST">

          <button type="submit" class="btn btn-link">Delete Thread</button>
      </form>
</div>
</div>
@endif
@endforeach
@endsection

@section('authtwo')
@foreach ($postsl as $post)
@if($post->category == 2)
<div class="d-flex flex-collumn">

<div class="p-2">
  <p>{{$post->category}}</p>
      <a href="/auth/{{ $post->id}}">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> {{ $post->title}}</h5></p>
        </div>
      </div>
      </a>
</div>
</div>
@endif
@endforeach
@endsection

@section('auththree')
@foreach ($postsl as $post)
@if($post->category == 3)
<div class="d-flex flex-collumn">

<div class="p-2">
  <p>{{$post->category}}</p>
      <a href="/auth/{{ $post->id}}">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> {{ $post->title}}</h5></p>
        </div>
      </div>
      </a>
</div>
</div>
@endif
@endforeach
@endsection

@section('authfour')
@foreach ($postsl as $post)
@if($post->category == 4)
<div class="d-flex flex-collumn">

<div class="p-2">
  <p>{{$post->category}}</p>
      <a href="/auth/{{ $post->id}}">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> {{ $post->title}}</h5></p>
        </div>
      </div>
      </a>
</div>
</div>
@endif
@endforeach
@endsection

@section('authfive')
@foreach ($postsl as $post)
@if($post->category == 5)
<div class="d-flex flex-collumn">

<div class="p-2">
  <p>{{$post->category}}</p>
      <a href="/auth/{{ $post->id}}">
      <div class="card" style="width: 20rem;">

        <img class="card-img-top" src="{{ asset('/storage/' . $post->image) }}" alt="Card image cap">
        <div class="card-body">

          <p class="card-text">    <h5 class="card-title"> {{ $post->title}}</h5></p>
        </div>
      </div>
      </a>
</div>
</div>
@endif
@endforeach
@endsection
