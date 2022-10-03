@extends('admin.admin_master')

@section('dashboard_content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="bg-white" style="border-radius:0.5em; margin-bottom: 1em;">
                <marquee class="text-dark"><h1 style="color:#000;">Bienvenue sur le tableau de bord de la SODIB-CI.</h1></marquee>
            </div>
        </div>
        <div class="col-12">
            <div class="bg-white" style="border-radius:0.5em; padding:1em">
                <img src="{{ asset('frontend') }}/assets/images/home.png" alt="logo" class="img-fluid">
            </div>
        </div>
        <div class="col-12">
            <div class="bg-white" style="margin-top: 1em; text-align: center;">
                <h1 style="color:#ff0000;">Toutes les fonctionnalités sont sur votre gauche..</h1>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
