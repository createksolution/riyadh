@extends('layouts.app')
@section('content')
    <!-- Titlebar -->
    <div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
        <div id="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Changer Numéro Téléphone</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li>Changer Numéro Téléphone</li>
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
                <form class="utf-user-profile-item" id="changePhone" method="POST" action="/client/{{Auth::guard('client')->user()->id}}/changePhone" >
                    @csrf
                    <div class="utf-submit-page-inner-box">
                        <h3>Changer Numéro Du Téléphone</h3>
                        <div class="content with-padding">
                            <div class="col-md-6">
                                <label>Mot de passe actuel</label>
                                <input type="password" name="password" id="passwordd" placeholder="*********">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-6">
                                <label>Numéro Téléphone</label>
                                <input type="text" name="phone" id="tel" value="{{Auth::guard('client')->user()->phone}}">
                                <ul style="list-style: none"></ul>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div id="recaptcha-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="utf-centered-button button margin-top-0 margin-bottom-20" id="telBtn" type="button">Sauvegarder les modifications</button>
                        </div>
                    </div>
                </form>
                <div class="utf-user-profile-item" style="display: none" id="codeForm">
                    @csrf
                    <div class="utf-submit-page-inner-box">
                        <h3>vérifier Numéro Téléphone</h3>
                        <div class="content with-padding">
                            <div class="col-md-12">
                                <label>Code de vérification</label>
                                <input type="text" name="code" id="cod" placeholder="Code de vérification">
                                <ul style="list-style: none"></ul>
                            </div>
                        </div>
                      </div>
                      <div id="recaptcha-container"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="utf-centered-button button margin-top-0 margin-bottom-20" id="codeBtn" type="button">Vérifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="id" value="{{Auth::guard('client')->user()->id}}">
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
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6'></script>
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
<script>
    window.onload=function () {
    render();
    };

     function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }

    function phoneSendAuth() {
        var number = $("#tel").val();
        var reg=  /^(\+213|)(5|6|7)[0-9]{8}$/
        if(reg.test(number)){
            firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                $('#tel+ul').html('<li class="text-danger">Veuillez mettre le code reçu sur votre téléphone.</li>');
                $("#codeForm").css('display','block');
                $('#telBtn').prop( "disabled", true );
            }).catch(function (error) {
                $('#tel+ul').html('<li class="text-danger">'+error.message+'.</li>');
            });
        }else{
            $('#tel+ul').html('<li class="text-danger">Format non valide du numéro de téléphone : +213000000000.</li>');
        }

    }

    function codeverify() {
        var code = $("#cod").val();
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            $('#cod+ul').html('');
            $('#changePhone').submit();
        }).catch(function (error) {
            $('#cod+ul').html('<li class="text-danger">'+error.message+'.</li>');
        });
    }

    //valid phone
    $("#tel").keyup(function(){
        var phone = $("#tel").val();
        $.ajax({
            url:"/validePhone/"+phone,
            method:"get",
            data: {
                "_token": "{{ csrf_token() }}",
                "phone": phone
                },
            success:function(data)
            {
                if(data.error){
                    $('#tel+ul').html("<li class='text-danger'>Le numéro du téléphone a déjà été pris.</li>");
                    $('#telBtn').prop( "disabled", true );
                }else{
                    $('#telBtn').prop( "disabled", false );
                    $('#tel+ul').html('');
                }
            }
        });
    });

    //changa phone
    $("#telBtn").on('click', function() {
        valid = true;
        if($('#passwordd').val()== ""){
            $('#password+ul').html("<li class='text-danger'>Le mot de pass est obligatoire.</li>");
            valid = false;
        }else{
            $('#passwordd+ul').html('');
        }

        if($('#tel').val()== ""){
            $('#tel+ul').html('<li class="text-danger">Le numéro de téléphone est obligatoire.</li>');
            valid = false;
        }else{
            $('#tel+ul').html('');
        }

        if(valid){
            $.ajax({
                url: "/validePassword",
                method:"POST",
               data: {
                    "_token": "{{ csrf_token() }}",
                    "password": $('#passwordd').val(),
                    "id" : $('#id').val(),
                },
                dataType:"json",
                success:function(data){
                    if(data.password){
                        $('#passwordd+ul').addClass('error');
                        $('#passwordd+ul').html("<li class='text-danger'>Le mot de passe ne correspond pas.</li>");
                    }
                    if(data.success){
                        phoneSendAuth();
                    }
                }
            });

        }
    });
</script>
@endsection
