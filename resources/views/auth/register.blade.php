@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('REGISTRO DE PACIENTES') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
    
                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
    
                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="geoDirection" class="col-md-4 col-form-label text-md-right">{{ __('Dirección georreferencial') }}</label>
    
                                <div class="col-md-6">
                                    <input id="geoDirection" type="text" class="form-control @error('geoDirection') is-invalid @enderror" 
                                    name="geoDirection" value="{{ old('geoDirection') }}" required autocomplete="geoDirection" 
                                    autofocus placeholder="(Latitud y longitud EJ: 1.23456, -76.54321)">
                                    @error('geoDirection')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>
    
                                <div class="col-md-6">
                                    <select class="form-control" name="document_choices" id="document_choices">
                                        <option selected disable > Seleccione el tipo de documento </option>
                                        <option value="cedula"> Cédula de ciudadania </option>
                                        <option value="tarjeta_identidad" selected="selected"> Tarjeta de identidad </option>
                                        <option value="registro_civil" selected="selected"> Registro civil </option>
                                        <option value="pasaporte" selected="selected"> Pasaporte </option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="document" class="col-md-4 col-form-label text-md-right">{{ __('Número de documento') }}</label>
    
                                <div class="col-md-6">
                                    <input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus>
    
                                    @error('document')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Select para escoger la persona que se registra
                             <div class="row mb-3"> 
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
    
                                <div class="col-md-6">
                                    <select class="form-control" name="user_choices" id="user_choices">
                                        <option selected disable> Seleccione el tipo de persona </option>
                                        <option value="paciente" selected= "selected"> Paciente </option>
                                        <option value="acompañante" > Acompañante </option>
                                    </select>
                                </div>
                            </div> --}}
    
                            <div class="row mb-3">
                                <label for="familiarName" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del familiar encargado') }}</label>
    
                                <div class="col-md-6">
                                    <input id="familiarName" type="text" class="form-control @error('familiarName') is-invalid @enderror" name="familiarName" value="{{ old('familiarName') }}" required autocomplete="familiarName" autofocus>
    
                                    @error('familiarName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-success">
                                        {{ __('Registrarse') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
