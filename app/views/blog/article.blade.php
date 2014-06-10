@extends('master.page')

@section('content')
<h1 class="article-title section">{{ $post->title }}</h1>
<div class="article-body section">
@if(Auth::check())
    {{ HTML::link('article/'.$post->id, 'Edit', null, false) }}<br />
@endif
{{ $post->article }}
</div>
@stop
