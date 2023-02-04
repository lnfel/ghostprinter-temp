<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preload font" href="{{ asset('fonts/autorich-sans/autorich_sans-webfont.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous" />

    <!-- Critical styles, font, layout -->
    <style nonce="{{ csrf_token() }}">
        /* https://www.myfonts.com/collections/typia-nesia-foundry */
        /* https://creativemarket.com/neSia */
        /* https://creativemarket.com/neSia/5116352-Campfire-Slab-Serif */
        @font-face {
            font-family: 'Auto Rich Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('/fonts/autorich-sans/autorich_sans-webfont.woff2') format('woff2');
        }
    </style>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="text-gray-900 dark:bg-pumpkin-dark dark:text-white">
    @yield('header')
    @yield('content')
</body>
</html>