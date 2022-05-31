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
                                <li><a href="/client/{{Auth::guard('client')->user()->id}}/proprety" class="{{ (request()->segment(3) == 'proprety') ? 'current' : '' }}"><i class="sl sl-icon-docs"></i> Mes proprétiés</a></li>
                                <li><a href="/proprety/create" class="{{ (request()->segment(2) == 'create') ? 'current' : '' }}"><i class="sl sl-icon-action-redo"></i> Nouveau Proprétié</a></li>
                                <li><a href="/user/phone" class="{{ (request()->segment(2) == 'phone') ? 'current' : '' }}"><i class="sl sl-icon-phone"></i> Changer Num Téléphone</a></li>
                                <li><a href="/user/password" class="{{ (request()->segment(2) == 'password') ? 'current' : '' }}"><i class="sl sl-icon-lock"></i> Changer Mot de Passe</a></li>
                                <li><a href="{{ route('client.logout') }}" onclick="event.preventDefault();document.getElementById('logout-fo').submit();"><i class="sl sl-icon-power"></i> Déconnexion</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            @php
                $id = uniqid();
            @endphp
            <div class="col-md-9" style="display: none" id="imgForm">
                <div class="submit-page">
                    <!-- Section -->
                    <div class="utf-submit-page-inner-box">
                        <h3>Gallerie de proprétié</h3>
                        <div class="content with-padding">
                            <div class="col-md-12 submit-section">
                                <form action="/image/{{$id}}/store" enctype="multipart/form-data" method="POST" class="dropzone">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="utf-centered-button button" id="add" type="button">Ajouter Proprétie</a>
                    </div>
                </div>
            </div>
            <!-- Submit Page -->
           <div class="col-md-9" id="prop">
                <form  action="/proprety" method="POST" enctype="multipart/form-data" id="formProp">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="id">
                    <div class="submit-page">
                        <!-- Section -->
                        <div class="utf-submit-page-inner-box">
                            <h3>Information Basic  d'proprétié</h3>
                            <div class="content with-padding">
                                <div class="col-md-6">
                                    <h5>Titre de proprétié</h5>
                                    <input class="search-field" placeholder="Titre de proprétié" name="title" id="title" type="text" required/>
                                </div>
                                <div class="col-md-6">
                                    <h5>Photo de proprétié</h5>
                                    <input class="search-field" accept="image/png,image/jpg,image/jpeg," placeholder="Phot de proprétié" name="photo" id="photo1" type="file" required/>
                                </div>
                                <div class="col-md-6">
                                    <h5>Status</h5>
                                    <select class="utf-chosen-select-single-item" name="status" id="status" required>
                                        <option label="blank"></option>
                                        <option value="A vendre">A vendre</option>
                                        <option value="A loué">A loué</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <h5>Type</h5>
                                    <select class="utf-chosen-select-single-item" name="type" id="type1" required>
                                        <option label="blank"></option>
                                        @foreach ($type as $i)
                                            <option value="{{$i->type}}">{{$i->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <h5>Surface</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" placeholder="00000" data-unit="M2" name="area" id="area" required>
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
                                    <textarea name="adr" placeholder="Address" id="adr1" cols="20" rows="3"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <h5>Wilaya</h5>
                                    <select class="utf-chosen-select-single-item" name="state" id="state1">
                                        <option label="blank"></option>
                                        @foreach ($states as $i)
                                            <option value="{{$i->state}}">{{$i->state}}</option>
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
                                    <textarea name="desc" placeholder="Déscription du proprétié" cols="20" rows="2" id="desc" required></textarea>
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
                                        <input id="check-9" type="checkbox" name="sps[]" value="Éléctricité">
                                        <label for="check-9">Éléctricité</label>
                                        <input id="check-10" type="checkbox" name="sps[]" value="Eau">
                                        <label for="check-10">Eau</label>
                                        <input id="check-11" type="checkbox" name="sps[]" value="Gaz">
                                        <label for="check-11">Gaz</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section / End -->

                        <div class="utf-submit-page-inner-box boxType">
                        </div>

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
                        <div class="row">
                            <div class="col-md-12">
                                <button class="utf-centered-button button" type="submit" id="next">Suivant</a>
                            </div>
                        </div>
                    </div>
                </form>
           </div>

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
                    <div class="select-input disabled-first-option">
                        <input placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                    </div>
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
                    <div class="select-input disabled-first-option">
                        <input placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                    </div>
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
                if(data.result.type != 'Villa'){
                    floor = ` <div class="col-md-6">
                                <h5>Numéro d'étage</h5>
                                <input class="search-field" placeholder="Numéro d'étage" name="floor" id="floor" type="number" required/>
                            </div>`;
                }else{
                    floor = `<div class="col-md-6">
                                <h5>Nombre d'étages</h5>
                                <input class="search-field" placeholder="Nombre d'étages" name="nbrloor" id="nbrfloor" type="number" required/>
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
                            <div class="select-input disabled-first-option">
                                <input placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                            </div>
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
                            <div class="select-input disabled-first-option">
                                <input placeholder="Prix" name="price" id="price" type="number" data-unit="DA" required/>
                            </div>
                        </div>
                    `;
                }
                $('.boxType').html(`
                    <h3>Détails `+data.result.type+`</h3>
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
                        <div id="period">`+period+`</div>
                    </div>

                `);
            }
        });
    });

    $(document).on("submit", "#formProp",function(event){
        event.preventDefault();
        $("#prop").css('display','none');
        $("#imgForm").css('display','block');
    });

    $("#add").on('click', function() {
        var myForm = document.getElementById('formProp');
        $.ajax({
            url: '/proprety',
            method:'POST',
            data:new FormData(myForm),
            contentType: false,
            processData:false,
            success:function(data){
                if (data.redirect_url) {
                    window.location = data.redirect_url;
                }
            }
        });

    });
</script>

@endsection
