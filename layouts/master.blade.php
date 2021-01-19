<!doctype html>
<html lang='en'>
    <head>
        @section('head')
            @include('layouts.partials.title')
            @include('layouts.partials.meta')
            @include('layouts.partials.favicon')
            @include('layouts.partials.styles')
        @show
    </head>
    <body class="@yield('superclass')">
        @if(config('app.env') == 'production')
            @include('layouts.partials.trackers')
        @endif

        <header>
            @section('header')
                @include('layouts.partials.header')
            @show
        </header>

        <main>
            @section('main')

            @show
        </main>

        <footer>
            @section('footer')
                @include('layouts.partials.footer')
            @show
        </footer>

        @include('layouts.partials.scripts')
    </body>
</html>