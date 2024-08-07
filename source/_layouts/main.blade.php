<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta name="image" content="/assets/images/phpbali-logo.png">
        <link rel="icon" type=image/png href="/assets/images/favicon.png">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div class="menu-underlay"></div>
        <div class="flex flex-col min-h-screen">
            @include('_partials.header')
            
            <main class="flex flex-col flex-auto">
                @yield('body')
            </main>

            @include('_partials.footer')
        </div>
    </body>
</html>
