<?php
$descripcionSitio = "Proyectos"
?>
@extends('template-admin.index')

{{-- ********** Custom links js ********** --}}
@push('links_js')
    <script src="{{ asset('css/admin/iCheck/icheck.min.js') }}" defer></script>
@endpush
{{-- ********** Custom links style ********** --}}
@push('links_css')
    <link href="{{ asset('css/admin/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endpush

{{-- ********** Central content ********** --}}
@section('content')
    @include('pages.admin.projects.list.body')
@endsection
