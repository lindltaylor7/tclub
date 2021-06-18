@extends('layout.template')

@section('title', 'Empresas')
@section('name_page','Empresas')

@section('content')
    @include('empresas.components.header')
    @include('empresas.components.all_empresas')
    @include('layout.footer')
@endsection
