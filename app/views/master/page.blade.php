<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We blog about code</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>


    {{HTML::style('css/normalize.css')}}
    {{HTML::style('css/animate.css')}}
    {{HTML::style('css/page.less', array('type' => 'text/less'))}}

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?&skin=desert"></script>

    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        var urlPathPrefix = "{{url('/', $parameters = array(), $secure = null)}}";
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.js"></script>
</head>

<body>
<div id="header">
    <div id="site-title">
        We blog about code
    </div>
    <div id="page-tag-line">When life hands you lemons, do tequila shots</div>
</div>
<div id="body">
    <div class="body-content">
        @yield('content')
    </div>
</div>
<div id="footer">
    <div id="footer-content">
        <h2 class="article-title">Feedback</h2>
        Here
    </div>
</div>
<!--{{HTML::script('js/page.js')}}-->
</body>
</html>