@extends('master.page')

@section('content')
@if(Auth::check())
<div class="section">
    {{ HTML::link('articles', 'Manage articles', null, false) }}
</div>
@endif
@foreach($posts as $post)
<div class="section">
    <div class="list-left">
        <h2 class="article-title list-title">{{link_to_route('post', $post->title, $post->slug, array())}}</h2>
        <div class="article-blurb">
            {{ $post->summary }}
        </div>
    </div>
    <div class="list-right">
        <img src="{{ $post->thumbnail }}" class="article-blurb-img" />
    </div>
</div>

<div class="clear"></div>
@endforeach

@stop