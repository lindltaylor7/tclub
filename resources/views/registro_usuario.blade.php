@extends('layout.template')


@section('title', 'Registro de usuario')

@section('content')
    @include('layout.header')
    @include('layout.form_register_user')
    @include('layout.footer')
@endsection