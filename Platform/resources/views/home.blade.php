<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Voice Recognition</title>
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?= asset('fonts/icomoon/style.css');?>">
        <link rel="stylesheet" href="<?= asset('fonts/flaticon/font/flaticon.css');?>">
        <link rel="stylesheet" href="<?= asset('css/global/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?= asset('css/global/jquery-ui.css');?>">
        <link rel="stylesheet" href="<?= asset('css/global/aos.css');?>">
        <link rel="stylesheet" href="<?= asset('css/pages/home.css');?>">
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
            <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Voice</a></h1>
                        </div>
                        <div class="col-12 col-md-10 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                    <li><a href="#home-section" class="nav-link">Home</a></li>
                                    <li><a href="#about-section" class="nav-link">About Us</a></li>
                                    <li><a href="#services-section" class="nav-link">Services</a></li>
                                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
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
            
            <div class="site-blocks-cover overlay" style="background-image: url(images/header.png);" data-aos="fade" id="home-section">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 mt-lg-5 text-center">
                            <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
                            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio soluta eius error.</p>
                            <div data-aos="fade-up" data-aos-delay="100">
                            <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#about-section" class="mouse smoothscroll">
                    <span class="mouse-icon">
                    <span class="mouse-wheel"></span>
                    </span>
                </a>
            </div>  

            <div class="site-section cta-big-image" id="about-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center" data-aos="fade">
                            <h2 class="section-title mb-3">About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                            <figure class="circle-bg">
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <div class="mb-4">
                                <h3 class="h3 mb-4 text-black">For the next great business</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat.</p>
                            </div>
                            
                            <div class="mb-4">
                                <ul class="list-unstyled ul-check success">
                                    <li>Officia quaerat eaque neque</li>
                                    <li>Possimus aut consequuntur incidunt</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipisicing elit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <section class="site-section" id="about-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-5 ml-auto mb-5 order-1 order-lg-2" data-aos="fade" data-aos="fade-up" data-aos-delay="">
                            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade">
                            <div class="row">
                                <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                                    <div class="unit-4">
                                        <div class="unit-4-icon mr-4 mb-3"><span class="text-dark flaticon-head"></span></div>
                                        <div>
                                            <h3>Web &amp; Mobile Specialties</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                                            <p class="mb-0"><a href="#">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="unit-4">
                                        <div class="unit-4-icon mr-4 mb-3"><span class="text-dark flaticon-smartphone"></span></div>
                                        <div>
                                            <h3>Intuitive Thinkers</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                                            <p class="mb-0"><a href="#">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>

            <section class="site-section bg-light" id="services-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center" data-aos="fade">
                            <h2 class="section-title mb-3">Our Services</h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-startup"></span></div>
                                <div>
                                    <h3>Business Consulting</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-graphic-design"></span></div>
                                <div>
                                    <h3>Market Analysis</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-settings"></span></div>
                                <div>
                                    <h3>User Monitoring</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-idea"></span></div>
                                <div>
                                    <h3>Insurance Consulting</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-smartphone"></span></div>
                                <div>
                                    <h3>Financial Investment</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-dark flaticon-head"></span></div>
                                <div>
                                    <h3>Financial Management</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                    <p><a href="#">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="site-section" id="pricing-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center" data-aos="fade-up">
                            <h2 class="section-title mb-3">Pricing</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                            <div class="pricing">
                                <h3 class="text-center text-black">Basic</h3>
                                <div class="price text-center mb-4 ">
                                    <span><span>$47</span> / year</span>
                                </div>
                                <ul class="list-unstyled ul-check success mb-5">
                                    
                                    <li>Officia quaerat eaque neque</li>
                                    <li>Possimus aut consequuntur incidunt</li>
                                    <li class="remove">Lorem ipsum dolor sit amet</li>
                                    <li class="remove">Consectetur adipisicing elit</li>
                                    <li class="remove">Dolorum esse odio quas architecto sint</li>
                                </ul>
                                <p class="text-center">
                                    <a href="#" class="btn btn-secondary">Buy Now</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="pricing">
                                <h3 class="text-center text-black">Premium</h3>
                                <div class="price text-center mb-4 ">
                                    <span><span>$200</span> / year</span>
                                </div>
                                <ul class="list-unstyled ul-check success mb-5">
                                    
                                    <li>Officia quaerat eaque neque</li>
                                    <li>Possimus aut consequuntur incidunt</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipisicing elit</li>
                                    <li class="remove">Dolorum esse odio quas architecto sint</li>
                                </ul>
                                <p class="text-center">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="pricing">
                                <h3 class="text-center text-black">Professional</h3>
                                <div class="price text-center mb-4 ">
                                    <span><span>$750</span> / year</span>
                                </div>
                                <ul class="list-unstyled ul-check success mb-5">
                                    
                                    <li>Officia quaerat eaque neque</li>
                                    <li>Possimus aut consequuntur incidunt</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipisicing elit</li>
                                    <li>Dolorum esse odio quas architecto sint</li>
                                </ul>
                                <p class="text-center">
                                    <a href="#" class="btn btn-secondary">Buy Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="site-section bg-light" id="contact-section" data-aos="fade">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Contact Us</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4 text-center">
                            <p class="mb-4">
                                <span class="icon-room d-block h4 text-dark"></span>
                                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="mb-4">
                                <span class="icon-phone d-block h4 text-dark"></span>
                                <a href="#">+1 232 3235 324</a>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="mb-0">
                                <span class="icon-mail_outline d-block h4 text-dark"></span>
                                <a href="#">youremail@domain.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <form action="#" class="p-5 bg-white">
                                <h2 class="h4 text-black mb-5">Contact Form</h2> 
                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black" for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="email">Email</label> 
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Subject</label> 
                                        <input type="subject" id="subject" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="message">Message</label> 
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 text-right">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                                    </div>
                                </div>
                            </form>
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
                    <div class="row pt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="<?= asset('js/global/jquery-3.3.1.min.js');?>"></script>
        <script src="<?= asset('js/global/jquery-ui.js');?>"></script>
        <script src="<?= asset('js/global/popper.min.js');?>"></script>
        <script src="<?= asset('js/global/bootstrap.min.js');?>"></script>
        <script src="<?= asset('js/global/jquery.easing.1.3.js');?>"></script>
        <script src="<?= asset('js/global/aos.js');?>"></script>
        <script src="<?= asset('js/global/jquery.fancybox.min.js');?>"></script>
        <script src="<?= asset('js/global/jquery.sticky.js');?>"></script>
        <script src="<?= asset('js/pages/home.js');?>"></script>
    </body>
</html>
