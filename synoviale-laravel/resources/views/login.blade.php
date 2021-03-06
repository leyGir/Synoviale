@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="container">
    <h2>CONNEXION</h2>
    <p>Vous devez avoir un compte pour réserver votre pass.</p>
    <div class="row">
        <div class="col s12">
            <form method="POST" action="{{ route('compte.connect') }}">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <label for="username">Identifiant utilisateur</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="input-field center-align row">
                    <div class="s12">
                      <p class="col l5 show-on-medium-and-up"></p>
                        <button type="submit" class="btn btn-primary col s12 l2">
                            {{ __('Se connecter') }}
                        </button>
                      <p class="col l5 show-on-medium-and-up"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="input-field center-align">
        <div class="s12">
            <p>Pas de compte ?</p>
            <a href="{{route('compte.create')}}" class="bold">CRÉER UN COMPTE</a>
        </div>
    </div>

</div>
@endsection
