@csrf
@include('dashBoard.partials.validation-error')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO DE DOCTORES') }}</div>

                    <div class="card-body">
                        
                        <div class="form-group row">
                            <label for="nombre" class="col-md-12 col-form-label text-md-left">{{ __('Nombre') }}</label>
                            
                            <div class="col-md-12">

                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre"
                                value="{{ old('nombre', $doctor -> nombre) }}">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="apellidos" class="col-md-12 col-form-label text-md-left">{{ __('Apellidos') }}</label>

                            <div class="col-md-12">

                                <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" id="apellidos"
                                value="{{ old('apellidos', $doctor -> apellidos) }}">

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tarjeta_profesional" class="col-md-12 col-form-label text-md-left">{{ __('Tarjeta profesional') }}</label>

                            <div class="col-md-12">

                                <input type="text" class="form-control @error('tarjeta_profesional') is-invalid @enderror" name="tarjeta_profesional" id="tarjeta_profesional"
                                value="{{ old('tarjeta_profesional', $doctor -> tarjeta_profesional) }}">

                                @error('tarjeta_profesional')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>


                        <br>
                        <div class="row-s12 center">
                            <a class="btn btn-outline-primary btn-sm" href="{{ URL::previous() }}">Regresar</a>
                            <button type="submit" class="btn btn-info btn-sm">Confirmar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>