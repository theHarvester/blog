@extends('master.page')

@section('content')
<div class="section">
<h2 class="article-title list-title">Login</h2>

{{ Form::open(array('url' => 'backend/login', 'method' => 'POST')) }}

<p>
    <span class="pure-u-1-4">
        {{ Form::label('username', 'Email') }}
    </span>

    {{ Form::text('username', Input::old('username')) }}

</p>
<p>
    <span class="pure-u-1-4">
        {{ Form::label('password', 'Password') }}
    </span>
    {{ Form::password('password') }}
</p>
<p>
    <span class="btn_submit">{{ Form::submit('Login') }}</span>
</p>
</div>
{{ Form::close() }}

@stop
