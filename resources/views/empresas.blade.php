@extends('layout.template')

@section('title', 'Empresas')
@section('name_page','Todas las Empresas')

@section('content')
    @include('layout.headers.header')
    @include('empresa.all_empresas')
    @include('layout.footer')
@endsection