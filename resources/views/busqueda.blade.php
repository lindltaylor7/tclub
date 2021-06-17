@extends('layout.template')

@section('title', 'Búsqueda Avanzada')

@section('content')
    @include('busqueda.header')
    @include('busqueda.listas')
    @include('layout.footer')
@endsection