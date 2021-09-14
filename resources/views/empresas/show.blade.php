@extends('layout.template')

@section('title', 'Ofertas')

@section('content')
    @include('empresas.components.header_empresa')
    @include('empresas.components.detalles_empresa')
    @include('layout.footer')
@endsection
