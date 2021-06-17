@extends('layout.template')


@section('title', 'Rubros')
@section('name_page','Todos los Rubros')

@section('content')
    @include('layout.headers.header')
    @include('rubro.all_rubros')
    @include('layout.footer')
@endsection