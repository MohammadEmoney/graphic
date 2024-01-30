<!doctype html>
<html lang="fa">
    <head>
        @include('layouts.theme_partials.head')
    </head>

    <body id="top">

        <main>

            @include('layouts.theme_partials.header')

            @yield('content')

        </main>

        @include('layouts.theme_partials.footer')


        @include('layouts.theme_partials.script')

    </body>
</html>
