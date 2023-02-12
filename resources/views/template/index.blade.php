<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Javier Cuadros | {{ $descripcionSitio }}</title>
    <!-- Icono -->
    <link href="{{ asset('img/JC_Negra_3.ico') }}" rel="stylesheet">
    <!-- links pesonalizados por página -->
    @stack('links')

    <!-- ********** Cabecera ********** -->
    @include('includes.components.header._field')

    <!-- ********** Contenido Central ********** -->
    @yield('content')

    <!-- ********** Footer ********** -->
    @include('includes.components.footer._field')
