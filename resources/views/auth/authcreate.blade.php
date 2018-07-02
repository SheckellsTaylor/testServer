@extends ('layouts.app')

@section ('authlogin')
<div class="container">
<h1>Publish a posts</h1>


<form method="POST" action="/auth" enctype="multipart/form-data">
  {{csrf_field() }}

  <div class="form-group mb-3 p-4">
    <label class="badge badge-primary p-1" for="Title"><h4>Title</h4></label>
    <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title" required>
  </div>

  <div class="form-group mb-3 p-4">
    <label for="subtitle" class="badge badge-primary p-1"><h4>Subtitle</h4></label>
    <input type="text" class="form-control" id="subtitle" placeholder="Enter Post Subtitle" name="subtitle" required>
  </div>

  <div class="form-group mb-3 p-4">
    <label for="author" class="badge badge-primary p-1"><h4>Author</h4></label>
    <input type="text" class="form-control" id="author" placeholder="Enter Post Author" name="author" required>
  </div>

    <div class="form-group mb-3 p-4">
      <label for="brand" class="badge badge-primary p-1"><h4>Brand</h4></label>
      <input type="text" class="form-control" id="brand" placeholder="Enter Brand" name="brand" required>
    </div>

    <div class="form-group mb-3 p-4">
      <label for="classify" class="badge badge-primary p-1"><h4>Post Identification Label</h4></label>
      <input type="text" class="form-control" id="classify" placeholder="Enter Post ID" name="classify" required>
    </div>
    <div class=" mb-3 p-4">
  <label for="categories" class="badge badge-primary p-1"><h4>Category</h4></label>

    <div class="d-flex flex-row mb-3 p-4">
      <div class="p-2">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="category" name="category">
  <label class="form-check-label" for="category">
    Automobile
  </label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="2" id="category" name="category">
<label class="form-check-label" for="category">
  Beauty
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="3" id="category" name="category">
<label class="form-check-label" for="category">
  Cooking
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="4" id="category" name="category">
<label class="form-check-label" for="category">
  DIY
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="5" id="category" name="category">
<label class="form-check-label" for="category">
  Entertainment
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="6" id="category" name="category">
<label class="form-check-label" for="category">
  Exercise
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="7" id="category" name="category">
<label class="form-check-label" for="category">
  Fashion
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="8" id="category" name="category">
<label class="form-check-label" for="category">
  Financial Health
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="9" id="category" name="category">
<label class="form-check-label" for="category">
  Home
</label>
</div>
</div>
</div>

<div class="d-flex flex-row">
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="10" id="category" name="category">
<label class="form-check-label" for="category">
  Living Green
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="11" id="category" name="category">
<label class="form-check-label" for="category">
  Movie Reviews
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="12" id="category" name="category">
<label class="form-check-label" for="category">
  Nutrition
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="13" id="category" name="category">
<label class="form-check-label" for="category">
  Parenting
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="14" id="category" name="category">
<label class="form-check-label" for="category">
  Pet Health
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="15" id="category" name="category">
<label class="form-check-label" for="category">
  Technology
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="16" id="category" name="category">
<label class="form-check-label" for="category">
  Travel
</label>
</div>
</div>
<div class="p-2">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="17" id="category" name="category">
<label class="form-check-label" for="category">
  Wellness
</label>
</div>
</div>

