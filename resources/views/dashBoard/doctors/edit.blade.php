@extends('dashBoard.master')
@section('content')
@csrf
    <form action="{{ route('doctor.update', $doctor -> id) }}" method="post">
        @method('PUT')
        @include('dashBoard.doctors.form')
    </form>
    
@endsection