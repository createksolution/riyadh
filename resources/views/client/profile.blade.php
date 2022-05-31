@extends('layouts.app')
@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Mon Profil</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li>Mon Profil</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <form id="logout-fo" action="{{ route('client.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <form class="container" id="formUpdate" enctype="multipart/form-data" action="/client/change/{{Auth::guard('client')->user()->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row" >
            <!-- Widget -->
            <div class="col-md-3">
                <div class="margin-bottom-20">
                    <div class="utf-edit-profile-photo-area"> <img src="/profile/{{Auth::guard('client')->user()->photo}}" alt="">
                        <div class="utf-change-photo-btn-item">
                            <div class="utf-user-photo-upload"> <span><i class="fa fa-upload"></i> Modifier la photo</span>
                                <input type="file" id="photo1" name="photo" class="upload tooltip top" title="Upload Photo" />
                            </div>
                        </div>
                    </div>
                    <ul style="list-style: none" class="photo"></ul>
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
            <div class="col-md-9">
                <div class="utf-user-profile-item">
                    <div class="utf-submit-page-inner-box">
                        <h3>Mon compte</h3>
                        <div class="content with-padding">
                            <div class="col-md-6">
                                <label>votre nom</label>
                                <input name="name" placeholder="Nom" id="name1" value="{{Auth::guard('client')->user()->name}}" type="text"/>
                                <ul style="list-style: none;"></ul>
                            </div>
                            <div class="col-md-6">
                                <label>Votre prénom</label>
                                <input name="lname" placeholder="Prénom" id="lname1" value="{{Auth::guard('client')->user()->lname}}" type="text"/>
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-6">
                                <label>Nom d'utilisateur</label>
                                <input name="username" placeholder="Nom d'utilisateur" id="username1" value="{{Auth::guard('client')->user()->username}}" type="text">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-6">
                                <label>Gender</label>
                                <select name="sex" id="sex1">
                                    <option {{ Auth::guard('client')->user()->sex == 'Femme' ? 'selected' : '' }} value="Femme">Femme</option>
                                    <option {{ Auth::guard('client')->user()->sex == 'Homme' ? 'selected' : '' }} value="Homme">Homme</option>
                                </select>
                                {{-- <ul style="list-style: none"> <li class="text-danger">fwdgthtfgjnxhy</li></ul> --}}
                            </div>
                            <div class="col-md-6">
                                <label>Date de naissance</label>
                                <input id="birth1" placeholder="Date de naissance" name="birth" value="{{Auth::guard('client')->user()->birth}}" type="date">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-6">
                                <label>Wilaya</label>
                                <select name="state" id="state1">
                                    @foreach ($states as $i)
                                        <option {{ (Auth::guard('client')->user()->state == $i->state) ? 'selected' : '' }} value="{{$i->state}}">{{$i->state}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 margin-bottom-0">
                                <label>Address</label>
                                <textarea name="adr" placeholder="Address" id="adr1" cols="20" rows="3">{{Auth::guard('client')->user()->adr}}</textarea>
                                <ul style="list-style: none"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="utf-centered-button button margin-top-0 margin-bottom-20" id="registerBtn1" type="button">Sauvegarder les modifications</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @if (Auth::guard('client')->user()->type == 'agency')
        <form class="container" id="agencyForm" action="/agency/change/{{$agency->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="utf-user-profile-item">
                        <div class="utf-submit-page-inner-box">
                            <h3>Mon agence</h3>
                            <div class="content with-padding">
                                <div class="col-md-12">
                                    <label>Nom de l'agence</label>
                                    <input value="{{$agency->agency}}" placeholder="Nom de l'agence" id="agency1" name="agency" type="text">
                                    <ul style="list-style: none"></ul>
                                </div>
                                <div class="col-md-12">
                                    <label>Numéro de rigistre</label>
                                    <input value="{{$agency->register}}" placeholder="Numéro de registre" id="Numregister1" name="register" type="text">
                                    <ul style="list-style: none"></ul>
                                </div>
                                <div class="col-md-12">
                                    <label>Numéro d'agrement</label>
                                    <input value="{{$agency->agrement}}" placeholder="Numéro d'agrement" id="agrement1" name="agrement" type="text">
                                    <ul style="list-style: none"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="utf-centered-button button margin-top-0 margin-bottom-20" id="agencyBtn" type="button">Sauvegarder les modifications</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

    @if (Auth::guard('client')->user()->type == 'freelancer')
        <form class="container" action="/freelancer/change/{{$free->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="utf-user-profile-item">
                        <div class="utf-submit-page-inner-box">
                            <h3>Mon freelance</h3>
                            <div class="content with-padding">
                                <div class="col-md-12">
                                    <label>Activité</label>
                                    <select name="activity">
                                        @foreach ($freelancer as $i)
                                            <option {{ ($free->activity == $i->activity) ? 'selected' : '' }} value="{{$i->activity}}">{{$i->activity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="utf-centered-button button margin-top-0 margin-bottom-20" type="submit">Sauvegarder les modifications</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
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
<script src="/scripts/sweetalert.js"></script>
@if ($message = Session::has('success'))
    <script>
        Swal("Votre modification a été enregistrée avec succès","","success",{});
    </script>
@endif
{{-- update profile --}}
<script type="text/javascript">
    $('#photo1').bind('change', function() {
        if(this.files[0].size >= 2048000){
            $('.photo').html('<li class="text-danger">La taille du photo ne doit pas dépasser 2048000 octet.</li>');
            $('#registerBtn1').prop( "disabled", true );
        }else{
            $('.photo').html('');
            $('#registerBtn1').prop( "disabled", false );
        }
    });

    //valid username
    $("#username1").keyup(function(){
        var username = $("#username1").val();
        $.ajax({
            url:"/valide/"+username,
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "username": username
                },
            success:function(data)
            {
                if(data.error){
                    $('#username1+ul').html("<li class='text-danger'>Le nom d'utilisateur a déjà été pris.</li>");
                    $('#registerBtn1').prop( "disabled", true );
                }else{
                    $('#registerBtn1').prop( "disabled", false );
                    $('#username1+ul').html('');
                }
            }
        });
    });

    //valid agency name
    $("#agency1").keyup(function(){
        var agency = $("#agency1").val();
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
                    $('#agency1+ul').html("<li class='text-danger'>Le nom d'agence a déjà été pris.</li>");
                    $('#agencyBtn').prop( "disabled", true );
                }else{
                    $('#agencyBtn').prop( "disabled", false );
                    $('#agency1+ul').html('');
                }
            }
        });
    });

    //update information
    $("#registerBtn1").on('click', function() {
        valid = true;
        if($('#name1').val()== ""){
            $('#name1+ul').html('<li class="text-danger">Le nom est obligatoire.</li>');
            valid = false;
        }else{
            $('#name1+ul').html('');
        }

        if($('#lname1').val()== ""){
            $('#lname1+ul').html('<li class="text-danger">Le prénom est obligatoire.</li>');
            valid = false;
        }else{
            $('#lname1+ul').html('');
        }

        if($('#username1').val()== ""){
            $('#username1+ul').html("<li class='text-danger'>Le nom d'utilisateur est obligatoire.</li>");
            valid = false;
        }else{
            $('#username1+ul').html('');
        }

        if($('#birth1').val()== ""){
            $('#birth1+ul').html('<li class="text-danger">La date de naissance est obligatoire.</li>');
            valid = false;
        }else{
            $('#birth1+ul').html('');
        }

        if($('#adr1').val()== ""){
            $('#adr1+ul').html(`<li class="text-danger">L'address est obligatoire.</li>`);
            valid = false;
        }else{
            $('#adr1+ul').html('');
        }

        if(valid){
            $('#formUpdate').submit();
        }
    });

    //update agency
    $("#agencyBtn").on('click', function() {
        valid = true;
        if($('#agency1').val()== ""){
            $('#agency1+ul').html(`<li class="text-danger">Le nom de l'agence est obligatoire.</li>`);
            valid = false;
        }else{
            $('#agency1+ul').html('');
        }

        if($('#agrement1').val()== ""){
            $('#agrement1+ul').html(`<li class="text-danger">Le Numéro d'agrement est obligatoire.</li>`);
            valid = false;
        }else{
            $('#agrement1+ul').html('');
        }

        if($('#Numregister1').val()== ""){
            $('#Numregister1+ul').html(`<li class="text-danger">Le Numéro de registre est obligatoire.</li>`);
            valid = false;
        }else{
            $('#Numregister1+ul').html('');
        }

        if(valid){
            $('#agencyForm').submit();
        }
    });
</script>
@endsection
