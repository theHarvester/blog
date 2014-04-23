<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
    $posts = Post::where('active', '=', true)
        ->orderBy('published_at', 'desc')
        ->take(10)
        ->skip(0)
        ->get();

	return View::make('blog.list')
        ->with('posts', $posts);
}));

Route::get('page/{pageNum}', function($pageNum)
{

    print_r($pageNum);
    die();
});

Route::get('post/{slug}',  array('as' => 'post', function($slug)
{
    $post = Post::where('slug', '=', $slug)->first();
    if(count($post)){
        return View::make('blog.article')
            ->with('post', $post);
    } else {
        return Redirect::route('home');
    }

}));



Route::controller('backend', 'UsersController');