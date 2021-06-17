@extends('layout.template')

@section('title', 'Ciudad')

@section('content')
    @include('layout.headers.header_unico')
    @include('ciudad.rubros_ciudad')
    @include('ciudad.all_ciudades')
    @include('layout.footer')
@endsection