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

Route::get('test', array('as' => 'test', function()
{   
    $subject = "
{style:b}
asdf
{style}
{link:http://test.com}
Link Text
{link}
{code:PHP}asdf{code}
{code:JS}asdf{code}
{image:http://www.desktopict.com/wp-content/uploads/2014/02/mario-wallpaper-9-1024x819.jpg}alt text{image}
";
    $markup = new Markup();
    die($markup->toHtml($subject));
    
}));

Route::get('page/{pageNum}', function($pageNum)
{
    $posts = Post::where('active', '=', true)
        ->orderBy('published_at', 'desc')
        ->take(10)
        ->skip(($pageNum * 10) - 10)
        ->get();

    return View::make('blog.list')
        ->with('posts', $posts);
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

Route::group(array('before' => 'auth'), function()
{
    Route::get('article/create', array(function () {
        // create and redirect to article/id
        $post = new Post;
        $post->title = '';
        $post->slug = '';
        $post->thumbnail = '';
        $post->page_tag_line = '';
        $post->tag_line = '';
        $post->summary = '';
        $post->article_raw = '';
        $post->active = false;
        $post->save();
        return Redirect::to('article/'.$post->id);
    }));

    Route::get('article/toggle_show/{postId}', function ($postId) {
        $post = Post::find($postId);
        // inverse the active status
        $post->active = !$post->active;
        $post->save();
        return Redirect::route('articles');
    });

    Route::get('article/{postId}', array(function ($postId) {
        $post = Post::find($postId);
        return View::make('admin.article.edit')
            ->with('post', $post);
    }));

    Route::post('article/{postId}', array(function ($postId) {

        var_dump( Markdown::toHtml('something'));
        die();
        $post = Post::find($postId);
        $post->title = Input::get('title');
        $post->slug = Input::get('slug');
        $post->thumbnail = Input::get('thumbnail');
        $post->page_tag_line = Input::get('page_tag_line');
        $post->tag_line = Input::get('tag_line');
        $post->summary = Input::get('summary');
        $post->article_raw = Input::get('article_raw');
        $post->save();

        return View::make('blog.article')
            ->with('post', $post);
    }));

    Route::get('articles/preview/{post_id}', array(function () {
        return View::make('admin.article.preview');
    }));

    Route::get('articles', array('as' => 'articles', function () {
        $posts = Post::all();
        return View::make('admin.article.list')
            ->with('posts', $posts);
    }));
});

Route::controller('account', 'UsersController');