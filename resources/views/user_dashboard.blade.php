@extends('layout.template')

@section('title', 'Administrar empresa')

@section('content')
    
    @include('usuario.user_dashboard_header')
    @include('usuario.user_dashboard_section')
    @include('layout.sections.suscribe')
    @include('layout.footer')
@endsection
