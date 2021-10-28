@extends('layout.backend')

@section('content')
    <candidat-dashboard :user="{{Auth::user()}}"></candidat-dashboard>


@endsection
