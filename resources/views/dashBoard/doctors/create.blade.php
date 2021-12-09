@extends('dashBoard.master')
@section('content')

<form action="{{route('doctors.store')}}" method="post">
    @include('dashBoard.doctors.form')

</form>

@endsection