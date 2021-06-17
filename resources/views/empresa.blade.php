@extends('layout.template')

@section('title', 'Empresa')

@section('content')
    @include('empresa.header_empresa')
    @include('empresa.detalles_empresa')
    @include('layout.footer')
@endsection