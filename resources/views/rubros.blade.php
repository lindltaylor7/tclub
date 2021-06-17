@extends('layout.template')

@section('title', 'Todos los rubros')

@section('content')
   
   
    @include('rubro.rubros_header')
    @include('rubro.rubros_list')
    @include('layout.footer')
@endsection
