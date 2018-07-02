@extends ('layouts.app')

@section ('authlogin')
<div class="container">


  @foreach ($postsl as $post)
@include ('auth.authpost')




@endforeach
</div>

  @endsection
