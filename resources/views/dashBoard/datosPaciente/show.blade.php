@extends('dashBoard.master')
@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="jumbotron">
            <div class="form-group mb-3">
            
                <input readonly type="text" class="form-control" name="name" id="name" 
                        placeholder="Nombre del paciente" value="{{ old('name', $patient -> name) }}">
            </div>
        
            <div class="form-group mb-3">
                <label class="form-label" for="name">Contenido</label>
                <table class="table table-dark table-striped table-over">
                    <thead>
                      <tr>
                        <th scope="col">Paciente</th>
                        <th scope="col">Oximetría</th>
                        <th scope="col">Frecuencia respiratoria</th>
                        <th scope="col">Frecuencia cardiaca</th>
                        <th scope="col">Temperatura</th>
                        <th scope="col">Presión arteríal</th>
                        <th scope="col">Glicemias</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($patients as $patient)
                        <tr>
                          <th scope="row">{{ Auth::user()->name }}</th>
                          <td>{{ $patient -> oximetria}}</td>
                          <td>{{ $patient -> frec_respiratoria}}</td>
                          <td>{{ $patient -> frec_cardiaca}}</td>
                          <td>{{ $patient -> temperatura}}</td>
                          <td>{{ $patient -> presion_arterial}}</td>
                          <td>{{ $patient -> glicemias}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                        
                
            </div>
        
            <div class="row-s12 center mb-3">
                <button type="submit" class="btn btn-primary btn-sm">Regresar</button>
            </div>
                        
        </div>
    </div>
</div>


@endsection
