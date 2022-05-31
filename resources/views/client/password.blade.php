@extends('layouts.app')
@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Changer Le Mot De Passe</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li>Changer Le Mot De Passe</li>
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

    <div class="container">
        <div class="row" >
            <!-- Widget -->
            <div class="col-md-3">
                <div class="margin-bottom-20">
                    <div class="utf-edit-profile-photo-area"> <img src="/profile/{{Auth::guard('client')->user()->photo}}" alt=""></div>
                </div>
                <div class="clearfix"></div>
                <div class="sidebar margin-top-20">
                    <div class="user-smt-account-menu-container">
                        <ul class="user-account-nav-menu">
                            <li><a href="/user/profile" class="{{ (request()->segment(2) == 'profile') ? 'current' : '' }}"><i class="sl sl-icon-user"></i> Mon Profil</a></li>
                            <li><a href="my-bookmarks.html" class="{{ (request()->segment(2) == '') ? 'current' : '' }}"><i class="sl sl-icon-star"></i> Liste Des Signets</a></li>
                            <li><a href="/client/{{Auth::guard('client')->user()->id}}/proprety" class="{{ (request()->segment(3) == 'proprety') ? 'current' : '' }}"><i class="sl sl-icon-docs"></i> Mes proprétiés</a></li>
                            <li><a href="/proprety/create" class="{{ (request()->segment(2) == 'create') ? 'current' : '' }}"><i class="sl sl-icon-action-redo"></i> Nouveau Proprétié</a></li>
                            <li><a href="/user/phone" class="{{ (request()->segment(2) == 'phone') ? 'current' : '' }}"><i class="sl sl-icon-phone"></i> Changer Num Téléphone</a></li>
                            <li><a href="/user/password" class="{{ (request()->segment(2) == 'password') ? 'current' : '' }}"><i class="sl sl-icon-lock"></i> Changer Mot de Passe</a></li>
                            <li><a href="{{ route('client.logout') }}" onclick="event.preventDefault();document.getElementById('logout-fo').submit();"><i class="sl sl-icon-power"></i> Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <form class="utf-user-profile-item" id="changePassword" method="POST" action="/client/{{Auth::guard('client')->user()->id}}/changePassword" >
                    @csrf
                    <div class="utf-submit-page-inner-box">
                        <h3>Changer le mot de passe</h3>
                        <div class="content with-padding">
                            <div class="col-md-4">
                                <label>Mot de passe actuel</label>
                                <input type="password" name="passwordn" id="passwordn" placeholder="*********">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-4">
                                <label>Nouveau mot de passe</label>
                                <input type="password" name="password" id="passwordd" placeholder="*********">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-4">
                                <label>Confirmer le mot de passe</label>
                                <input type="password" name="passwordc" id="passwordc" placeholder="*********">
                                <ul style="list-style: none"></ul>
                            </div>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="utf-centered-button button margin-top-0 margin-bottom-20" id="passwordBtn" type="button">Sauvegarder les modifications</button>
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
<script src="/scripts/typed.js"></script>
<script src="/scripts/custom_jquery.js"></script>
<script src="/scripts/sweetalert.js"></script>
@if ($message = Session::has('success'))
    <script>
        Swal("Votre modification a été enregistrée avec succès","","success",{});
    </script>
@endif
@if ($message = Session::has('password'))
    <script>
         $('#passwordn+ul').html('<li class="text-danger">Le mot de passe ne correspond pas.</li>');
    </script>
@endif
<script>
    // valid password
    $("#passwordd").keyup(function(){
        if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test($("#password").val())){
            $('#passwordd+ul').html('<li class="text-danger">Le mot de passe doit comporter au moins 8 caractères et au moins une lettre  majuscules, une lettre minuscules, un chiffre et un caractère spécial.</li>');
            $('#passwordBtn').prop( "disabled", true );
        }else{
            $('#passwordd+ul').html('');
            $('#passwordBtn').prop( "disabled", false );
        }
    });

    //changa password
    $("#passwordBtn").on('click', function() {
        valid = true;
        if($('#passwordd').val()== ""){
            $('#passwordd+ul').html("<li class='text-danger'>Le mot de pass est obligatoire.</li>");
            valid = false;
        }else{
            $('#passwordd+ul').html('');
        }

        if($('#passwordc').val()== ""){
            $('#passwordc+ul').html("<li class='text-danger'>La confirmtion du mot de pass est obligatoire.</li>");
            valid = false;
        }else{
            $('#passwordc+ul').html('');
        }

        if($('#passwordn').val()== ""){
            $('#passwordn+ul').html("<li class='text-danger'>Le mot de passe actuel est obligatoire.</li>");
            valid = false;
        }else{
            $('#passwordn+ul').html('');
        }

        if($('#passwordc').val()!= $('#passwordd').val()){
            $('#passwordc+ul').html("<li class='text-danger'>Le mot de pass ne corréspond pas.</li>");
            $('#passwordd+ul').html("<li class='text-danger'>Le mot de pass ne corréspond pas.</li>");
            valid = false;
        }

        if(valid){
            $('#changePassword').submit();
        }
    });

</script>
@endsection
