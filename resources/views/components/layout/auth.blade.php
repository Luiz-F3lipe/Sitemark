<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- Fonts do Projeto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">

    {{-- Configurando tailwind --}}
    @vite(['resources/css/app.css'])
</head>

<body class="font-onest bg-background-primary p-5 flex">
    <div class="flex w-full h-[calc(100vh-40px)]">
        <img src="{{ asset('thumbnail.png') }}" class="bg-accent-orange rounded-lg w-1/2" />
        <div class="w-1/2 flex flex-col items-center px-20 my-10">
            <x-icons.logo />
            {{ $slot }}
        </div>
    </div>
</body>

</html>
