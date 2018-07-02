@section ('categoryOne')
@foreach($cateOne as $category)
  <li>{{$category->category}}</li>
  @endforeach
</ul>
@endsection
