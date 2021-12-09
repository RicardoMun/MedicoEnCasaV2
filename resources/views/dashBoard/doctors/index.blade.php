@extends('dashBoard.master')
@section('content')

<table class="table table-dark table-striped table-over">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Tarjeta profesional</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($doctor as $doctor)
        <tr>
          <th scope="row">{{ $doctor -> nombre}}</th>
          <td>{{ $doctor -> apellidos}}</td>
          <td>{{ $doctor -> tarjeta_profesional}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="mb-3">
    <a class="btn btn-outline-primary btn-sm" href="{{ URL::previous() }}">Regresar</a>
    <a href="{{ route('doctors.create') }}" class="btn btn-info btn-sm">Añadir doctor</a>
  </div>
  
@endsection
