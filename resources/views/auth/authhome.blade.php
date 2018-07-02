@extends ('layouts.app')

@section ('authlogin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-5">
                <div class="card-header">Dashboard</div>
                <div class="d-flex flex-row justify-content-center">
  <div class="p-2">
<a href="{{ url('/auth/authcreate') }}"><div class="btn btn-primary btn-lg  m-3">New Post</div></a>
  </div>
  <div class="p-2">
<a href="{{ url('/auth/authindex') }}"><div class="btn btn-primary btn-lg  m-3">Review Posts</div></a>
  </div>

</div>


<!--<a href="{{ url('/posts/delete') }}">Delete Posts</a>
<a href="{{ url('/posts/archives') }}">Archives</a>    HIDDEN FOR PRESENT-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
