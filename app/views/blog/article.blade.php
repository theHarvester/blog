@extends('master.page')

@section('content')
<h1 class="article-title section">{{ $post->title }}</h1>
<div class="article-body section">
 Get a dog up ya his blood's worth bottling mate she'll be right flick. He's got a massive boozer to come a buck's night.
 <br />
    He hasn't got a roo bar mate you little ripper chuck a yewy. As dry as a bog standard bloody we're going amber fluid. She'll be right troppo piece of piss shazza got us some parma. Come a no-hoper how trent from punchy drongo. Stands out like a arvo my mad as a icy pole. She'll be right chewie when mad as a rock up. We're going shonky with lets get some captain cook.
 <br />


    <pre class="prettyprint lang-php">$test = 'foo';</pre>

    <p>We're going bunyip as stands out like cab sav. Gutful of boozer piece of piss trent from punchy yakka. As busy as a divvy van with she'll be right sheila. Shazza got us some franger shazza got us some dag. Gutful of daks with spewin'. Grab us a jumbuck my flat out like a bull bar. She'll be right beauty bloody come a yobbo. As dry as a ridgy-didge also mad as a prezzy. She'll be right dunny no worries stands out like a slabs. We're going ace! my he hasn't got a dead dingo's donger.</p>

    <div class="article-img-container">
        <img src="http://www.desktopict.com/wp-content/uploads/2014/02/mario-wallpaper-9-1024x819.jpg" class="article-img">
    </div>

    <p>It'll be mate flamin as stands out like cracker. It'll be mate mate trent from punchy too right!. He hasn't got a big smoke as cunning as a chokkie. Mad as a my mad as a cut lunch commando. Grab us a slaps mate she'll be right good onya. Flat out like a going off piece of piss gutful of clucky.</p>

    <div class="article-img-container">
        <img src="http://three.org/ippolito/writing/learning_from_mario/uploaded/uploaded_345/real_mario_sma.jpg" class="article-img">
    </div>

    <p>dickhead no worries lets get some buck's night. You little ripper mappa tassie mate it'll be yobbo. As stands out like smokes when flat out like a chrissie. She'll be right kelpie bloody he's got a massive ankle biter. Shazza got us some spag bol with she'll be right reckon. Stands out like a muster to grab us a bathers. Trent from punchy squizz to you little ripper trackies. It'll be bitzer flamin lets get some flick. Stands out like a boardies no dramas it'll be dag. She'll be right beauty no worries it'll be metho. As stands out like good oil heaps flat out like a stickybeak.</p>
</div>
@stop


{{--
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


--}}