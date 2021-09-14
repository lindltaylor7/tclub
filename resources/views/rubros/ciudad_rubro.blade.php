@extends('layout.template')

@section('title', 'Rubro')

@section('content')
    @include('rubros.components.header_ciudad_rubro')
    @include('rubros.components.empresas_ciudad_rubro')
    @include('layout.footer')
@endsection
