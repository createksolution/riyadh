@extends('layouts.app')
@section('content')
    <!-- Banner -->
    <div class="parallax" data-background="images/home-parallax-1.jpg" data-color="#36383e" data-color-opacity="0.72" data-img-width="2500" data-img-height="1600">
        <div class="utf-parallax-content-area">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="utf-main-search-container-area">
                <div class="utf-banner-headline-text-part">
                    <h2>Best Place To Find <span class="typed-words"></span></h2>
                    <span>From as low as $10 per day with limited time offer discounts.</span>
                </div>
                <form class="utf-main-search-form-item">
                    <div class="utf-search-type-block-area">
                        <div class="search-type">
                        <label class="active">
                            <input class="first-tab" name="tab" checked="checked" type="radio">Buy</label>
                        <label>
                            <input name="tab" type="radio">Rent</label>
                        <label>
                            <input name="tab" type="radio">Service </label>
                            <div class="utf-search-type-arrow"></div>
                        </div>
                    </div>
                    <div class="utf-main-search-box-area">
                    <div class="row with-forms">
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="ico-01" placeholder="Enter Keywords..." value=""/>
                        </div>
                        <div class="col-md-2 col-sm-6">
                        <select data-placeholder="Select Area" title="Select Area" class="utf-chosen-select-single-item">
                            <option>Select Area</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>Brazil</option>
                            <option>Burundi</option>
                            <option>Bulgaria</option>
                            <option>California</option>
                            <option>Germany</option>
                            <option>Grenada</option>
                            <option>Guatemala</option>
                            <option>Iceland</option>
                        </select>
                        </div>
                        <div class="col-md-2 col-sm-6">
                        <select data-placeholder="Select City" title="Select City" class="utf-chosen-select-single-item">
                            <option>Select City</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>Brazil</option>
                            <option>Burundi</option>
                            <option>Bulgaria</option>
                            <option>California</option>
                            <option>Germany</option>
                            <option>Grenada</option>
                            <option>Guatemala</option>
                            <option>Iceland</option>
                        </select>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <button class="button utf-search-btn-item"><i class="fa fa-search"></i> Search</button>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <a href="#" class="utf-utf-more-search-options-area-button" data-open-title="More Search" data-close-title="Less Search"></a>
                        </div>
                    </div>

                    <div class="utf-more-search-options-area">
                        <div class="utf-more-search-options-area-container">
                        <div class="row with-forms">
                            <div class="col-md-4">
                            <select data-placeholder="Property Status" class="utf-chosen-select-single-item">
                                <option>Property Status</option>
                                <option>Any</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <select data-placeholder="Property Type" class="utf-chosen-select-single-item">
                                <option>Property Type</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Land</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <select data-placeholder="Max Rooms" class="utf-chosen-select-single-item">
                                <option>Max Rooms</option>
                                <option>1 Rooms</option>
                                <option>2 Rooms</option>
                                <option>3 Rooms</option>
                                <option>4 Rooms</option>
                                <option>5 Rooms</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <select data-placeholder="Bed" class="utf-chosen-select-single-item">
                                <option>Bed</option>
                                <option>1 Bed</option>
                                <option>2 Bed</option>
                                <option>3 Bed</option>
                                <option>4 Bed</option>
                                <option>5 Bed</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <select data-placeholder="Bath" class="utf-chosen-select-single-item">
                                <option>Bath</option>
                                <option>1 Bath</option>
                                <option>2 Bath</option>
                                <option>3 Bath</option>
                                <option>4 Bath</option>
                                <option>5 Bath</option>
                            </select>
                            </div>
                            <div class="col-md-4">
                            <select data-placeholder="Agents" class="utf-chosen-select-single-item">
                                <option> Renting type</option>
                                <option>daily</option>
                                <option>monthly</option>
                                <option>yearly</option>

                            </select>
                            </div>
                            <div class="col-md-3">
                            <div class="select-input">
                                <input type="text" placeholder="Min Price" data-unit="USD">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="select-input">
                                <input type="text" placeholder="Max Price" data-unit="USD">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="select-input">
                                <input type="text" placeholder="Min Area" data-unit="Sq Ft">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="select-input">
                                <input type="text" placeholder="Max Area" data-unit="Sq Ft">
                            </div>
                            </div>
                        </div>

                        <div class="checkboxes in-row">
                            <div class="title-attribute">Amenities</div>
                            <input id="check-1" type="checkbox" name="check">
                            <label for="check-1">Emergency Exit</label>
                            <input id="check-2" type="checkbox" name="check">
                            <label for="check-2">Dining Room</label>
                            <input id="check-3" type="checkbox" name="check">
                            <label for="check-3">Air Condition</label>
                            <input id="check-4" type="checkbox" name="check" >
                            <label for="check-4">Garden</label>
                            <input id="check-5" type="checkbox" name="check">
                            <label for="check-5">Onsite Parking</label>
                            <input id="check-6" type="checkbox" name="check">
                            <label for="check-6">Central Heating</label>
                            <input id="check-7" type="checkbox" name="check">
                            <label for="check-7">Dishwasher</label>
                            <input id="check-8" type="checkbox" name="check">
                            <label for="check-8">Family Room</label>
                            <input id="check-9" type="checkbox" name="check">
                            <label for="check-9">Hardwood Flows</label>
                            <input id="check-10" type="checkbox" name="check">
                            <label for="check-10">Parking</label>
                            <input id="check-11" type="checkbox" name="check">
                            <label for="check-11">Cleaning Service</label>
                            <input id="check-12" type="checkbox" name="check">
                            <label for="check-12">Doorman</label>
                            <input id="check-13" type="checkbox" name="check" >
                            <label for="check-13">Fire Alarm</label>
                            <input id="check-14" type="checkbox" name="check">
                            <label for="check-14">Heating System</label>
                            <input id="check-15" type="checkbox" name="check">
                            <label for="check-15">Pets Allowed</label>
                            <input id="check-16" type="checkbox" name="check">
                            <label for="check-16">Waterfront</label>
                            <input id="check-17" type="checkbox" name="check">
                            <label for="check-17">Cooling System</label>
                            <input id="check-18" type="checkbox" name="check">
                            <label for="check-18">Elevator</label>
                            <input id="check-19" type="checkbox" name="check">
                            <label for="check-19">Fireplace</label>
                            <input id="check-20" type="checkbox" name="check">
                            <label for="check-20">Home Theater</label>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Content -->
    <section class="fullwidth" data-background-color="#ffffff">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                        <h3 class="headline"><span>Propriétés les plus en vedette</span> Propriétés en vedette</h3>
                        <div class="utf-headline-display-inner-item">Most Featured Properties</div>
                        <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="carousel">
                        @foreach ($proprety as $i)
                            <div class="utf-carousel-item-area">
                                <div class="utf-listing-item">
                                    <a href="/proprety/{{$i->idd}}" class="utf-smt-listing-img-container">
                                        <div class="utf-listing-badges-item">
                                            <span class="featured">Spécial</span>
                                            <span class="for-sale">{{$i->status}}</span>
                                        </div>
                                        <div class="utf-listing-img-content-item">
                                            <img class="utf-user-picture" src="/profile/{{$i->photo}}" alt="user_1" />
                                            <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                                            <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                            <span class="video-button with-tip" data-tip-content="Video"></span>
                                        </div>
                                        <div class="utf-listing-carousel-item" style="height: 300px;">
                                            <div><img src="/gallery/{{$i->img}}" alt=""></div>
                                            @foreach ($image as $o)
                                                @if ($o->proprety == $i->unique)
                                                    <div><img src="/gallery/{{$o->image}}" alt="" ></div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </a>
                                    <div class="utf-listing-content">
                                        <div class="utf-listing-title">
                                            <span class="utf-listing-price">{{$i->price}} DA</span>
                                            <h4><a href="/proprety/{{$i->idd}}">{{$i->title}}</a></h4>
                                            <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> {{$i->ads}}, {{$i->sta}}</span>
                                        </div>
                                        @php
                                            $other = json_decode($i->other);
                                            $sps = json_decode($i->sps);
                                        @endphp
                                        <ul class="utf-listing-features">
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
                                            <a href="/client/{{$i->client}}"><i class="icon-line-awesome-user"></i> {{$i->name}} {{$i->lname}}</a>
                                            @php
                                                $now = time();
                                                $your_date = strtotime($i->date);
                                                $datediff = $now - $your_date;
                                                echo '<span> Il y a '.round($datediff / (60 * 60 * 24)).' jours</span>';
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fullwidth" data-background-color="#ffffff">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>Most Popular Rent Properties</span> For Rent Properties</h3>
                <div class="utf-headline-display-inner-item">Most Popular Rent Properties</div>
                <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
            <div class="carousel">
                <div class="utf-carousel-item-area">
                    <div class="utf-listing-item">
                    <a href="single-property-page-1.html" class="utf-smt-listing-img-container">
                    <div class="utf-listing-badges-item">
                        <span class="featured">Featured</span>
                        <span class="for-sale">For Sale</span>
                    </div>
                    <div class="utf-listing-img-content-item">
                        <img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
                        <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                        <span class="video-button with-tip" data-tip-content="Video"></span>
                    </div>
                    <div class="utf-listing-carousel-item">
                        <div><img src="images/listing-01.jpg" alt=""></div>
                        <div><img src="images/listing-01.jpg" alt=""></div>
                        <div><img src="images/listing-01.jpg" alt=""></div>
                    </div>
                    </a>
                    <div class="utf-listing-content">
                        <div class="utf-listing-title">
                        <span class="utf-listing-price">$22,000/mo</span>
                        <h4><a href="single-property-page-1.html">Renovated Luxury Apartment</a></h4>
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                        <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                        <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                        <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                        </ul>
                        <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                    </div>
                    </div>
                </div>

                <div class="utf-carousel-item-area">
                    <div class="utf-listing-item"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                    <div class="utf-listing-badges-item">
                        <span class="for-rent">For Rent</span>
                    </div>
                    <div class="utf-listing-img-content-item">
                        <img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
                        <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    </div>
                    <img src="images/listing-02.jpg" alt=""> </a>
                    <div class="utf-listing-content">
                        <div class="utf-listing-title">
                        <span class="utf-listing-price">$19,000/mo</span>
                        <h4><a href="single-property-page-2.html">Renovated Luxury Apartment</a></h4>
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                        <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                        <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                        <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                        </ul>
                        <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                    </div>
                    </div>
                </div>

                <div class="utf-carousel-item-area">
                    <div class="utf-listing-item"> <a href="single-property-page-1.html" class="utf-smt-listing-img-container">
                    <div class="utf-listing-badges-item">
                        <span class="featured">Featured</span>
                        <span class="for-rent">For Rent</span>
                    </div>
                    <div class="utf-listing-img-content-item">
                        <img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
                        <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                        <span class="video-button with-tip" data-tip-content="Video"></span>
                    </div>
                    <img src="images/listing-03.jpg" alt=""> </a>
                    <div class="utf-listing-content">
                        <div class="utf-listing-title">
                        <span class="utf-listing-price">$13,000/mo</span>
                        <h4><a href="single-property-page-1.html">Renovated Luxury Apartment</a></h4>
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                        <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                        <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                        <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                        </ul>
                        <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                    </div>
                    </div>
                </div>

                <div class="utf-carousel-item-area">
                    <div class="utf-listing-item"> <a href="single-property-page-1.html" class="utf-smt-listing-img-container">
                    <div class="utf-listing-badges-item">
                        <span class="for-sale">For Sale</span>
                    </div>
                    <div class="utf-listing-img-content-item">
                        <img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
                        <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                    </div>
                    <div class="utf-listing-carousel-item">
                        <div><img src="images/listing-04.jpg" alt=""></div>
                        <div><img src="images/listing-04.jpg" alt=""></div>
                    </div>
                    </a>
                    <div class="utf-listing-content">
                        <div class="utf-listing-title">
                        <span class="utf-listing-price">$12,000/mo</span>
                        <h4><a href="single-property-page-1.html">Renovated Luxury Apartment</a></h4>
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                        <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                        <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                        <li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                        </ul>
                        <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                    </div>
                    </div>
                </div>

                <div class="utf-carousel-item-area">
                    <div class="utf-listing-item"> <a href="single-property-page-1.html" class="utf-smt-listing-img-container">
                    <div class="utf-listing-badges-item">
                        <span class="for-sale">For Sale</span>
                    </div>
                    <div class="utf-listing-img-content-item">
                        <img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
                        <span class="like-icon with-tip" data-tip-content="Bookmark"></span>
                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                        <span class="video-button with-tip" data-tip-content="Video"></span>
                    </div>
                    <img src="images/listing-05.jpg" alt=""> </a>
                    <div class="utf-listing-content">
                        <div class="utf-listing-title">
                        <span class="utf-listing-price">$22,000/mo</span>
                        <h4><a href="single-property-page-1.html">Renovated Luxury Apartment</a></h4>
                        <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
                        </div>
                        <ul class="utf-listing-features">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
                        <li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
                        <li><i class="fa fa-car"></i> Garages<span>2</span></li>
                        <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>1530</span></li>
                        </ul>
                        <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Photo Section -->
    <div class="utf-photo-section-block">
        <div class="utf-photo-text-content white-font">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h2>Download Browse Hundreds of Properti</h2>
                        <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised.</p>
                        <ul class="utf-download-text">
                            <li>
                                <a href="#" class="tooltip top" title="Windows App">
                                    <i class="icon-line-awesome-windows"></i>
                                    <span>Windows</span>
                                    <p>Available Now</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltip top" title="App Store">
                                    <i class="icon-line-awesome-apple"></i>
                                    <span>App Store</span>
                                    <p>Available Now</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltip top" title="Google Play">
                                    <i class="icon-line-awesome-android"></i>
                                    <span>Google Play</span>
                                    <p>Get in On</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="download-img">
                            <img src="images/mockup3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Photo Section / End -->

    <!-- Fullwidth Section -->
    <section class="fullwidth" data-background-color="#fbfbfb">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>What are you looking for?</span> Properties In Most Popular Places </h3>
                <div class="utf-headline-display-inner-item">What are you looking for?</div>
                <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-line-awesome-building"></i></div>
                <h3>Modern Villa</h3>
                <p>Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-line-awesome-institution"></i></div>
                <h3>work space</h3>
                <p>Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-material-outline-location-city"></i></div>
                <h3> shops </h3>
                <p>Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="utf-icon-box-item-area">
                <div class="icon-container"><i class="icon-material-outline-business"></i></div>
                <h3>Apartment</h3>
                <p>Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Start Section Callout -->
    <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-1 callout-section-left pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                        <div class="jbm-section-title margin-top-80 margin-bottom-80">
                            <h2>Find Your Browse Add Property</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="add-new-property.html" class="button margin-top-10">Add New Property</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>Find Your nearby propertie </h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">find  near me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Callout -->

    <section class="fullwidth" data-background-color="#ffffff">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>Most Popular Places in algeria</span> Most Popular Properties Places in algeria</h3>
                <div class="utf-headline-display-inner-item">Most Popular Places in algeria</div>
                <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-01.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Afghanistan</h4>
                    <span>14 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-02.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Australia</h4>
                    <span>24 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-03.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Bangladesh</h4>
                    <span>12 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-md-5 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-04.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Miami</h4>
                    <span>9 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-05.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Belize</h4>
                    <span>14 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="listings-list-with-sidebar.html" class="img-box">
                    <img src="images/popular-location-06.jpg" alt="" />
                    <div class="utf-cat-img-box-content visible">
                    <h4>Cambodia</h4>
                    <span>24 Properties</span>
                    </div>
                </a>
            </div>
            </div>
            <div class="utf-centered-button margin-top-10">
                <a href="all-categorie.html" class="button">View All Categories</a>
            </div>
        </div>
    </section>

    <!-- Fullwidth Section -->
    <section class="fullwidth" data-background-color="linear-gradient(to bottom,rgba(0,0,0,0.03) 0%,rgba(255,255,255,0))">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <h3 class="headline"><span>Our Blog & Articles</span> Latest Blog Post</h3>
                <div class="utf-headline-display-inner-item">Our Blog & Articles</div>
                <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="images/blog-post-01.jpg" alt=""> </a>
                <div class="utf-post-content-area">
                <h3><a href="blog_detail_right_sidebar.html">What It Really Takes to Make $100k Before You Turn 30</a></h3>
                <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2021</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="images/blog-post-02.jpg" alt=""> </a>
                <div class="utf-post-content-area">
                <h3><a href="blog_detail_right_sidebar.html">The Best Canadian Merchant Account Providers.</a></h3>
                <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2021</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img"> <img src="images/blog-post-03.jpg" alt=""> </a>
                <div class="utf-post-content-area">
                <h3><a href="blog_detail_right_sidebar.html">Hey Job Seeker, It’s Time To Get Up And Get Hired.</a></h3>
                <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2021</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of printing industry Lorem Ipsum been industry standard dummy text since book.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Sign In Popup -->
    <div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
        <div class="utf-signin-form-part">
            <ul class="utf-popup-tabs-nav-item">
                <li><a href="#login">Connexion</a></li>
                <li><a href="#register">S'inscrire</a></li>
            </ul>
            <div class="utf-popup-container-part-tabs">
                <!-- Login -->
                <div class="utf-popup-tab-content-item" id="login">
                    <div class="utf-welcome-text-item">
                        <h3>Bienvenue à nouveau Connectez-vous pour continuer</h3>
                        <span>Vous n'avez pas un compte? <a href="#" class="register-tab">S'inscrire!</a></span>
                    </div>
                    <form method="POST" id="login-form" action="/login/client">
                        @csrf
                        <div class="utf-no-border">
                            <input type="text" name="username" id="username2" required placeholder="Nom d'utilisateur"/>
                            @error('username')
                                <ul style="list-style: none">
                                    <li class="text-danger">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <div class="utf-no-border">
                            <input type="password" name="password" id="password1" required placeholder="Mot de passe"/>
                            @error('password')
                                <ul style="list-style: none">
                                    <li class="text-danger">{{ $message }}</li>
                                </ul>
                            @enderror
                        </div>
                        <div class="checkbox margin-top-0">
                            <input type="checkbox" id="two-step" name="remember">
                            <label for="two-step"><span class="checkbox-icon"></span> Souviens-toi de moi</label>
                        </div>
                        <a href="forgot_password.html" class="forgot-password">Mot de passe oublié?</a>
                        <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="login-form">Connexion <i class="icon-feather-chevrons-right"></i></button>
                    </form>
                    <div class="utf-social-login-separator-item"><span>Ou connectez-vous avec</span></div>
                    <div class="utf-social-login-buttons-block">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google</button>
                        <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
                    </div>
                </div>

                <!-- Register -->
                <div class="utf-popup-tab-content-item" id="register">
                    <div class="utf-welcome-text-item">
                        <h3>Créez votre compte!</h3>
                        <span>Vous n'avez pas un compte? <a href="#" class="register-tab">S'inscrire!</a></span>
                    </div>
                    <form method="POST" id="utf-register-account-form" action="/register/client" enctype="multipart/form-data">
                        @csrf
                        <div style="display: none" id="codeV">
                            <div class="utf-no-border">
                                <input type="text" name="code" id="code" placeholder="Entrez le code de vérification"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div id="agencyForm" style="display: none">
                                <div class="utf-no-border">
                                    <input type="text" name="agency" id="agency" placeholder="Nom de l'agence"/>
                                    <ul style="list-style: none;"></ul>
                                </div>
                                <div class="utf-no-border">
                                    <input type="text" name="register" id="Numregister" placeholder="Numéro de registre"/>
                                    <ul style="list-style: none;"></ul>
                                </div>
                                <div class="utf-no-border">
                                    <input type="text" name="agrement" id="agrement" placeholder="Numéro d'agrement"/>
                                    <ul style="list-style: none;"></ul>
                                </div>
                            </div>
                            <div id="freelancerForm" style="display: none">
                                <div class="utf-no-border margin-bottom-20">
                                    <select class="utf-chosen-select-single-item utf-with-border" title="Activité" name="activity" id="activity">
                                        @foreach ($freelancer as $i)
                                            <option value="{{$i->activity}}">{{$i->activity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button onclick="codeverify();" class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" id="vefBtn" type="button">Vérifier <i class="icon-feather-chevrons-right"></i></button>
                        </div>
                        <div id="form">
                            <div class="utf-no-border margin-bottom-20">
                                <select class="utf-chosen-select-single-item utf-with-border" name ="type" id="type" title="Type de compte">
                                    <option value="agency">Agence</option>
                                    <option value="personnel">Personnel</option>
                                    <option value="freelancer">Freelancer</option>
                                </select>
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="name" id="name" placeholder="Nom"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="lname" id="lname" placeholder="Prénom"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="password" name="password" id="password" placeholder="Password"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="password" name="password-confirmation" id="passwordc" placeholder="Répéter le mot de passe"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="text" name="phone" id="phone" placeholder="Numéro du téléphone"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input name="birth" id="birth"  onfocus="(this.type='date')" placeholder="Date de naissance"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border margin-bottom-20">
                                <select class="utf-chosen-select-single-item utf-with-border" title="Gender" name="sex" id="sex">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                            <div class="utf-no-border margin-bottom-20">
                                <select class="utf-chosen-select-single-item utf-with-border" title="Wilaya" name="state" id="state">
                                    @foreach ($states as $i)
                                        <option value="{{$i->state}}">{{$i->state}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="utf-no-border">
                                <textarea name="adr" id="adr" placeholder="Address"></textarea>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="utf-no-border">
                                <input type="file" accept="image/png,image/jpg,image/jpeg," name="photo" id="photo" placeholder="Photo de profile"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="checkbox margin-top-0">
                                <input type="checkbox" id="two-step0">
                                <label for="two-step0"><span class="checkbox-icon"></span>En vous inscrivant, vous confirmez que vous acceptez <a href="#">termes et conditions</a> et <a href="#">Politique de confidentialité</a></label>
                            </div>
                            <div id="recaptcha-container"></div>
                            <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="button" id="registerBtn" form="utf-register-account-form">S'inscrire <i class="icon-feather-chevrons-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Popup / End -->
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
<script src="/scripts/typed.js"></script>
<script src="/scripts/custom_jquery.js"></script>
{{-- <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script> --}}
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
    // Import the functions you need from the SDKs you need
    // import { initializeApp } from "firebase/app";
    // import { getAnalytics } from "firebase/analytics";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
    apiKey: "AIzaSyAWZC0TiOELSuAxNvpmqxlWPH03bwkTon0",
    authDomain: "realestate-19ab1.firebaseapp.com",
    projectId: "realestate-19ab1",
    storageBucket: "realestate-19ab1.appspot.com",
    messagingSenderId: "330100169626",
    appId: "1:330100169626:web:e97113cb0515850b53f823",
    measurementId: "G-4Y88XHCW1X"
    };

    // Initialize Firebase
    // const app = initializeApp(firebaseConfig);
    firebase.initializeApp(firebaseConfig);
    // const analytics = getAnalytics(app);
</script>
{{-- register scripts --}}
<script type="text/javascript">

    window.onload=function () {
    render();
    };

    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    function phoneSendAuth() {
        var number = $("#phone").val();
        var reg=  /^(\+213|)(5|6|7)[0-9]{8}$/
        if(reg.test(number)){
            firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                $('#phone+ul').html('<li class="text-danger">Veuillez mettre le code reçu sur votre téléphone.</li>');
                $("#form").css('display','none');
                if($("#type").val() == 'agency'){
                    $("#agencyForm").css('display','block');
                }
                if($("#type").val() == 'freelancer'){
                    $("#freelancerForm").css('display','block');
                }
                $("#codeV").css('display','block');
                $('#registerBtn').prop( "disabled", true );
            }).catch(function (error) {
                $('#phone+ul').html('<li class="text-danger">'+error.message+'.</li>');
            });
        }else{
            $('#phone+ul').html('<li class="text-danger">Format non valide du numéro de téléphone : +213000000000.</li>');
        }



    }

    function codeverify() {
        var code = $("#code").val();
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            $('#code+ul').html('');
            if($("#type").val() == 'agency'){
                valid = true;
                if($('#agency').val()== ""){
                    $('#agency+ul').html(`<li class="text-danger">Le nom de l'agence est obligatoire.</li>`);
                    valid = false;
                }else{
                    $('#agency+ul').html('');
                }

                if($('#agrement').val()== ""){
                    $('#agrement+ul').html(`<li class="text-danger">Le Numéro d'agrement est obligatoire.</li>`);
                    valid = false;
                }else{
                    $('#agrement+ul').html('');
                }

                if($('#Numregister').val()== ""){
                    $('#Numregister+ul').html(`<li class="text-danger">Le Numéro de registre est obligatoire.</li>`);
                    valid = false;
                }else{
                    $('#Numregister+ul').html('');
                }
                if(valid){
                    $('#utf-register-account-form').submit();
                }
            }

            if($("#type").val() == 'freelancer'){
                $('#utf-register-account-form').submit();
            }

            if($("#type").val() == 'personnel'){
                $('#utf-register-account-form').submit();
            }
        }).catch(function (error) {
            $('#code+ul').html('<li class="text-danger">'+error.message+'.</li>');
        });
    }

    //valid username
    $("#username").keyup(function(){
        var username = $("#username").val();
        $.ajax({
            url:"valide/"+username,
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "username": username
                },
            success:function(data)
            {
                if(data.error){
                    $('#username+ul').html("<li class='text-danger'>Le nom d'utilisateur a déjà été pris.</li>");
                    $('#registerBtn').prop( "disabled", true );
                }else{
                    $('#registerBtn').prop( "disabled", false );
                    $('#username+ul').html('');
                }
            }
        });
    });

    //valid phone
    $("#phone").keyup(function(){
        var phone = $("#phone").val();
        $.ajax({
            url:"validePhone/"+phone,
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "phone": phone
                },
            success:function(data)
            {
                if(data.error){
                    $('#phone+ul').html("<li class='text-danger'>Le numéro du téléphone a déjà été pris.</li>");
                    $('#registerBtn').prop( "disabled", true );
                }else{
                    $('#registerBtn').prop( "disabled", false );
                    $('#phone+ul').html('');
                }
            }
        });
    });

    //valid agency name
    $("#agency").keyup(function(){
        var agency = $("#agency").val();
        $.ajax({
            url:"/agency/valide/"+agency,
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "agency": agency
                },
            success:function(data)
            {
                if(data.error){
                    $('#agency+ul').html("<li class='text-danger'>Le nom d'agence a déjà été pris.</li>");
                    $('#vefBtn').prop( "disabled", true );
                }else{
                    $('#vefBtn').prop( "disabled", false );
                    $('#agency+ul').html('');
                }
            }
        });
    });

    // valid password
    $("#password").keyup(function(){
        if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test($("#password").val())){
            $('#password+ul').html('<li class="text-danger">Le mot de passe doit comporter au moins 8 caractères et au moins une lettre  majuscules, une lettre minuscules, un chiffre et un caractère spécial.</li>');
            $('#registerBtn').prop( "disabled", true );
        }else{
            $('#password+ul').html('');
            $('#registerBtn').prop( "disabled", false );
        }
    });

    $('#photo').bind('change', function() {
        if(this.files[0].size >= 2048000){
            $('#photo+ul').html('<li class="text-danger">La taille du photo ne doit pas dépasser 2048000 octet.</li>');
            $('#registerBtn').prop( "disabled", true );
        }else{
            $('#photo+ul').html('');
            $('#registerBtn').prop( "disabled", false );
        }
    });

    //register
    $("#registerBtn").on('click', function() {
        console.log('test');
        valid = true;
        if($('#passwordc').val()!= $('#password').val()){
            $('#passwordc+ul').html("<li class='text-danger'>Le mot de pass ne corréspond pas.</li>");
            $('#password+ul').html("<li class='text-danger'>Le mot de pass ne corréspond pas.</li>");
            valid = false;
        }
        if($('#name').val()== ""){
            $('#name+ul').html('<li class="text-danger">Le nom est obligatoire.</li>');
            valid = false;
        }else{
            $('#name+ul').html('');
        }

        if($('#lname').val()== ""){
            $('#lname+ul').html('<li class="text-danger">Le prénom est obligatoire.</li>');
            valid = false;
        }else{
            $('#lname+ul').html('');
        }

        if($('#phone').val()== ""){
            $('#phone+ul').html('<li class="text-danger">Le numéro de téléphone est obligatoire.</li>');
            valid = false;
        }else{
            $('#phone+ul').html('');
        }

        if($('#username').val()== ""){
            $('#username+ul').html("<li class='text-danger'>Le nom d'utilisateur est obligatoire.</li>");
            valid = false;
        }else{
            $('#username+ul').html('');
        }

        if($('#password').val()== ""){
            $('#password+ul').html("<li class='text-danger'>Le mot de pass est obligatoire.</li>");
            valid = false;
        }else{
            $('#password+ul').html('');
        }

        if($('#passwordc').val()== ""){
            $('#passwordc+ul').html("<li class='text-danger'>La confirmtion du mot de pass est obligatoire.</li>");
            valid = false;
        }else{
            $('#passwordc+ul').html('');
        }

        if($('#birth').val()== ""){
            $('#birth+ul').html('<li class="text-danger">La date de naissance est obligatoire.</li>');
            valid = false;
        }else{
            $('#birth+ul').html('');
        }

        if($('#adr').val()== ""){
            $('#adr+ul').html(`<li class="text-danger">L'address est obligatoire.</li>`);
            valid = false;
        }else{
            $('#adr+ul').html('');
        }

        if(valid){
            phoneSendAuth();
        }
    });
</script>
@endsection
