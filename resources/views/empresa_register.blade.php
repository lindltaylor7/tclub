@extends('layout.template')


@section('title', 'Registro de Empresa')

@section('content')
    @include('empresa.empresa_section.business_register_header')
    @include('empresa.empresa_section.business_register_form')
    @include('layout.footer')

@endsection
        