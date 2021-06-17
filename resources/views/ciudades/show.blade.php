@extends('layout.template')

@section('title', 'Ciudad')

@section('content')
    @include('layout.headers.header_unico')
    @include('ciudades.components.rubros_ciudad')
    @include('ciudades.components.all_ciudades')
    @include('layout.footer')
@endsection
