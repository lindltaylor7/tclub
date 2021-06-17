@extends('layout.template')

@section('title', 'Rubro')

@section('content')
    @include('layout.headers.header_unico')
    @include('rubro.empresas_rubro')
    @include('layout.footer')
@endsection