<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <meta property="og:url" content="https://www.9punto5.cl/" />
        <meta property="og:site_name" content="9punto5 - Expande tus habilidades digitales" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Inicio - 9punto5 - Expande tus habilidades digitales" />
        <meta name="twitter:site" content="@9punto5_" />
        <meta name="twitter:creator" content="@9punto5_" />

        <meta name="description" content="9punto5 es el principal referente en Latinoamérica para la promoción y la fácil estimulación de nueva culturas de trabajo." />
        <meta name="author" content="9punto5">

        <meta name="keywords" content="remote work, Valdivia, Chile, trabajo remoto, 9punto5, talento, conferencia" />
        <title>9punto5 - Expande tus habilidades digitales</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">

        @if (config('app.env') === 'production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71935191-4"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-71935191-4');
            </script>
        @endif
    </head>
    <body>
        <div id="app">
            <div>
                <x-header></x-header>
            </div>
            <div class="flex-1">

                <!-- Hero -->
                <div class="bg-n5_purple_dark pb-16">
                    <div class="container mx-auto px-8 md:px-0 text-left">
                        <div class="h-16 md:h-32"></div>
                        <h2 class="mb-2 font-bold text-white text-5xl leading-tight">
                            Ayudamos a personas y a empresas <br><span class="text-n5_pink">a trabajar mejor</span>
                        </h2>
                        <h4 class="text-white font-bold text-xl">
                            Desarrolla tus habilidades para el <span class="text-n5_indigo">futuro del trabajo</span>
                        </h4>
                        <div class="h-24"></div>
                        <div class="flex justify-end">
                            <div class="w-full md:w-1/3 bg-n5_pink py-3 text-white font-bold text-left md:text-center px-4 md:px-0">
                                <p>ANUNCIO: Regístrate a nuestro próximo
                                    <a class="underline text-n5_indigo" target="_blank" href="https://webinar.9punto5.cl/">webinar</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <blog />
                </div>

                <div id="knowledge_base">
                    <x-knowledge_base></x-knowledge_base>
                </div>

                <div id="newsletter">
                    <x-newsletter></x-newsletter>
                </div>

                <div id="services">
                    <x-services></x-services>
                </div>

                <div>
                    <x-conference></x-conference>
                </div>
            </div>

            <div id="footer">
                <x-footer></x-footer>
            </div>


        </div>
    </body>
</html>
