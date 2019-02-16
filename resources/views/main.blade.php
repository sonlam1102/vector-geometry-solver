<!doctype html>
<html>

<head>
    <title> Giải toán Vector</title>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'/>

    <meta name='apple-mobile-web-app-title' content='Cymath'/>

    <link rel='apple-touch-icon' href='img/icon.gif'/>
    <link rel='stylesheet' type='text/css' href='style/style.css'/>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

</head>

<body link='#0000CC' alink='#0000CC' vlink='#0000CC'>
<input id="csrf_token" value="{{ @csrf_token() }}" hidden>

<div id="container">

    <div id="header" style='display:block;width:100%;  border-bottom:1px solid #e6e6e6;'>
        @include('assets.header')
    </div>

    <div class='content' style="text-align:center;  width:90%;">
        @yield('content')
    </div>

    <div class='content_footer' style="position:absolute;bottom:0px;width:100%;text-align: center;height: 0px;">
        @include('assets.footer')
    </div>

</div>

</body>

</html>
@include('assets.scripts')