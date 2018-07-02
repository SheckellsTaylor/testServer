@extends('layouts.app')

@section('content')
<h4>Archives</h4>
<ol class="list-unstyled">
    @foreach ($archives as $stats)

      <li>
          <a href="#">{{ $stats['month'] . ' ' . $stats['year']}}</a>
      </li>
    @endforeach
  </ol>

@endsection
