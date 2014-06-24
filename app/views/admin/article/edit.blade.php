@extends('master.page')

@section('content')
<div class="section">
    <h2 class="article-title list-title">Edit Article</h2>

    {{ Form::open(array('url' => 'article/'.$post->id, 'method' => 'POST')) }}
        <p>
            {{ Form::label('title', 'Title') }}
        </p>
        <p>
            {{ Form::text('title', $post->title) }}
        </p>
        <p>
            {{ Form::label('slug', 'Slug') }}
        </p>
        <p>
            {{ Form::text('slug', $post->slug) }}
        </p>
        <p>
            {{ Form::label('thumbnail', 'Thumbnail URL') }}
        </p>
        <p>
            {{ Form::text('thumbnail', $post->thumbnail) }}
        </p>
        <p>
            {{ Form::label('page_tag_line', 'Page tag line') }}
        </p>
        <p>
            {{ Form::text('page_tag_line', $post->page_tag_line) }}
        </p>
        <p>
            {{ Form::label('tag_line', 'Tag line') }}
        </p>
        <p>
            {{ Form::text('tag_line', $post->tag_line) }}
        </p>
        <p>
            {{ Form::label('summary', 'Summary') }}
        </p>
        <p>
            {{ Form::textarea('summary', $post->summary) }}
        </p>
        <p>
            {{ Form::label('article_raw', 'Article markdown') }}
        </p>
        <p>
            {{ Form::textarea('article_raw', $post->article_raw) }}
        </p>
        <p>
            <span class="btn_submit">{{ Form::submit('Save and preview') }}</span>
        </p>
    </div>
    {{ Form::close() }}
</div>
{{ Form::close() }}

@stop