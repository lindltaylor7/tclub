@extends('layout.template')

@section('title', 'Inicio')

@section('content')
    @include('layout.headers.main_header')
    @include('index.sections.cards_rubros')
    @include('index.sections.cards_empresas')
    @include('layout.sections.cards_ciudades')
    @include('layout.sections.nueva_suscripcion')
    @include('layout.footer')
@endsection
