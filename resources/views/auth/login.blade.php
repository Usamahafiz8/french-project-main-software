@extends('layouts.app')

@section('content')

<div class="container desktop">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- {{ __('Login') }} -->
                    Connexion
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Souviens-toi de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button-29">
                                    <!-- {{ __('Login') }} -->
                                    Connexion
                                </button>
                                &nbsp;
                                @if (Route::has('password.request'))
                                <a style="text-decoration:none;font-weight:600;   color:Black; " class="btn btn-link" href="{{ route('password.request') }}">
                                    <!-- {{ __('Forgot Your Password?') }} -->
                                    Mot de passe oublié?
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- making new Login as demand -->

<div class='mainlogin mobile'>
    <div class='mainlogin-2'>
        <div class='logincard'>
            <div style="text-align: center;">

                <img style='width:250px;' src="{{asset('images/logo.png')}}">
            </div>
            <br />
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email" class=" col-form-label text-md-end">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br />
                <label for="Password" class=" col-form-label text-md-end">mot de passe</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br />
                <div style="  width:100%; text-align:right;   ">
                    <a style="text-decoration:none; font-weight:600; color:#024b86; " class="btn btn-link" href="{{ route('password.request') }}">
                        <!-- {{ __('Forgot Your Password?') }} -->
                        Mot de passe oublié?
                    </a>
                </div>
                <br />
                <button style="width: 100%;" type="submit" class="button-29">
                    <!-- {{ __('Login') }} -->
                    Connexion
                </button>
                &nbsp;
                @if (Route::has('password.request'))
                <!-- <a style="text-decoration:none;font-weight:600;color:Black; " class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> -->
                @endif
            </form>
            <br />
            <br />
            <div>
                <!-- Don't have an account? -->
                Vous n'avez pas de compte ?
                <a style="text-decoration:none; font-weight:600; color:#024b86;" href="{{ route('register') }}">
                    Créez votre compte
                </a>

            </div>
        </div>
    </div>
</div>
@endsection