@extends('layout.template')

@section('title', 'Ciudades')
@section('name_page','Ciudades')

@section('content')
    @include('ciudades.components.header')
    @include('ciudades.components.top_ciudades')
    @include('ciudades.components.all_ciudades')
    @include('layout.footer')
@endsection
