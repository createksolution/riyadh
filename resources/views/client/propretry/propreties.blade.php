@extends('layouts.app')
@section('content')
<!-- Titlebar -->
<div class="parallax titlebar" data-background="/images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mes Proprétiés</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li>Mes Proprétiés</li>
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
            <table class="manage-table responsive-table">
                <tr>
                    <th>Proprétie</th>
                    <th>Date</th>
                    <th style="text-align:right">Action</th>
                </tr>
                @foreach ($proprety as $i)
                    <tr>
                        <td class="utf-title-container"><img src="/gallery/{{$i->photo}}" alt="">
                            <div class="title">
                                <h4><a href="#">{{$i->title}}</a></h4>
                                <span>{{$i->state}}, {{$i->adr}}</span> <span class="table-property-price">{{$i->price}} DA</span>
                            </div>
                        </td>
                        <td class="utf-expire-date">{{$i->expire}}</td>
                        <td class="action">
                            <a href="/promotion" onclick="event.preventDefault();document.getElementById('promotion_{{$i->id}}').submit();" class="view tooltip left" title="Demander un service de promotion"><i class="icon-feather-eye"></i></a>
                            <a href="/getProprety/{{$i->id}}" class="edit tooltip left" title="Editer"><i class="icon-feather-edit"></i></a>
                            <a style="cursor: pointer" id="{{$i->id}}" data-name="client/{{Auth::guard('client')->user()->id}}/proprety" class="delete tooltip left" title="Supprimer"><i class="icon-feather-trash-2"></i></a>
                        </td>
                    </tr>
                    {{-- request promotion servis --}}
                    <form id="promotion_{{$i->id}}" action="/promotion" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="proprety" value="{{$i->id}}">
                    </form>
                @endforeach
            </table>
            <a href="/proprety/create" class="utf-centered-button margin-top-30 button">Ajouter Nouveau Propértie</a>
        </div>
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
<script src="/scripts/sweetalert.js"></script>
@if ($message = Session::has('promotion'))
    <script>
        Swal("Votre demande de service de promotion à été envoyé avec succès","","success",{});
    </script>
@endif
<script>
    $('table').on('click', '.delete', function(){
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
                    url:"/proprety/"+id,
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
