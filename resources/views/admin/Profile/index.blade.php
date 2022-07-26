@extends('admin.admin_master')

@section('title', 'Profile Administrateur')

@section('dashboard_content')
<section class="content">
<div class="row">
    <div class="col-12 col-lg-5 col-xl-6">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black">
            <a href="{{ route('admin.profile.edit') }}" class="btn btn-info" style="float: right">Editer votre Profile</a>
            <h3 class="widget-user-username">Nom de l'administrateur: {{ $adminData->name }}</h3>
            <h6 class="widget-user-desc">Email: {{ $adminData->email }}</h6>
        </div>
        {{--<div class="widget-user-image">
            <img class="rounded-circle" src="{{ asset('frontend') }}/assets/images/logo.png" alt="User Avatar">
        </div>--}}
        <div class="box-footer">
            <div class="row">
                {{--<div class="col-sm-4">
                    <div class="description-block">
                    <h5 class="description-header">12K</h5>
                    <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 br-1 bl-1">
                    <div class="description-block">
                    <h5 class="description-header">550</h5>
                    <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                    <h5 class="description-header">158</h5>
                    <span class="description-text">TWEETS</span>
                    </div>
                    <!-- /.description-block -->
                </div>--}}
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        </div>
    </div>
</div>
</section>
@endsection

