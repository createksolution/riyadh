@extends('layouts.app')
@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contacter Nous</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li>Contacter Nous</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container / Start -->
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-contact-map margin-bottom-50">
                        <div class="utf-google-map-container">
                            <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
                            <a href="#" id="streetView">Street View</a>
                        </div>
                    </div>
                </div>
            <!-- Contact Details -->
            <div class="col-md-4">
                <div class="utf-boxed-list-headline-item">
                    <h3><i class="icon-feather-map"></i> Address Du Bureau</h3>
                </div>
                <!-- Contact Details -->
                <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
                    <ul class="contact-details">
                        <li><i class="icon-feather-smartphone"></i> <strong>Numéro téléphone:</strong> <span>(+21) 124 123 4546</span></li>
                        <li><i class="icon-material-outline-email"></i> <strong>Address Email :</strong> <span><a href="#">info@example.com</a></span></li>
                        <li><i class="icon-feather-globe"></i> <strong>Site Web:</strong> <span>www.example.com</span></li>
                        <li><i class="icon-feather-map-pin"></i> <strong>Address:</strong> <span>3241, Lorem ipsum dolor sit amet, consectetur adipiscing elit Proin fermentum condimentum mauris.</span></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <section id="contact">
                    <div class="utf-boxed-list-headline-item">
                        <h3><i class="icon-feather-layers"></i> Form Du Contact</h3>
                    </div>
                    <div class="utf-contact-form-item">
                        <form>
                            <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Nom" id="name1" required />
                            </div>
                            <div class="col-md-6">
                                <input name="lname" type="text" placeholder="Prénom" id="lname1" required />
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" id="email" placeholder="Address Email" required />
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" id="subject"  placeholder="Sujet" required />
                            </div>
                            <div class="col-md-12">
                                <textarea name="msg" cols="40" rows="3" id="msg" placeholder="Message..." spellcheck="true" required></textarea>
                            </div>
                            </div>
                            <div class="utf-centered-button margin-bottom-10">
                                <input type="submit" class="submit button" id="submit" value="Envoyer Le Message" />
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- Contact Form / End -->
        </div>
    </div>
    <!-- Container / End -->

    <div class="margin-top-65"></div>

<!-- Scripts -->
<script src="/scripts/jquery-3.3.1.min.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<script src="/scripts/chosen.min.js"></script>
<script src="/scripts/magnific-popup.min.js"></script>
<script src="/scripts/owl.carousel.min.js"></script>
<script src="/scripts/rangeSlider.js"></script>
<script src="/scripts/sticky-kit.min.js"></script>
<script src="/scripts/slick.min.js"></script>
<script src="/scripts/masonry.min.js"></script>
<script src="/scripts/mmenu.min.js"></script>
<script src="/scripts/tooltips.min.js"></script>
<script src="/scripts/custom_jquery.js"></script>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
<script src="/scripts/infobox.min.js"></script>
<script src="/scripts/markerclusterer.js"></script>
<script src="/scripts/maps.js"></script>
@endsection
