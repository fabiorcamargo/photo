<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#000">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">


    <!-- New -->


    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="RobJBJHNbBTciwvhcTws1YfKNCYgTQgS1qXb0lElDx8" />

    <meta name="keywords"
        content="fotografia, fotografo, fotografa, fotografo profissional, fotografia de mulher, fotografia de estudio, fotografia ar livre, fotografia familia, fotografia digital">
    <meta name='description'
        content='Olá! Meu nome é Lilly Almeida, sou uma fotógrafa e tenho uma paixão por capturar a beleza e a personalidade de cada pessoa em minhas fotos.'>

    <meta property="og:title" content="{{env('APP_NAME')}}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="{{env('APP_NAME')}}">
    <meta property="og:description" content="Olá! Meu nome é Lilly Almeida, sou uma fotógrafa e tenho uma paixão por capturar a beleza e a personalidade de cada pessoa em minhas fotos.">
    <meta property="og:image" content="https://lillyalmeida.com.br/avatar/254/01HS4QN3XX2C1CGFK6BCFGC3KT.webp">
    <meta property="og:url" content="https://lillyalmeida.com.br/">
    <meta property="og:image:alt" content="Lilly Almeida Fotografia" />

    <meta property="article:author" content="https://www.facebook.com/LillyAlmeida.fotografia/">
    <meta property="article:publisher" content="https://www.facebook.com/LillyAlmeida.fotografia/">

    <meta name="twitter:title" content="{{env('APP_NAME')}}">
    <meta name="twitter:description" content="Olá! Meu nome é Lilly Almeida, sou uma fotógrafa e tenho uma paixão por capturar a beleza e a personalidade de cada pessoa em minhas fotos.">
    <meta name="twitter:url" content="https://lillyalmeida.com.br/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image:alt" content="Lilly Almeida Fotografia">

    {{-- <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "{{url('/')}}",
          "logo": "https://lillyalmeida.com.br/avatar/254/01HS4QN3XX2C1CGFK6BCFGC3KT.webp"
        }
    </script> --}}


    <!-- End Google Tag Manager -->

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="https://lillyalmeida.com.br/avatar/254/01HS4QN3XX2C1CGFK6BCFGC3KT.webp" />



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-sans  antialiased"
    style="background-color: {{ App\Models\Config::first() ? App\Models\Config::first()->body['bgcolor']  : '#fff' }} ">
    {{ $slot }}
</body>



<footer class="bg-white rounded-lg m-4">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">Lilly Almeida Fotografia</a>. All Rights Reserved.
        </span>
    </div>
</footer>

</html>
