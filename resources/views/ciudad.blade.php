@extends('layout.template')

@section('title', 'Huancayo')

@section('content')
    @include('ciudad.header')
    @include('ciudad.rubros')
    @include('ciudad.ciudades')
    @include('layout.footer')
@endsection