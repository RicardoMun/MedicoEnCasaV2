@extends('dashBoard.master')
@section('content')

        {{-- <table class="table table-dark table-striped table-over">
          <thead>
            <tr>
              <th scope="col">Nombre del paciente</th>
              <th scope="col">Familiar a cargo</th>
              <th scope="col">Doctor a cargo</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($patients as $patient)
                <tr>
                    <th scope="row">{{ Auth::user()->name}}</th>
                    <td>{{ Auth::user()->familiarName}}</td>
                    <td>{{ Auth::user()->nombre}}</td>
                    
                </tr>
            @endforeach

          </tbody>
        </table> --}}
    
        <table class="table table-dark table-striped table-over">
            <thead>
              <tr>
                {{-- <th scope="col">Paciente</th> --}}
                <th scope="col">Nombre del paciente</th>
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
                  <th scope="row">{{ $patient -> name/* Auth::user()->name */ }}</th>
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
          <div class="mb-3">
            <a class="btn btn-info btn-sm" href="{{ URL::previous() }}">Regresar</a>
            <a href="{{ route('datosPaciente.create') }}" class="btn btn-info btn-sm">Agregar datos</a>
          
          </div>
          
        @endsection
        
        {{ $patients -> links() }}
        
        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar el post seleccionado?</label>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm"  data-dismiss="modal">Cancelar</button>
                <form id="formDelete" method="POST" action="{{ route('datosPaciente.destroy', 0) }}"
                 data-action="{{ route('datosPaciente.destroy', 0) }}">
                  @method('DELETE')
                  @csrf          
                  <button type="submit" class="btn btn-danger btn-sm">Confirmar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
<script>
  window.onload = function() {
    $('#exampleModal').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var id = button.data('id')
      action = $('#formDelete').attr('data-action').slice(0, -1)
      action += id 
      $('#formDelete').attr('action', action)
      var modal = $(this)
      modal.find('.modal-title').text('Vas a eliminar el post con el código: ' + id)
    });
  };
</script>