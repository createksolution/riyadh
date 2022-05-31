<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Styles -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#e33324">
    <meta name="description" content="Real Estate HTML Template">
    <meta name="keywords" content="Apartment, Estate Agency, Housing, Real Estate, Real Estate Broker, Real Estate Property, Single Property">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: RealFun - Real Estate HTML Template ::</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    <!-- CSS only -->
    <link rel="stylesheet" href="/css/stylesheet.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <!-- Preloader Start -->
            <div class="preloader">
                <div class="utf-preloader">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- Preloader End -->
            <!-- Wrapper -->
            <div id="wrapper">
                <!-- Compare Property Widget -->
                <div class="utf-compare-slidebar-area">
                    <div class="utf-smt-trigger-item"></div>
                    <div class="utf-smt-content">
                    <h4>Compare Property
                        <span class="utf-smt-mobile-trigger-item"></span>
                    </h4>
                    <div class="utf-smt-property-item">
                        <!-- Property -->
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
                                <div class="utf-listing-badges-item"><span class="for-sale">For Sale</span></div>
                                <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$420,000</i></span> </div>
                                <img src="/images/listing-01.jpg" alt="">
                            </a>
                        </div>
                        <!-- Property -->
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
                                <div class="utf-listing-badges-item"><span class="for-sale">For Sale</span></div>
                                <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$420,000</i></span> </div>
                                <img src="/images/listing-02.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="utf-smt-buttons">
                        <a href="compare-properties.html" class="button">Compare Property</a></div>
                    </div>
                </div>
                <!-- Compare Property Widget / End -->
                <!-- Header Container -->
                <header id="header-container" class="fullwidth">
                    <!-- Header -->
                    <div id="header">
                        <div class="container">
                            <div class="left-side">
                                <div id="logo"><a href="index.html"><img src="/images/logo.png" alt=""></a></div>
                                <div class="mmenu-trigger">
                                    <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
                                </div>
                                <!-- Main Navigation -->
                                <nav id="navigation" class="style-1">
                                    <ul id="responsive">
                                        <li><a class="{{ (request()->segment(1) == '') ? 'current' : '' }}" href="/">Accueil</a></li>
                                        <li><a class="{{ (request()->segment(1) == 'service') ? 'current' : '' }}" href="#">Service</a></li>
                                        <li><a class="{{ (request()->segment(1) == 'about') ? 'current' : '' }}" href="#">A propos de nous</a></li>
                                        <li><a class="{{ (request()->segment(1) == 'blog') ? 'current' : '' }}" href="#">Blog</a></li>
                                        <li><a class="{{ (request()->segment(1) == 'contact') ? 'current' : '' }}" href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="clearfix"></div>
                            </div>
                            <div class="right-side">
                                <div class="header-widget">
                                    @guest('client')
                                        <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button sign-in"><i class="icon-line-awesome-user"></i> <span>Connexion</span></a>
                                    @else
                                    <div class="user-menu">
                                        <div class="user-name"><span><img src="/profile/{{Auth::guard('client')->user()->photo}}" alt=""></span><div class="user-name-title">Salut, {{Auth::guard('client')->user()->username}}!</div></div>
                                        <ul>
                                            <li><a href="/user/profile"><i class="sl sl-icon-user"></i> Mon Profil</a></li>
                                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Liste Des Signets</a></li>
                                            <li><a href="/client/{{Auth::guard('client')->user()->id}}/proprety"><i class="sl sl-icon-docs"></i> Mes proprétiés</a></li>
                                            <li><a href="/proprety/create"><i class="sl sl-icon-action-redo"></i> Nouveau Proprétié</a></li>
                                            <li><a href="/user/phone"><i class="sl sl-icon-phone"></i> Num Téléphone</a></li>
                                            <li><a href="/user/password"><i class="sl sl-icon-lock"></i> Mot de Passe</a></li>
                                            <li><a href="{{ route('client.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Déconnexion</a></li>
                                            <form id="logout-form" action="{{ route('client.logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                    @endguest
                                    <a href="/proprety/create" class="button border"><i class="icon-feather-plus-circle"></i> <span>Créer annonce</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clearfix"></div>

                @yield('content')
                 <!-- Footer -->
                <div id="footer">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="index.html"><img class="footer-logo" src="/images/footer_logo.png" alt=""></a>
                        <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when unknown printer took a galley type scrambled.</p>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Useful Links</h4>
                        <ul class="utf-footer-links-item">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Properties</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>My Account</h4>
                        <ul class="utf-footer-links-item">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Add Property</a></li>
                            <li><a href="#">My Listing</a></li>
                            <li><a href="#">Favorites</a></li>
                        </ul>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Resources</h4>
                        <ul class="utf-footer-links-item">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">How It Work</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Condition</a></li>
                        </ul>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Pages</h4>
                        <ul class="utf-footer-links-item">
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">How It Work</a></li>
                            <li><a href="#">FAQ Page</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Condition</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="copyrights">Copyright © 2021 All Rights Reserved.</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="backtotop"><a href="#"></a></div>
            </div>
        </main>
    </div>
</body>
</html>
