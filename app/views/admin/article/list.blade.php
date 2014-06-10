@extends('master.page')

@section('content')
<div class="section">
    <h2 class="article-title list-title">Articles</h2>
    {{ HTML::link('article/create', 'Create new article', null, false) }}
    @foreach($posts as $post)
    <div>
        {{ HTML::link('article/'.$post->id, 'Edit', null, false) }} -
        @if($post->active)
        {{ HTML::link('article/toggle_show/'.$post->id, 'Hide', null, false) }}
        @else
        {{ HTML::link('article/toggle_show/'.$post->id, 'Show', null, false) }}
        @endif
        - {{ $post->title }}
    </div>
    @endforeach
</div>
{{ Form::close() }}

@stop