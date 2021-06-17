@extends('layout.template')

@section('title', 'Todas las empresas')

@section('content')
    
    @include('empresa.empresas_header')
    @include('empresa.all_business_list')
    @include('layout.footer')
@endsection
