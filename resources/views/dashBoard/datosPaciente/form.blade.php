@csrf
@include('dashBoard.partials.validation-error')
<div class="jumbotron">


    <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nombre del paciente') }}</label>
        
        <div class="col-md-12">

            <input type="text" class="form-control @error('Oximetría') is-invalid @enderror" name="name" id="name"
            value="{{ old('name', $patients -> patient) }}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="form-group row">
        <label for="oximetria" class="col-md-12 col-form-label text-md-left">{{ __('Oximetría') }}</label>
        
        <div class="col-md-12">

            <input type="text" class="form-control @error('Oximetría') is-invalid @enderror" name="oximetria" id="oximetria"
            value="{{ old('oximetria', $patients -> patient) }}">

            @error('Oximetría')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>


    <div class="form-group row">
        <label for="frec_respiratoria" class="col-md-12 col-form-label text-md-left">{{ __('Frecuencia respiratoria') }}</label>

        <div class="col-md-12">

            <input type="text" class="form-control @error('frec_respiratoria') is-invalid @enderror" name="frec_respiratoria" id="frec_respiratoria"
            value="{{ old('frec_respiratoria', $patients -> patient) }}">

            @error('frec_respiratoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="form-group row">
        <label for="frec_cardiaca" class="col-md-12 col-form-label text-md-left">{{ __('Frecuencia cardiaca') }}</label>

        <div class="col-md-12">

            <input type="text" class="form-control @error('frec_cardiaca') is-invalid @enderror" name="frec_cardiaca" id="frec_cardiaca"
            value="{{ old('frec_cardiaca', $patients -> patient) }}">

            @error('frec_cardiaca')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="form-group row">
        <label for="temperatura" class="col-md-12 col-form-label text-md-left">{{ __('Temperatura') }}</label>

        <div class="col-md-12">

            <input type="text" class="form-control @error('temperatura') is-invalid @enderror" name="temperatura" id="temperatura"
            value="{{ old('temperatura', $patients -> patient) }}">

            @error('temperatura')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="form-group row">
        <label for="presion_arterial" class="col-md-12 col-form-label text-md-left">{{ __('Presión aarterial') }}</label>

        <div class="col-md-12">

            <input type="text" class="form-control @error('presion_arterial') is-invalid @enderror" name="presion_arterial" id="presion_arterial"
            value="{{ old('presion_arterial', $patients -> patient) }}">

            @error('presion_arterial')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>

    <div class="form-group row">
        <label for="glicemias" class="col-md-12 col-form-label text-md-left">{{ __('Glicemias') }}</label>

        <div class="col-md-12">

            <input type="text" class="form-control @error('glicemias') is-invalid @enderror" name="glicemias" id="glicemias"
            value="{{ old('glicemias', $patients -> patient) }}">

            @error('glicemias')
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
