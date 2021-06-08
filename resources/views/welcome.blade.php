@extends('layout.template')

@section('title', 'Inicio')

@section('content')
    @include('layout.headers.main_header')
    @include('layout.sections.categories_cards')
    @include('layout.sections.listing_card')
    @include('layout.sections.add_triad')
    @include('layout.sections.places_section')
    @include('layout.sections.suscribe')
    @include('layout.footer')
@endsection
