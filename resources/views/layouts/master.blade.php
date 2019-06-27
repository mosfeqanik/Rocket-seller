<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <!--css-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

    @stack('css')<!--search jQuery-->
    <script src="{{asset('js/main.js')}}"></script>
    <!--search jQuery-->
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <!--mycart-->
    <script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
    <!-- cart -->
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
    <!-- cart -->
    <!--start-rate-->
    <script src="{{asset('js/jstarbox.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
    <!--//End-rate-->
    @stack('js')
</head>
<body>
@include('partials1.header')
@yield('content1')
@include('partials1.footer')



</body>
</html>