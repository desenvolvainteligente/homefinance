<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
        @livewireStyles
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">


        <header>
            <div>
                LOGO
            </div>
            <div>
                Area de pesquisa
            </div>
            <div class="menu">
                <ul class="menu-lista">
                    <li>icon</li>
                    <li>Icon</li>
                </ul>
            </div>
        </header>
        <section>
            <div class="card">
                <span class="logo-card">Logo do cartão</span>
                <h1 class="cabecalho-card">Faturamento</h1>
                <p class="text-card">R$ <span id="valor-faturamento"></span></p>
                <div class="rodape-card"><span id="porcentagem-faturamento"></span></div>
            </div>
            <div class="card">
                <span class="logo-card">Logo do cartão</span>
                <h1 class="cabecalho-card">Meta</h1>
                <p class="text-card">% <span id="meta"></span></p>
                <div class="rodape-card"><span id="porcentagem-meta"></span></div>
            </div>
            <div class="card">
                <span class="logo-card">Logo do cartão</span>
                <h1 class="cabecalho-card">Ticket Médio</h1>
                <p class="text-card">R$ <span id="valor-media"></span></p>
                <div class="rodape-card"><span id="porcentagem-media"></span></div>
            </div>
        </section>
        <footer>

        </footer>
        @livewireScripts
    </body>
</html>
