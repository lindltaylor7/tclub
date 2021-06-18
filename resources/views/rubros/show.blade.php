@extends('layout.template')

@section('title', 'Rubro')

@section('content')
    @include('rubros.components.header_unico')
    @include('rubros.components.empresas_rubro')
    @include('layout.footer')
@endsection
