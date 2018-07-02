<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
      $posts = Post::latest()->get();
    //  $cateOne = Post::where('category', '=', 1)->get();// Do I need this?

      return view('posts.index', compact('posts','cateOne'));
    }

    public function show($id)
    {
$post = Post::find($id);

  //  echo url("/posts/{$post->id}");
$category = Post::all(['category']);
  return view('posts.show', compact('post', 'category'));
    }
    public function createit()
    {
      $this->middleware('auth');
      return view('auth.authcreate');
    }

    public function storeit(Request $request)
    {
    //  Storage::put('file.jpg', $contents);
      $this->validate(request(), [
        'title' => 'required|max:175',
        'body' => 'required'
      ]
    );
      $postls = new Post;
      $postls->id = request('id');
      $postls->title = request('title');
        $postls->brand = request('brand');
          $postls->author = request('author');
            $postls->subtitle = request('subtitle');
              $postls->teaser = request('teaser');
                $postls->miniteaser = request('miniteaser');
                $postls->expireDate = request('expireDate');
                $postls->classify = request('classify');
                $postls->body = request('body');
                $postls->bodyTwo = request('bodyTwo');
                $postls->bodyThree = request('bodyThree');
                $postls->bodyFour = request('bodyFour');
                $postls->bodyFive = request('bodyFive');
                $postls->bodySix = request('bodySix');
                $postls->bodySeven = request('bodySeven');
                $postls->bodyEight = request('bodyEight');
                  $postls->headingOne = request('headingOne');
                    $postls->headingTwo = request('headingTwo');
                      $postls->headingThree = request('headingThree');
                      $postls->headingFour = request('headingFour');
                      $postls->headingFive = request('headingFive');
                      $postls->headingSix = request('headingSix');
                      $postls->headingSeven = request('headingSeven');
                      $postls->headingEight = request('headingEight');
        $postls->category = request('category');
        $postls->duration = request('duration');
        $postls->metades = request('metades');
        $postls->metakey = request('metakey');
        $postls->metaauth = request('metaauth');
$postls->image = request()->file('image')->store('images');
        $postls->video = request()->file('video')->store('videos');
      $postls->save();
      return redirect('/auth/authhome');
      //dd(request()->all());
    }//end store function

    public function store(Request $request)
    {
    //  Storage::put('file.jpg', $contents);
      $this->validate(request(), [
        'title' => 'required|max:175',
        'body' => 'required'
      ]
    );
      $posts = new Post;
          $posts->id = request('id');
      $posts->title = request('title');
      $posts->brand = request('brand');
        $posts->author = request('author');
          $posts->subtitle = request('subtitle');
            $posts->teaser = request('teaser');
              $posts->miniteaser = request('miniteaser');
                $posts->expireDate = request('expireDate');
                  $posts->classify = request('classify');
      $posts->body = request('body');
      $post->bodyTwo = request('bodyTwo');
      $post->bodyThree = request('bodyThree');
      $post->bodyFour = request('bodyFour');
      $post->bodyFive = request('bodyFive');
      $post->bodySix = request('bodySix');
      $post->bodySeven = request('bodySeven');
      $post->bodyEight = request('bodyEight');
        $post->headingOne = request('headingOne');
          $post->headingTwo = request('headingTwo');
            $post->headingThree = request('headingThree');
            $post->headingFour = request('headingFour');
            $post->headingFive = request('headingFive');
            $post->headingSix = request('headingSix');
            $post->headingSeven = request('headingSeven');
            $post->headingEight = request('headingEight');
        $posts->category = request('category');
        $posts->duration = request('duration');
        $posts->metades = request('metades');
        $posts->metakey = request('metakey');
        $posts->metaauth = request('metaauth');
$posts->image = request()->file('image')->store('images');
        $posts->video = request()->file('video')->store('videos');
      $posts->save();
      return redirect('/');
      //dd(request()->all());
    }//end store function
    public function edit($id)
    {
      $this->middleware('auth');
      $postls = Post::find($id);

        //  echo url("/posts/{$post->id}");
      $category = Post::all(['category']);
        return view('auth.authwelcome', compact('postls', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
      $this->middleware('auth');
      $postsl = Post::all();

      return view('auth.authindex', compact('postsl'));

  //    $postsl = Post::latest()->get();
    //  $cateOne = Post::where('category', '=', 1)->get();// Do I need this?

    //  return view('auth.logg', compact('postsl','cateOne'));
        //auth index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function destroy($postl)
  {
  //  Storage::delete('file.jpg');
    $this->middleware('auth');
    $this->authorize('update', $postl);
            $postl->delete();


   //if(file_exists('file_path'))
   //{@unlink('file_path');
       return view('auth.authindex', compact('postsl'));
 }


    public function archives()
    {
      $this->middleware('auth');
    //  $posts = Post::latest()
    //  ->filter(request(['month', 'year']))
    //  ->get();




      //$posts = $posts->get();

      $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();
      return $archives;

      return view('posts.archives', compact('posts', 'archives'));
    }

}
