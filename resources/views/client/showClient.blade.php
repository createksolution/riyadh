@extends('layouts.app')
@section('content')
<!-- Titlebar -->
<div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$client->name}} {{$client->lname}}</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li>Profil De L'agent</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Titlebar -->
<!-- Content -->
<div class="container">
    <div class="row sticky-wrapper">
        <div class="col-lg-8 col-md-8">
            <div class="utf-desc-headline-item margin-top-0">
                <h3><i class="icon-material-outline-description"></i> List de {{$client->name}} {{$client->lname}}</h3>
            </div>
            <!-- Sorting -->
            <div class="utf-sort-box-aera">
                <div class="sort-by">
                <label>Sort By:</label>
                <div class="sort-by-select">
                    <select data-placeholder="Default Properties" class="utf-chosen-select-single-item" >
                    <option>Default Properties</option>
                    <option>Low to High Price</option>
                    <option>High to Low Price</option>
                    <option>Newest Properties</option>
                    <option>Oldest Properties</option>
                    </select>
                </div>
                </div>
                <div class="utf-layout-switcher">
                    <a href="#" class="list"><i class="sl sl-icon-list"></i></a>
                    <a href="#" class="grid"><i class="sl sl-icon-grid"></i></a>
                </div>
            </div>

            <!-- Listings -->
            <div class="utf-listings-container-area list-layout">
                <div class="utf-listings-container-area list-layout">
                    @foreach ($proprety as $i)
                         <!-- Listing Item -->
                         <div class="utf-listing-item">
                             <a href="/proprety/{{$i->id}}" class="utf-smt-listing-img-container">
                                 <div class="utf-listing-badges-item">
                                     <span class="for-rent">{{$i->status}}</span>
                                 </div>
                                 <div class="utf-listing-img-content-item">
                                     <img class="utf-user-picture" src="/profile/{{$client->photo}}" alt="user_1" />
                                     <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                                     <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                     <span class="video-button with-tip" data-tip-content="Video"></span>
                                 </div>
                                 <img src="/gallery/{{$i->photo}}" alt="">
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
                                     <a href="agents-profile.html"><i class="icon-line-awesome-user"></i> {{$client->name}} {{$client->lname}}</a>
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
            </div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4">
            <div class="sidebar">
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
                                @if ($type)
                                    @if ($client->type == 'freelance')
                                        <span>Activité: {{$type->activity}}</span>
                                    @endif
                                    @if ($client->type == 'freelance')
                                        <span>Agence: {{$type->agency}}</span>
                                    @endif
                                @endif
                                <span>{{$client->phone}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- Widget / End -->
            </div>
        </div>
      <!-- Sidebar / End -->
    </div>
</div>

<!-- Footer -->
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
@endsection
