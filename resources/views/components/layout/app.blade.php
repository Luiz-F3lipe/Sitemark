<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet" />

    {{-- Tailwind --}}
    @vite(['resources/css/app.css'])

    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body class="font-onest bg-background-primary text-white min-h-screen flex flex-col items-center p-5">

    <!-- Logo no topo -->
    <header class="w-full flex justify-center mb-4">
        <x-icons.logo class="w-40 h-auto" />
    </header>

    <!-- Conteúdo principal -->
    <main class="flex-1 w-full max-w-4xl px-4">
        {{ $slot }}
    </main>

    <!-- Bottom Sheet fixo -->
    <x-footbar />
</body>

</html>
