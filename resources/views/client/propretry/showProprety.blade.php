@extends('layouts.app')
@section('content')
<!-- Titlebar -->
<div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Détail De La Propriété</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li>Détail De La Propriété</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
<div class="container">
    <div class="row margin-bottom-50">
        <div class="col-md-12">
        <!-- Slider -->
            <div class="property-slider default">
                <a href="/gallery/{{$proprety->photo}}" data-background-image="/gallery/{{$proprety->photo}}" class="item mfp-gallery"></a>
                @foreach ($image as $i)
                    <a href="/gallery/{{$i->image}}" data-background-image="/gallery/{{$i->image}}" class="item mfp-gallery"></a>
                @endforeach
            </div>
            <!-- Slider Thumbs -->
            <div class="property-slider-nav">
                <div class="item"><img src="/gallery/{{$proprety->photo}}" alt=""></div>
                @foreach ($image as $i)
                    <div class="item"><img src="/gallery/{{$i->image}}" alt=""></div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Property Description -->
        <div class="col-lg-8 col-md-7">
            <!-- Titlebar -->
            <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-0">
                <div class="property-title">
                    <div class="property-pricing">{{$proprety->price}}</div>
                    <h2>{{$proprety->title}} <span class="property-badge-sale">{{$proprety->status}}</span></h2>
                    <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> {{$proprety->adr}}, {{$proprety->state}}</span>
                    @php
                        $other = json_decode($proprety->other);
                        $sps = json_decode($proprety->sps);
                    @endphp
                    <ul class="property-main-features">
                        <li>Nombre du chambre<span>{{$proprety->room}}</span></li>
                        @if ($proprety->floor != null)
                            <li>Etage<span>{{$proprety->floor}}</span></li>
                        @else
                            <li>Etage<span>{{$proprety->nbrFloor}}</span></li>
                        @endif

                        @if (in_array('Garage', $other))
                            <li>Garages<span>1</span></li>
                        @endif
                        <li>Sq Ft<span>{{$proprety->area}}</span></li>
                    </ul>
                </div>
            </div>

            <div class="property-description">
                <!-- Description -->
                <div class="utf-desc-headline-item">
                    <h3><i class="icon-material-outline-description"></i> Description De La Propriété</h3>
                </div>
                <div class="show-more">
                    <p>{{$proprety->desc}}</p>
                    <a href="#" class="show-more-button">afficher Plus <i class="sl sl-icon-plus"></i></a>
                </div>

                <!-- Details -->
                <div class="utf-desc-headline-item">
                    <h3><i class="sl sl-icon-briefcase"></i> Property Details</h3>
                </div>
                <ul class="property-features margin-top-0">
                    <li>Property ID: <span>{{$proprety->unique}}</span></li>
                    <li>Prix: <span>{{$proprety->price}} DA</span></li>
                    <li>Paiement: <span>{{$proprety->pay}}</span></li>
                    @if ($proprety->payPar != null)
                        <li>Paiement par: <span>{{$proprety->payPar}}</span></li>
                    @endif
                    <li>Type de propriété: <span>{{$proprety->type}}</span></li>
                    <li>Statut de la propriété: <span>{{$proprety->status}}</span></li>
                    <li>Etat de la propriété: <span>{{$proprety->etat}}</span></li>
                    <li>Property Size: <span>{{$proprety->area}} M2</span></li>
                    <li>Chambers: <span>{{$proprety->room}}</span></li>
                    @if ($proprety->floor != null)
                        <li>Numéro d'étage: <span>{{$proprety->floor}}</span></li>
                    @endif
                    @if ($proprety->nbrFloor != null)
                        <li>Nombre d'étages: <span>{{$proprety->nbrFloor}}</span></li>
                    @endif
                </ul>

                <!-- Details -->
                <div class="utf-desc-headline-item">
                    <h3><i class="icon-material-outline-business"></i> Spécification</h3>
                </div>
                <ul class="property-features margin-top-0">
                    @php
                        $sps = json_decode($proprety->sps);
                    @endphp
                    <li>Gaz: <span>{{ in_array('Gaz', $sps) ? 'Oui' : 'Non' }}</span></li>
                    <li>Eau <span>{{ in_array('Eau', $sps) ? 'Oui' : 'Non' }}</span></li>
                    <li>Eléctricité <span>{{ in_array('Eléctricité', $sps) ? 'Oui' : 'Non' }}</span></li>
                </ul>

                <!-- Features -->
                <div class="utf-desc-headline-item">
                    <h3><i class="sl sl-icon-briefcase"></i> Property Features</h3>
                </div>
                <ul class="property-features checkboxes margin-top-0">
                    @php
                        $other = json_decode($proprety->other);
                    @endphp
                    @foreach ($other as $i)
                        <li>{{$i}}</li>
                    @endforeach
                </ul>

                <!-- Location -->
                <div class="utf-desc-headline-item">
                    <h3><i class="icon-material-outline-location-on"></i> Emplacement De La Propriété</h3>
                </div>

                <!-- Similar Listings Container -->
                <div class="utf-desc-headline-item">
                    <h3><i class="icon-material-outline-description"></i> Propriété similaire</h3>
                </div>

                <!-- Layout Switcher -->
                <div class="utf-layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a></div>
                <div class="utf-listings-container-area list-layout">
                   @foreach ($similair as $i)
                        <!-- Listing Item -->
                        <div class="utf-listing-item">
                            <a href="/proprety/{{$i->id}}" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item">
                                    <span class="for-rent">{{$i->status}}</span>
                                </div>
                                <div class="utf-listing-img-content-item">
                                    <img class="utf-user-picture" src="/profile/{{$i->photo}}" alt="user_1" />
                                    <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    <span class="video-button with-tip" data-tip-content="Video"></span>
                                </div>
                                <img src="/gallery/{{$i->img}}" alt="">
                            </a>
                            <div class="utf-listing-content">
                                <div class="utf-listing-title">
                                    <span class="utf-listing-price">{{$i->price}} DA</span>
                                    <h4><a href="/proprety/{{$i->id}}">{{$i->title}}</a></h4>
                                    <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> {{$i->adr}}, {{$i->state}}</span>
                                </div>
                                @php
                                    $other = json_decode($i->other);
                                    $sps = json_decode($i->sps);
                                @endphp
                                <ul class="listing-details">
                                    <li><i class="fa fa-bed"></i> Chambers<span>{{$i->room}}</span></li>
                                    @if ($i->floor != null)
                                        <li><i class="fa fa-sort-amount-asc"></i> Etage<span>{{$i->floor}}</span></li>
                                    @else
                                        <li><i class="fa fa-sort-amount-asc"></i> Etage<span>{{$i->nbrFloor}}</span></li>
                                    @endif

                                    @if (in_array('Garage', $other))
                                        <li><i class="fa fa-car"></i> Garages<span>1</span></li>
                                    @endif
                                    <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>{{$i->area}}</span></li>
                                </ul>
                                <div class="utf-listing-user-info">
                                    <a href="agents-profile.html"><i class="icon-line-awesome-user"></i> {{$i->name}} {{$i->lname}}</a>
                                    @php
                                        $now = time(); // or your date as well
                                        $your_date = strtotime($i->date);
                                        $datediff = $now - $your_date;
                                        echo '<span> Il y a '.round($datediff / (60 * 60 * 24)).' jours</span>';
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <!-- Listing Item / End -->
                   @endforeach
                </div>
                <!-- Similar Listings Container / End -->
            </div>
        </div>
        <!-- Property Description / End -->

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-5">
            <div class="sidebar">
                <!-- Widget -->
                <div class="widget utf-sidebar-widget-item">
                    <div class="utf-boxed-list-headline-item">
                        <h3>Détails de la propriété</h3>
                    </div>
                    <button class="widget-button with-tip" data-tip-content="Share Property"><i class="sl sl-icon-share"></i></button>
                    <button class="widget-button with-tip" data-tip-content="Bookmark Property"><i class="fa fa-heart"></i></button>
                    <button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"></button>
                    <button class="widget-button with-tip" data-tip-content="Property Location"><i class="sl sl-icon-map"></i></button>
                    <button class="widget-button with-tip" data-tip-content="Print Property"><i class="sl sl-icon-printer"></i></button>
                    <div class="clearfix"></div>
                </div>
                <!-- Widget / End -->

                <!-- Widget -->
                <div class="widget utf-sidebar-widget-item">
                    <div class="agent-widget">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Répertorié par les détails des agents</h3>
                        </div>
                        <div class="agent-title">
                            <div class="agent-photo"><img src="/profile/{{$client->photo}}" alt="" /></div>
                            <div class="agent-details">
                                <h4><a href="#">{{$client->name}} {{$client->lname}}</a></h4>
                                <span>{{$client->phone}}</span>
                                <span><a href="/client/{{$client->id}}">Voir mes annonces</a></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- Widget / End -->
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>
    <!-- Footer -->
    <div class="margin-top-65"></div>
</div>


<!-- Scripts -->
<script src="/scripts/jquery-3.3.1.min.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<script src="/scripts/chosen.min.js"></script>
<script src="/scripts/magnific-popup.min.js"></script>
<script src="/scripts/owl.carousel.min.js"></script>
<script src="/scripts/rangeSlider.js"></script>
<script src="/scripts/sticky-kit.min.js"></script>
<script src="/scripts/slick.min.js"></script>
<script src="/scripts/mmenu.min.js"></script>
<script src="/scripts/tooltips.min.js"></script>
<script src="/scripts/masonry.min.js"></script>
<script src="/scripts/custom_jquery.js"></script>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
<script src="/scripts/infobox.min.js"></script>
<script src="/scripts/markerclusterer.js"></script>
<script src="/scripts/maps.js"></script>

@endsection
