@extends('layouts.app')

@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ajouter Nouveau Proprétié</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li>Ajouter Nouveau Proprétié</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- logout from -->
    <form id="logout-fo" action="{{ route('client.logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="margin-bottom-20">
                    <div class="utf-edit-profile-photo-area"> <img src="/profile/{{Auth::guard('client')->user()->photo}}" alt=""></div>
                </div>
                <div class="clearfix"></div>
                <div class="sidebar margin-top-20">
                    <div class="user-smt-account-menu-container">
                        <ul class="user-account-nav-menu">
                            <ul class="user-account-nav-menu">
                                <li><a href="/user/profile" class="{{ (request()->segment(2) == 'profile') ? 'current' : '' }}"><i class="sl sl-icon-user"></i> Mon Profil</a></li>
                                <li><a href="my-bookmarks.html" class="{{ (request()->segment(2) == '') ? 'current' : '' }}"><i class="sl sl-icon-star"></i> Liste Des Signets</a></li>
                                <li><a href="/client/{{Auth::guard('client')->user()->id}}/proprety" class="{{ (request()->segment(1) == 'getProprety') ? 'current' : '' }}"><i class="sl sl-icon-docs"></i> Mes proprétiés</a></li>
                                <li><a href="/proprety/create" class="{{ (request()->segment(2) == 'create') ? 'current' : '' }}"><i class="sl sl-icon-action-redo"></i> Nouveau Proprétié</a></li>
                                <li><a href="/user/phone" class="{{ (request()->segment(2) == 'phone') ? 'current' : '' }}"><i class="sl sl-icon-phone"></i> Changer Num Téléphone</a></li>
                                <li><a href="/user/password" class="{{ (request()->segment(2) == 'password') ? 'current' : '' }}"><i class="sl sl-icon-lock"></i> Changer Mot de Passe</a></li>
                                <li><a href="{{ route('client.logout') }}" onclick="event.preventDefault();document.getElementById('logout-fo').submit();"><i class="sl sl-icon-power"></i> Déconnexion</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
           <div class="col-md-9">
            <div class="submit-page">
                <div class="utf-submit-page-inner-box">
                    <h3>Gallerie de proprétié</h3>
                    <div class="content with-padding">
                        <img src="/gallery/{{$proprety->photo}}" alt="">
                    </div>
                    <div class="utf-agents-container-area row">

                        @foreach ($image as $i)
                            <div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 24.9587%; top: 784px;">
                                <div class="agent">
                                    <div class="utf-agent-avatar">
                                        <a style="cursor: pointer" class="delete" data-name="getProprety/{{$proprety->id}}" id="{{$i->id}}">
                                            <img src="/gallery/{{$i->image}}" alt="">
                                            <span class="view-profile-btn">Supprimer</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
           </div>
            <div class="col-md-3"></div>
            <!-- Submit Page -->
            <form class="col-md-9" action="/proprety/{{$proprety->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="submit-page">
                    <!-- Section -->
                    <div class="utf-submit-page-inner-box">
                        <h3>Information Basic  d'proprétié</h3>
                        <div class="content with-padding">
                            <div class="col-md-6">
                                <h5>Titre de proprétié</h5>
                                <input class="search-field" value="{{$proprety->title}}" placeholder="Titre de proprétié" name="title" id="title" type="text" required/>
                            </div>
                            <div class="col-md-6">
                                <h5>Photo principale de proprétié</h5>
                                <input class="search-field" accept="image/png,image/jpg,image/jpeg," placeholder="Phot de proprétié" name="photo" id="photo1" type="file"/>
                            </div>
                            <div class="col-md-6">
                                <h5>Status</h5>
                                <select class="utf-chosen-select-single-item" name="status" id="status" required>
                                    <option {{ 'A vendre' == $proprety->status ? 'selected' : '' }} value="A vendre">A vendre</option>
                                    <option {{ 'A loué' == $proprety->status ? 'selected' : '' }} value="A loué">A loué</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h5>Type</h5>
                                <select class="utf-chosen-select-single-item" name="type" id="type1" required>
                                    @foreach ($type as $i)
                                        <option {{ $i->type == $proprety->type ? 'selected' : '' }} value="{{$i->type}}">{{$i->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <h5>Surface</h5>
                                <div class="select-input disabled-first-option">
                                    <input type="text" value="{{$proprety->area}}" placeholder="00000" data-unit="M2" name="area" id="area" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->
                    <!-- Section -->
                    <div class="utf-submit-page-inner-box">
                        <h3>Location de proprétié</h3>
                        <div class="content with-padding">
                            <div class="col-md-12">
                                <h5>Address</h5>
                                <textarea name="adr"  placeholder="Address" id="adr1" cols="20" rows="3">{{$proprety->adr}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <h5>Wilaya</h5>
                                <select class="utf-chosen-select-single-item" name="state" id="state1">
                                    <option label="blank"></option>
                                    @foreach ($states as $i)
                                        <option {{ $i->state == $proprety->state ? 'selected' : '' }} value="{{$i->state}}">{{$i->state}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="utf-submit-page-inner-box">
                        <h3>Information du proprétié</h3>
                        <div class="content with-padding">
                            <div class="col-md-12">
                                <h5>Description du proprétié</h5>
                                <textarea name="desc" placeholder="Déscription du proprétié" cols="20" rows="2" id="desc">{{$proprety->desc}}</textarea>
                            </div>

                            <div class="col-md-12">
                                @php
                                    $other = json_decode($proprety->other);
                                    $sps = json_decode($proprety->sps);
                                @endphp
                                <h5>Autres caractéristiques <span>(optional)</span></h5>
                                <div class="checkboxes in-row margin-bottom-20">
                                    <input id="check-2" type="checkbox" {{ in_array('Climatisation', $other) ? 'checked' : '' }} name="other[]" value="Climatisation">
                                    <label for="check-2">Climatisation</label>
                                    <input id="check-3" type="checkbox" {{ in_array('Chauffage centrale', $other) ? 'checked' : '' }} name="other[]" value="Chauffage centrale">
                                    <label for="check-3">Chauffage centrale</label>
                                    <input id="check-4" type="checkbox" {{ in_array('Internet', $other) ? 'checked' : '' }} name="other[]" value="Internet">
                                    <label for="check-4">Internet</label>
                                    <input id="check-5" type="checkbox" {{ in_array('Parking', $other) ? 'checked' : '' }} name="other[]" value="Parking">
                                    <label for="check-5">Parking</label>
                                    <input id="check-6" type="checkbox" {{ in_array('jardin', $other) ? 'checked' : '' }} name="other[]" value="jardin">
                                    <label for="check-6">jardin</label>
                                    <input id="check-7" type="checkbox" {{ in_array('Garage', $other) ? 'checked' : '' }} name="other[]" value="Garage">
                                    <label for="check-7">Garage</label>
                                    <input id="check-8" type="checkbox" {{ in_array('Meublé', $other) ? 'checked' : '' }} name="other[]" value="Meublé">
                                    <label for="check-8">Meublé</label>
                                    <input id="check-9" type="checkbox" {{ in_array('Éléctricité', $sps) ? 'checked' : '' }}name="sps[]" value="Éléctricité">
                                    <label for="check-9">Éléctricité</label>
                                    <input id="check-10" type="checkbox" {{ in_array('Gaz', $sps) ? 'checked' : '' }} name="sps[]" value="Eau">
                                    <label for="check-10">Eau</label>
                                    <input id="check-11" type="checkbox" {{ in_array('Eau', $sps) ? 'checked' : '' }} name="sps[]" value="Gaz">
                                    <label for="check-11">Gaz</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="utf-submit-page-inner-box">
                        <h3>Details du contact du proprétié</h3>
                        <div class="content with-padding">
                            <input type="hidden" value="{{Auth::guard('client')->user()->id}}" name="client">
                            <div class="col-md-6">
                                <h5>Nom complet</h5>
                                <input disabled type="text" placeholder="Nom complet" value="{{Auth::guard('client')->user()->name}} {{Auth::guard('client')->user()->lname}}" name="name" id="nom">
                            </div>
                            <div class="col-md-6">
                                <h5>Numéro téléphone</h5>
                                <input disabled type="text" placeholder="Numéro téléphone" value="{{Auth::guard('client')->user()->phone}}" name="phone" id="tel">
                            </div>
                        </div>
                    </div>

                    <div class="utf-submit-page-inner-box boxType">
                        <h3>Détails {{$proprety->type}}</h3>
                        <div class="content with-padding row">
                            <div class="col-md-6">
                                <h5>Chambre</h5>
                                <select class="utf-chosen-select-single-item" name="room" id="room" required>
                                    <option {{ 1 == $proprety->room ? 'selected' : '' }} value="1">1</option>
                                    <option {{ 2 == $proprety->room ? 'selected' : '' }} value="2">2</option>
                                    <option {{ 3 == $proprety->room ? 'selected' : '' }} value="3">3</option>
                                    <option {{ 4 == $proprety->room ? 'selected' : '' }} value="4">4</option>
                                    <option {{ 5 == $proprety->room ? 'selected' : '' }} value="5">5</option>
                                    <option {{ 'Plus de 5' == $proprety->room ? 'selected' : '' }} value="Plus de 5">Plus de 5</option>
                                </select>
                            </div>
                            @if ($proprety->type == 'Villa')
                                <div class="col-md-6">
                                    <h5>Nombre d'étages</h5>
                                    <input class="search-field" value="{{$proprety->nbrFloor}}" placeholder="Nombre d'étages" name="nbrfloor" id="nbrfloor" type="number" required/>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <h5>Numéro d'étage</h5>
                                    <input class="search-field" value="{{$proprety->floor}}" placeholder="Numéro d'étage" name="floor" id="floor" type="number" required/>
                                </div>
                            @endif


                            <div id="period">
                                @if ($proprety->status == "A vendre")
                                    <div class="col-md-12">
                                        <h5>Prix</h5>
                                        <div class="select-input disabled-first-option">
                                            <input value="{{$proprety->price}}" placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        <h5>Paiement par</h5>
                                        <select class="utf-chosen-select-single-item" name="paypar" id="paypar" required>
                                            <option {{ '12 mois' == $proprety->payPar ? 'selected' : '' }} value="12 mois">12 mois</option>
                                            <option {{ '24 mois' == $proprety->payPar ? 'selected' : '' }} value="24 mois">24 mois</option>
                                            <option {{ '6 mois' == $proprety->payPar ? 'selected' : '' }} value="6 mois">6 mois</option>
                                            <option {{ '3 mois' == $proprety->payPar ? 'selected' : '' }}value="3 mois">3 mois</option>
                                            <option {{ '1 mois' == $proprety->payPar ? 'selected' : '' }} value="1 mois">1 mois</option>
                                            <option {{ 'Semaine' == $proprety->payPar ? 'selected' : '' }}value="Semaine">Semaine</option>
                                            <option {{ 'Jour' == $proprety->payPar ? 'selected' : '' }} value="Jour">Jour</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Prix</h5>
                                        <div class="select-input disabled-first-option">
                                            <input value="{{$proprety->price}}" placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 status">
                                @if ($proprety->status == 'A vendre')
                                    <h5>Papier</h5>
                                    <select class="utf-chosen-select-single-item" name="paper" required>
                                        <option {{ 'Promotion immobilière' == $proprety->pay ? 'selected' : '' }} value="Promotion immobilière">Promotion immobilière</option>
                                        <option {{ 'Acte notarié' == $proprety->pay ? 'selected' : '' }} value="Acte notarié">Acte notarié</option>
                                        <option {{ 'Promesse de vente' == $proprety->pay ? 'selected' : '' }} value="Promesse de vente">Promesse de vente</option>
                                        <option {{ 'Crédit bancaire' == $proprety->pay ? 'selected' : '' }} value="Crédit bancaire">Crédit bancaire</option>
                                        <option {{ 'Livré foncier' == $proprety->pay ? 'selected' : '' }} value="Livré foncier">Livré foncier</option>
                                        <option {{ 'Paiement par tranches' == $proprety->pay ? 'selected' : '' }} value="Paiement par tranches">Paiement par tranches</option>
                                    </select>
                                @else
                                    <h5>Paiement</h5>
                                    <select class="utf-chosen-select-single-item" name="paper" required>
                                        <option {{ 'Acte notarié' == $proprety->pay ? 'selected' : '' }} value="Acte notarié">Acte notarié</option>
                                        <option {{ 'Main à Main' == $proprety->pay ? 'selected' : '' }} value="Main à Main">Main à Main</option>
                                    </select>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h5>Etat</h5>
                                <select class="" name="etat" id="etat" required>
                                    <option {{ 'Nouveau' == $proprety->etat ? 'selected' : '' }} value="Nouveau">Nouveau</option>
                                    <option {{ 'Ancien' == $proprety->etat ? 'selected' : '' }} value="Ancien">Ancien</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="utf-centered-button button" type="submit">Modifier Proprétie</a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-3"></div>
            <form class="col-md-9" action="/image/{{$proprety->unique}}/store" enctype="multipart/form-data" method="POST" style="margin-top: 20px;">
                @csrf
                <div class="submit-page">
                    <div class="utf-submit-page-inner-box">
                        <h3>Ajouter une photo proprétié</h3>
                        <div class="content with-padding row">
                            <div class="col-md-12">
                                <h5>Photo</h5>
                                <input class="search-field" name="photo" accept="image/png,image/jpg,image/jpeg," placeholder="Phot de proprétié" type="file" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="utf-centered-button button" type="submit">Ajouter photo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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
<script src="/scripts/masonry.min.js"></script>
<script src="/scripts/mmenu.min.js"></script>
<script src="/scripts/tooltips.min.js"></script>
<script src="/scripts/custom_jquery.js"></script>
<script src="/scripts/sweetalert.js"></script>
<script src="/scripts/dropzone.js"></script>
<script>
    $(".dropzone").dropzone({
        dictDefaultMessage: "<i class='sl sl-icon-cloud-upload'></i> Drag & Drop Files Here",
    });

    $('#status').on('change', function() {
        if(this.value == "A vendre"){
            $('#period').html(`
                <div class="col-md-12">
                    <h5>Prix</h5>
                    <input class="search-field" placeholder="Prix" name="price" id="price" type="number" required/>
                </div>`);
            $('.status').html(`
                <h5>Papier</h5>
                <select class="utf-chosen-select-single-item" name="paper" id="paper" required>
                    <option value="Promotion immobilière">Promotion immobilière</option>
                    <option value="Acte notarié">Acte notarié</option>
                    <option value="Promesse de vente">Promesse de vente</option>
                    <option value="Crédit bancaire">Crédit bancaire</option>
                    <option value="Livré foncier">Livré foncier</option>
                    <option value="Paiement par tranches">Paiement par tranches</option>
                </select>
            `);
        }else{
            $('#period').html(`
                <div class="col-md-6">
                    <h5>Paiement par</h5>
                    <select class="utf-chosen-select-single-item" name="paypar" id="paypar" required>
                        <option value="12 mois">12 mois</option>
                        <option value="24 mois">24 mois</option>
                        <option value="6 mois">6 mois</option>
                        <option value="3 mois">3 mois</option>
                        <option value="1 mois">1 mois</option>
                        <option value="Semain">Semaine</option>
                        <option value="Jour">Jour</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <h5>Prix</h5>
                    <input class="search-field" placeholder="Prix" name="price" id="price" type="number" required/>
                </div>
            `);
            $('.status').html(`
                <h5>Paiement</h5>
                <select class="utf-chosen-select-single-item" name="paper" id="paper" required>
                    <option value="Acte notarié">Acte notarié</option>
                    <option value="Main à Main">Main à Main</option>
                </select>
            `);
        }
    });

    $('#type1').on('change', function() {
        $.ajax({
            url:"/getType",
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "type": this.value
                },
            success:function(data){
                console.log(data.result);
                if(data.result.type != 'Villa'){
                    floor = ` <div class="col-md-6">
                                <h5>Numéro d'étage</h5>
                                <input class="search-field" placeholder="Numéro d'étage" name="nbrfloor" id="nbrfloor" type="number" required/>
                            </div>`;
                }else{
                    floor = `<div class="col-md-6">
                                <h5>Etage</h5>
                                <input class="search-field" placeholder="Nombre d'étages" name="floor" id="floor" type="number" required/>
                            </div>`;
                }
                if($('#status').val()== 'A vendre'){
                    status = `
                        <h5>Papier</h5>
                        <select class="utf-chosen-select-single-item" name="paper" required>
                            <option value="Promotion immobilière">Promotion immobilière</option>
                            <option value="Acte notarié">Acte notarié</option>
                            <option value="Promesse de vente">Promesse de vente</option>
                            <option value="Crédit bancaire">Crédit bancaire</option>
                            <option value="Livré foncier">Livré foncier</option>
                            <option value="Paiement par tranches">Paiement par tranches</option>
                        </select>`;
                        period = `
                        <div class="col-md-12">
                            <h5>Prix</h5>
                            <input class="search-field" placeholder="Prix" name="price" id="price" type="number" required/>
                        </div>
                        `;
                }else{
                    status = `
                        <h5>Paiement</h5>
                        <select class="utf-chosen-select-single-item" name="paper" required>
                            <option value="Acte notarié">Acte notarié</option>
                            <option value="Main à Main">Main à Main</option>
                        </select>`;
                    period = `
                        <div class="col-md-6">
                            <h5>Paiement par</h5>
                            <select class="utf-chosen-select-single-item" name="paypar" id="paypar" required>
                                <option value="12 mois">12 mois</option>
                                <option value="24 mois">24 mois</option>
                                <option value="6 mois">6 mois</option>
                                <option value="3 mois">3 mois</option>
                                <option value="1 mois">1 mois</option>
                                <option value="Semaine">Semaine</option>
                                <option value="Jour">Jour</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h5>Prix</h5>
                            <input class="search-field" placeholder="Prix" name="price" id="price" type="number" required/>
                        </div>
                    `;
                }
                $('.boxType').html(`
                    <h3>Information `+data.result.type+`</h3>
                    <div class="content with-padding">
                        `+floor+`
                        <div class="col-md-6">
                            <h5>Chambre</h5>
                            <select class="utf-chosen-select-single-item" name="room" id="room" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="Plus de 5">Plus de 5</option>
                            </select>
                        </div>
                        <div class="col-md-6 status">
                            `+status+`
                        </div>
                        <div class="col-md-6">
                            <h5>Etat</h5>
                            <select class="utf-chosen-select-single-item" name="etat" id="etat" required>
                                <option value="Nouveau">Nouveau</option>
                                <option value="Ancien">Ancien</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h5>Autres caractéristiques <span>(optional)</span></h5>
                            <div class="checkboxes in-row margin-bottom-20">
                                <input id="check-2" type="checkbox" name="other[]" value="Climatisation">
                                <label for="check-2">Climatisation</label>
                                <input id="check-3" type="checkbox" name="other[]" value="Chauffage centrale">
                                <label for="check-3">Chauffage centrale</label>
                                <input id="check-4" type="checkbox" name="other[]" value="Internet">
                                <label for="check-4">Internet</label>
                                <input id="check-5" type="checkbox" name="other[]" value="Parking">
                                <label for="check-5">Parking</label>
                                <input id="check-6" type="checkbox" name="other[]" value="jardin">
                                <label for="check-6">jardin</label>
                                <input id="check-7" type="checkbox" name="other[]" value="Garage">
                                <label for="check-7">Garage</label>
                                <input id="check-8" type="checkbox" name="other[]" value="Meublé">
                                <label for="check-8">Meublé</label>
                            </div>
                        </div>
                        <div id="period">`+period+`</div>
                    </div>

                `);
            }
        });
    });

    $('.utf-agent-avatar').on('click', '.delete', function(){
        var id = $(this).attr("id");
        var name = $(this).attr("data-name");
        Swal.fire({
            title: "Es-vous sûr?",
            text: "Vous ne pourrez pas revenir en arrière!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui, supprimez-le!",
            cancelButtonText: "Non, annuler!",
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url:"/image/"+id,
                    method:"delete",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    }
                });
                Swal.fire(
                    "Supprimé!",
                    "Vos données ont été supprimées.",
                    "success"
                )
                window.location.href = "/"+name;
                // result.dismiss can be "cancel", "overlay",
                // "close", and "timer"
            } else if (result.dismiss === "cancel") {
                Swal.fire(
                    "Annulé",
                    "Votre données ont en sécurité :)",
                    "error"
                )
            }
        });
    });

</script>

@endsection
