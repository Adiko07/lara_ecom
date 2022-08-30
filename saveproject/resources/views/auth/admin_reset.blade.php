{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('frontend.frontend_master')

@section('frontend_content')
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
<div class="col-md-12 col-sm-12 sign-in m-auto">
	<h4 class="">Réinitialisation de mot de passe du compte administrateur</h4>
	<p class="">Remplisser correctement tous les champs</p>
	<form class="register-form outer-top-xs" role="form" action="{{ route('admin_reset.password')}}" method="POST">
        @csrf
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail')}}
            </div>
        @endif

        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
        @endif
        <input type="hidden" name="token" value="{{ $token }}">
        <input class="block mt-1 w-full" type="hidden" name="token" value="{{ $token }}"/>
		<div class="form-group">
		<label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
		<input type="email"name="email" value="{{ $email ?? old('email')}}" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        @error('email')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mot de passe <span>*</span></label>
		    <input type="password" name="password" value="{{ old('password')}}" required class="form-control unicase-form-control text-input" id="exampleInputPassword1">
		</div>
        @error('password')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="password_confirmation" value="{{ old('password_confirmation')}}" required class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        @error('password_confirmation')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{ __("REINITIALISER LE MOT DE PASSE") }}</button>
	</form>
</div>
<!-- Sign-in -->	
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		</div><!-- /.container -->
</div>
@endsection

