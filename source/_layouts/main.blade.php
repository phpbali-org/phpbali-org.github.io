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
        @if($page->production)
            @php
                $manifest = json_decode(file_get_contents(public_path('/assets/build/.vite/manifest.json')), true);
            @endphp
            <script type="module" src="/assets/build/{{$manifest['source/_assets/js/main.js']['file']}}"></script>
            <link rel="stylesheet" href="/assets/build/{{$manifest['source/_assets/js/main.js']['css'][0]}}">
        @else
            <script type="module" crossorigin src="{{ $page->viteClientUrl }}"></script>
            <script type="module" crossorigin src="{{ $page->viteUrl }}/source/_assets/js/main.js"></script>
        @endif
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
