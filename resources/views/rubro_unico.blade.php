@extends('layout.template')


@section('title', 'Rubro unico')

@section('content')
   
    @include('rubro.rubro_unico_header')
   @include('rubro.rubro_unico_empresas')
    @include('layout.footer')
@endsection