@extends('layout.template')

@section('title', 'Inicio')

@section('content')
    @include('layout.main_header')
    @include('index.card_rubros')
    @include('index.ad_triad')
    @include('layout.footer')
@endsection
