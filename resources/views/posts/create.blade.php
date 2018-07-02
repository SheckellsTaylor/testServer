@extends ('layouts/app')

@section ('content')
<div class="container">
<h1>Publish a posts</h1>


<form method="POST" action="/posts" enctype="multipart/form-data">
  {{csrf_field() }}
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title" required>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="category" name="category">
  <label class="form-check-label" for="category">
    Category
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="2" id="category" name="category">
<label class="form-check-label" for="category">
  Category
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="3" id="category" name="category">
<label class="form-check-label" for="category">
  Category
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="4" id="category" name="category">
<label class="form-check-label" for="category">
  Category
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="5" id="category" name="category">
<label class="form-check-label" for="category">
  Category
</label>
</div>

  <div class="form-group">
    <label for="body">Video</label>
    <input type="file" class="form-control-file" id="video" name="video" placeholder="Upload Video">
     </div>

     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="1" id="duration" name="duration">
       <label class="form-check-label" for="duration">
         30 days
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="2" id="duration" name="duration">
       <label class="form-check-label" for="duration">
         60 days
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="3" id="duration" name="duration">
       <label class="form-check-label" for="duration">
         90 days
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="4" id="duration" name="duration">
       <label class="form-check-label" for="duration">
         120 days
       </label>
     </div>

  <div class="form-group">

    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image" name="image" placeholder="Image">
     </div>

  <div class="form-group">
    <label for="metades">Meta Description</label>
    <textarea type="text" class="form-control" id="metades" name="metades" placeholder="Meta Description" required></textarea>
  </div>
  <div class="form-group">
    <label for="metaauth">Meta Author</label>
    <textarea type="text" class="form-control" id="metaauth" name="metaauth" placeholder="Meta Author" required></textarea>
  </div>
  <div class="form-group">
    <label for="metakey">Meta Keywords</label>
    <textarea type="text" class="form-control" id="metakey" name="metakey" placeholder="Meta Keywords" required></textarea>
  </div>
  <div class="form-group">
    <label for="body">Article</label>
    <textarea type="text" class="form-control" id="body" name="body" placeholder="Body" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>

  @include ('layouts.errors')
</form>

</div>


  @endsection
