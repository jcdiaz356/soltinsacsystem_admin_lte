<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->

        {{--
        TEMPLATE FREE AdminLTE Stylos
                    referencia: https://adminlte.io/docs/3.1/
         --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
{{--     Referencia de librreia de iconos fon AdminLTE--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @routes

{{--        Librería grafica --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>--}}

        {{--
        TEMPLATE FREE AdminLTE js
        referencia: https://adminlte.io/docs/3.1/
         --}}
        {{--        Referencia de libreria jquery--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>







        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body   class="hold-transition sidebar-mini">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
