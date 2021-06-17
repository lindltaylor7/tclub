@extends('layout.template')

@section('title', 'Ciudades')
@section('name_page','Todas las Ciudades')

@section('content')
    @include('layout.headers.header')
    @include('ciudad.top_ciudades')
    @include('ciudad.all_ciudades')
    @include('layout.footer')
@endsection