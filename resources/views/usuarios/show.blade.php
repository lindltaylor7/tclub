@extends('layout.template')

@section('title', 'Administrar empresa')

@section('content')

    @include('usuarios.components.user_dashboard_header')
    @include('usuarios.components.user_dashboard_section')
    @include('layout.sections.nueva_suscripcion')
    @include('layout.footer')
@endsection
