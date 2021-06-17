@extends('layout.template')
@section('title', 'Rubros')
@section('name_page','Rubros')

@section('content')
    @include('layout.headers.header')
    @include('rubros.components.all_rubros')
    @include('layout.footer')
@endsection
