<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Javier Cuadros | {{ $descripcionSitio }}</title>
    {{--  Javascript --}}
    <script src="{{ asset('js/admin/bootstrap/jquery/dist/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/fastclick/lib/fastclick.js') }}" defer></script>
    <script src="{{ asset('js/admin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}" defer></script>
    <script src="{{ asset('js/admin/custom.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    @stack('links_js')
    {{--  Styles --}}
    <link href="{{ asset('css/admin/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}"
          rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/custom-admin.css') }}" rel="stylesheet">

    <!-- Icon -->
    <link href="{{ asset('img/JC_Negra_3.ico') }}" rel="stylesheet">
<!-- Custom links -->
@stack('links_css')

{{--  ********** Cabecera **********  --}}
@include('includes.components.admin.header._field')

{{--  ********** Central content **********  --}}
@yield('content')

{{--  ********** Footer **********  --}}
@include('includes.components.admin.footer._field')




