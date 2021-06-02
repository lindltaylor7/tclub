@extends('layout.template')

@section('title', 'Inicio')

@section('content')
    @include('layout.main_header')

    @include('layout.categories_cards')
    @include('layout.listing_card')
    @include('layout.add_triad')
    @include('layout.places_section')
    @include('layout.suscribe')
    @include('layout.footer')
@endsection