</div>
</div>
  <div class="form-group mb-3 p-4">
    <label for="body" class="badge badge-primary"><h4>Video</h4></label>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input form-control-file"  id="video" name="video">
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>

     </div>


     <div class="form-group mb-3 p-4">
       <label for="expireDate" class="badge badge-primary p-1"><h4>Expiration Date</h4></label>
       <input type="text" class="form-control" id="expireDate" placeholder="Enter date to archive xx/xx/xxxx" name="expireDate" required>
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
     </div>

  <div class="form-group mb-3 p-4">
    <label for="image" class="badge badge-primary p-1"><h4>Image</h4></label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input form-control-file"  id="image" name="image">
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>
     </div>

  <div class="form-group mb-3 p-4">
    <label for="metades" class="badge badge-primary p-1"><h4>Meta Description</h4></label>
    <textarea type="text" class="form-control" id="metades" name="metades" placeholder="Meta Description" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="metaauth" class="badge badge-primary p-1"><h4>Meta Author</h4></label>
    <textarea type="text" class="form-control" id="metaauth" name="metaauth" placeholder="Meta Author" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="metakey" class="badge badge-primary p-1"><h4>Meta Keywords</h4></label>
    <textarea type="text" class="form-control" id="metakey" name="metakey" placeholder="Meta Keywords" required></textarea>
  </div>

  <div class="form-group mb-3 p-4">
    <label for="teaser" class="badge badge-primary p-1"><h4>Teaser</h4></label>
    <input type="text" class="form-control" id="teaser" placeholder="Enter Teaser" name="teaser" required>
  </div>

  <div class="form-group mb-3 p-4">
    <label for="miniteaser" class="badge badge-primary p-1"><h4>Mini Teaser</h4></label>
    <input type="text" class="form-control" id="miniteaser" placeholder="Enter Mini Teaser" name="miniteaser" required>
  </div>

  <div class="form-group mb-3 p-4">
    <label for="headingOne" class="badge badge-primary p-1"><h4>Heading One</h4></label>
    <textarea type="text" class="form-control" id="headingOne" name="headingOne" placeholder="HeadingOne" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="body" class="badge badge-primary p-1"><h4>Body One</h4></label>
    <textarea type="text" class="form-control" id="body" name="body" placeholder="Body" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingTwo" class="badge badge-primary p-1"><h4>Heading Two</h4></label>
    <textarea type="text" class="form-control" id="headingTwo" name="headingTwo" placeholder="headingTwo" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodyTwo" class="badge badge-primary p-1"><h4>Body Two</h4></label>
    <textarea type="text" class="form-control" id="bodyTwo" name="bodyTwo" placeholder="BodyTwo" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingThree" class="badge badge-primary p-1"><h4>Heading Three</h4></label>
    <textarea type="text" class="form-control" id="headingThree" name="headingThree" placeholder="headingThree" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodyThree" class="badge badge-primary p-1"><h4>Body Three</h4></label>
    <textarea type="text" class="form-control" id="bodyThree" name="bodyThree" placeholder="BodyThree" required></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingFour" class="badge badge-primary p-1"><h4>Heading Four</h4></label>
    <textarea type="text" class="form-control" id="headingFour" name="headingFour" placeholder="heading Four"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodyFour" class="badge badge-primary p-1"><h4>Body Four</h4></label>
    <textarea type="text" class="form-control" id="bodyFour" name="bodyFour" placeholder="Body Four"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingFive" class="badge badge-primary p-1"><h4>Heading Five</h4></label>
    <textarea type="text" class="form-control" id="headingFive" name="headingFive" placeholder="heading Five"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodyFive" class="badge badge-primary p-1"><h4>Body Five</h4></label>
    <textarea type="text" class="form-control" id="bodyFive" name="bodyFive" placeholder="Body Five"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingSix" class="badge badge-primary p-1"><h4>Heading Six</h4></label>
    <textarea type="text" class="form-control" id="headingSix" name="headingSix" placeholder="headingSix"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodySix" class="badge badge-primary p-1"><h4>Body Six</h4></label>
    <textarea type="text" class="form-control" id="bodySix" name="bodySix" placeholder="Body Six"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingSeven" class="badge badge-primary p-1"><h4>Heading Seven</h4></label>
    <textarea type="text" class="form-control" id="headingSeven" name="headingSeven" placeholder="heading Seven"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodySeven" class="badge badge-primary p-1"><h4>Body Seven</h4></label>
    <textarea type="text" class="form-control" id="bodySeven" name="bodySeven" placeholder="Body Seven"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="headingEight" class="badge badge-primary p-1"><h4>Heading Eight</h4></label>
    <textarea type="text" class="form-control" id="headingEight" name="headingEight" placeholder="heading Eight"></textarea>
  </div>
  <div class="form-group mb-3 p-4">
    <label for="bodyEight" class="badge badge-primary p-1"><h4>Body Eight</h4></label>
    <textarea type="text" class="form-control" id="bodyEight" name="bodyEight" placeholder="Body Eight"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>

  @include ('layouts.errors')
</form>

</div>


  @endsection
