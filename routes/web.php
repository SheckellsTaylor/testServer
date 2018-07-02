<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|posts commands for form action=""
|GET /posts
|GET /posts/create
|POST /posts
|GET /posts/{id}/edit
|GET /posts{id}
|PATCH /posts/{id}
|DELETE /posts/{id}
*/

Route::get('/','PostsController@index', function () {
    return view('.layouts.enter', [$posts]);
});
Route::get('/posts/category/cateOne', function () {
//  $categories = DB::table('posts')->get();
//  $categories = DB::table('posts')->select('title','category')->get();
  $cateOne = DB::table('posts')->where('category', '=', 1)->get();
    $cateTwo = DB::table('posts')->where('category', '=', 2)->get();
      $cateThree = DB::table('posts')->where('category', '=', 3)->get();
        $cateFour = DB::table('posts')->where('category', '=', 4)->get();
          $cateFive = DB::table('posts')->where('category', '=', 5)->get();
//return $categories;
    return view('posts.category.cateOne', compact('cateOne','cateTwo','cateThree','cateFour','cateFive'));
});
Route::get('/posts/category/{category}', function ($id) {
  $category = DB::table('posts')->find($id);
//return $categories;
    return view('posts.category.catOne', compact('category'));
});
Route::get('/child', function () {
    return view('child');
});
Route::get('/slider', function () {
    return view('slider');
});
Route::get('/homeTop', function () {
    return view('homeTop');
});
Route::get('/pageOne', function () {
    return view('pageOne');
});
Route::get('/pageTwo', function () {
    return view('pageTwo');
});
Route::get('/pageThree', function () {
    return view('pageThree');
});
Route::get('/posts/',  'PostsController@index')->name('index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/delete/{post}', 'PostsController@show');
Route::get('/posts/{post}',  'PostsController@show');
Route::get('/posts/archives', 'PostsController@archives');
Route::post('/posts', 'PostsController@store');

Auth::routes(
);
Route::DELETE('/auth/{postls}',  'PostsController@destroy');
Route::get('/auth/authindex',  'PostsController@update');
Route::get('/auth/{postls}/edit',  'PostsController@edit');
Route::PATCH('/auth/{postls}',  'PostsController@edit');
Route::get('/auth/authcreate', 'PostsController@createit');
Route::post('/auth', 'PostsController@storeit');
Route::get('/auth/authhome','PostsController@update', function () {
    return view('auth.authhome', [$postsl]);
});
Route::get('/auth/{post}', ['middleware' => 'auth', 'uses' => 'PostsController@edit']);
Route::get('/auth/authhome', 'HomeController@index')->name('home');
