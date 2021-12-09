@extends('dashBoard.master')
@section('content')

    <form action="{{route('datosPaciente.store')}}" method="post">
        @include('dashBoard.datosPaciente.form')
    </form>

@endsection