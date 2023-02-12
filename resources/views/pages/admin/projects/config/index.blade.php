<?php
$descripcionSitio = "Nuevo proyecto"
?>
@extends('template-admin.index')

{{-- ********** Custom links js ********** --}}
@push('links_js')
    <script src="{{ asset('css/admin/iCheck/icheck.min.js') }}" defer></script>
    <!-- Switchery -->
    <script src="{{ asset('js/admin/switchery/dist/switchery.min.js') }}" defer></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('js/admin/jquery.tagsinput/src/jquery.tagsinput.js') }}" defer></script>
    <!-- Parsley -->
    <script src="{{ asset('js/admin/parsleyjs/dist/parsley.min.js') }}" defer></script>
    <!-- Autosize -->
    <script src="{{ asset('js/admin/autosize/dist/autosize.min.js') }}" defer></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('js/admin/moment/min/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/moment/locale/es.js') }}" defer></script>
    <script src="{{ asset('css/admin/bootstrap-daterangepicker/daterangepicker.js') }}" defer></script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{ asset('css/admin/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"
            defer></script>
    <!-- CKEditor -->
    <script src="{{ asset('js/admin/ckeditor/ckeditor.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('css/admin/nprogress/nprogress.js') }}" defer></script>
    <!-- Dropzone.js -->
    <script src="{{ asset('js/admin/dropzone/dist/min/dropzone.min.js') }}" defer></script>

@endpush
{{-- ********** Custom links style ********** --}}
@push('links_css')
    <link href="{{ asset('css/admin/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('js/admin/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('css/admin/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('css/admin/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}"
          rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/admin/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{ asset('js/admin/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
@endpush

{{-- ********** Central content ********** --}}
@section('content')
    @if(isset($project))
        @include('pages.admin.projects.config.edit')
    @else
        @include('pages.admin.projects.config.create')
    @endif
@endsection

