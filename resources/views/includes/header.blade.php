<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta property="og:url" content="http://www.valeron.net/index.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Rangrez : An online painting Auction" />
    <meta property="og:description" content="the website is for online art auction" />
    <meta property="og:image" content="http://www.valeron.net/img/valeron-artist.jpg" />
    <meta name="description" content="the website is for online art auction" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="robots" content="index,follow,all" />
    <meta name="keywords" content="Rangrezz, Art, Auction,Online ,Painting" />
    <meta name="author" content="Rangrezz" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon-180x180.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('img/android-chrome-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('img/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{asset('img/mstile-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/grid.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/3d.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/overlay.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js">
    </script>
    <script src="https://kit.fontawesome.com/8f51f774c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('datetimepicker/build/jquery.datetimepicker.min.css')}}">
    <script src="{{asset('datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('validation.js')}}"></script>
    <style type="text/css">
        .fa .fa-envelope-square:hover {
            color: red;
        }

        .box-shadow {
            -webkit-box-shadow: 19px 19px 50px -17px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 19px 19px 50px -17px rgba(0, 0, 0, 0.5);
            box-shadow: 19px 19px 50px -17px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body>


    <div class="animsition-overlay">
        <div id="section-1">
            <header class="main_h">
                <div class="menufix"> <a class="logo" href="{{route('index')}}"><img src="{{asset('images/rang.png')}}"
                            alt="Hello" style="width: 130px; height: 30px"></a>
                    <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
                    <nav>
                        <ul>
                            {{-- <li><a class="out animsition-link" href="index">HOME</a></li> --}}
                            <li class="line"><a class="out animsition-link"
                                    href="{{route('image-gallery')}}">GALLERY</a>
                            </li>
                            <li class="line"><a class="out animsition-link" href="auction.php">AUCTION</a></li>
                            <li class="line"><a class="out animsition-link" href="register.php">REGISTER</a></li>
                            <li class="line"><a class="out animsition-link" href="login.php">LOGIN</a></li>
                            <li class="line"><a class="out animsition-link" href="contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- / row -->

            </header>