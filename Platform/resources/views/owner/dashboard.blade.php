<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Voice Recognition</title>
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/global/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/global/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">
        <style>
        @media (min-width: 768px) {
            .site-footer {
                padding: 3em 0 .35em;
            }
        }
        </style>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-dark" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
            <header class="site-navbar py-2 js-sticky-header site-navbar-target bg-dark" role="banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Voice</a></h1>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li><a href="{{ url('/#home-section') }}" class="nav-link">Home</a></li>
                                    <li><a href="{{ url('/#about-section') }}" class="nav-link">About Us</a></li>
                                    <li><a href="{{ url('/#services-section') }}" class="nav-link">Services</a></li>
                                    <li><a href="{{ url('/#pricing-section') }}" class="nav-link">Pricing</a></li>
                                    <li><a href="{{ url('/#contact-section') }}" class="nav-link">Contact</a></li>
                                    @guest
                                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('/owner') }}">Dashboard</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
                            <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                                <span class="icon-menu h3"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <section class="site-section" style="padding: 5em 0 1.4em;">
                <div class="container">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title m-0">Informations</h4></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" value="{{Auth::user()->name}}" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input class="form-control" value="{{Auth::user()->email}}" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Domain:</label>
                                <div class="input-group">
                                    <input class="form-control" name="domain" value="{{Auth::user()->domain}}" disabled/>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" style="padding: 8px 20px;" data-toggle="tooltip" title="copy" id="domain_clipboard"><i class="far fa-copy"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input class="form-control" value="Your registered password" disabled/>
                            </div>
                            <div class="form-group">
                                <label>API Access Token:</label>
                                <div class="input-group">
                                    <input class="form-control" name="token" value="{{Auth::user()->api_token}}" disabled/>
                                    <div class="input-group-append">
                                        <button class="btn btn-success" style="padding: 8px 20px;" data-toggle="tooltip" title="copy" id="token_clipboard"><i class="far fa-copy"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                                <li><a href="#services-section" class="smoothscroll">Services</a></li>
                                <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-4">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/global/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('js/global/aos.js')}}"></script>
        <script src="{{ asset('js/global/jquery.fancybox.min.js')}}"></script>
        <script src="{{ asset('js/global/jquery.sticky.js')}}"></script>
        <script src="{{ asset('js/pages/home.js')}}"></script>
        <script src="{{ asset('js/pages/owner.js')}}"></script>
    </body>
</html>