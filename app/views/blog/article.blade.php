@extends('master.page')

@section('content')
<h1 class="article-title section">{{ $post->title }}</h1>
<div class="article-body section">
{{ $post->article }}
</div>
@stop
