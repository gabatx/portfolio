<?php
$descripcionSitio = "Soporte"
?>
@extends('template.index')

@push('links')
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Styles bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Estilos generales -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{ asset('css/font-awesome/css/all.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    @include('pages.feedback.body')
@endsection
