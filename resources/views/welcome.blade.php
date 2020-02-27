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
    </head>
    <body>
        <div id="app">
            <header class="bg-n5_purple_light py-4 flex flex-row px-8 shadow-lg">
                <h1 class="mr-8">
                    <a href="/">
                        <img src="{{ asset('img/9punto5.png') }}" alt="9punto5" height="40" class="h-12">
                    </a>
                </h1>
                <ul class="flex items-center">
                    <li class="mr-4">
                        <a
                            target="_blank"
                            class="nav-link"
                            href="https://podcast.9punto5.cl"
                        >PODCAST</a>
                    </li>
                    <li class="mr-4">
                        <a
                            target="_blank"
                            class="nav-link"
                            href="https://blog.9punto5.cl"
                        >BLOG</a>
                    </li>
                    <li class="mr-4">
                        <a
                            target="_blank"
                            class="nav-link"
                            href="https://2016.9punto5.cl"
                        >2016</a>
                    </li>
                    <li class="mr-4">
                        <a
                            target="_blank"
                            class="nav-link"
                            href="https://2017.9punto5.cl"
                        >2017</a>
                    </li>
                    <li class="mr-4">
                        <a
                            target="_blank"
                            class="nav-link"
                            href="https://2018.9punto5.cl"
                        >2018</a>
                    </li>
                    <li class="">
                        <a target="_blank" class="nav-link" href="https://2019.9punto5.cl"
                        >2019</a>
                    </li>
                </ul>
            </header>
            <div class="flex-1">
                <helloworld />
            </div>
            <footer class="py-8 flex flex-col md:flex-row px-4 md:px-0" style="background: linear-gradient(180deg,#392172 0,#392172 .52%,#352e3b 100%)">
                <div class="w-full md:w-1/2 pr-12 mb-4 md:mb-0">
                    <img src="{{ asset('img/footer.png') }}" />
                </div>
                <div class="w-full md:w-1/2 text-white">
                    <h3 class="text-xl mb-4 text-n5_indigo font-bold">Te esperamos en Valdivia</h3>
                    <p class="w-3/4">
                        9punto5 es un evento e iniciativa sobre cómo debes afrontar el futuro del trabajo. Introducir tecnología a tu negocio, trabajo remoto, manejo de talento y automatización, son las bases para juntarnos cada año en Valdivia.
                    </p>

                    <h4 class="text-n5_pink font-bold my-4">Síguenos en</h4>
                    <ul class="flex flex-row">
                        <li class="mb-6 md:mb-0 mr-6">
                            <a target="_blank" href="https://www.facebook.com/9punto5/">
                                <svg class="fill-white hover:fill-indigo inline-block h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path d="M48 24C48 10.7438 37.2562 0 24 0C10.7438 0 0 10.7438 0 24C0 35.9813 8.775 45.9094 20.25 47.7094V30.9375H14.1562V24H20.25V18.7125C20.25 12.6984 23.8313 9.375 29.3156 9.375C31.9406 9.375 34.6875 9.84375 34.6875 9.84375V15.75H31.6594C28.6781 15.75 27.75 17.6016 27.75 19.5V24H34.4062L33.3422 30.9375H27.75V47.7094C39.225 45.9094 48 35.9813 48 24Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="mb-6 md:mb-0 mr-6">
                            <a target="_blank" href="https://twitter.com/9punto5_">
                                <svg class="fill-white hover:fill-indigo inline-block h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM23.3316 20.338L23.2812 19.5075C23.1301 17.3551 24.4563 15.3891 26.5548 14.6265C27.327 14.3553 28.6364 14.3214 29.4926 14.5587C29.8283 14.6604 30.4663 14.9993 30.9195 15.3044L31.7421 15.8637L32.6486 15.5756C33.1523 15.423 33.8238 15.1688 34.1259 14.9993C34.4113 14.8468 34.6631 14.762 34.6631 14.8129C34.6631 15.101 34.042 16.084 33.5216 16.6263C32.8165 17.389 33.018 17.4568 34.4449 16.9483C35.3011 16.6602 35.3178 16.6602 35.15 16.9822C35.0492 17.1517 34.5288 17.7449 33.9748 18.2872C33.0347 19.2194 32.9844 19.3211 32.9844 20.1007C32.9844 21.304 32.4136 23.8123 31.8428 25.1851C30.7852 27.7612 28.5189 30.422 26.2526 31.7609C23.063 33.6422 18.8157 34.1167 15.24 33.0151C14.0481 32.6422 12 31.6931 12 31.5237C12 31.4728 12.6211 31.405 13.3766 31.3881C14.9546 31.3542 16.5326 30.9135 17.8756 30.1339L18.7822 29.5916L17.7413 29.2357C16.264 28.7272 14.9378 27.5578 14.6021 26.4562C14.5013 26.1003 14.5349 26.0833 15.475 26.0833L16.4487 26.0664L15.6261 25.6766C14.6524 25.1851 13.7627 24.3546 13.3262 23.5072C13.0072 22.8971 12.6044 21.3548 12.7219 21.2362C12.7554 21.1854 13.108 21.287 13.5109 21.4226C14.6692 21.8463 14.8203 21.7446 14.1488 21.0328C12.8897 19.7448 12.5036 17.8296 13.108 16.0162L13.3934 15.2027L14.5013 16.3043C16.7677 18.5245 19.4369 19.8465 22.4922 20.2363L23.3316 20.338Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="mb-6 md:mb-0 mr-6">
                            <a target="_blank" href="https://www.linkedin.com/company/9punto5/">
                                <svg class="fill-white hover:fill-indigo inline-block h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM11.5216 19.8778H16.9605V36.2196H11.5216V19.8778ZM17.3188 14.8227C17.2835 13.2204 16.1377 12 14.277 12C12.4164 12 11.2 13.2204 11.2 14.8227C11.2 16.3918 12.3805 17.6473 14.2064 17.6473H14.2412C16.1377 17.6473 17.3188 16.3918 17.3188 14.8227ZM30.3131 19.4941C33.8922 19.4941 36.5754 21.8303 36.5754 26.8497L36.5752 36.2196H31.1365V27.4767C31.1365 25.2807 30.3494 23.7822 28.3805 23.7822C26.8779 23.7822 25.9829 24.7924 25.5898 25.7682C25.446 26.1178 25.4107 26.605 25.4107 27.0934V36.22H19.9711C19.9711 36.22 20.0428 21.4117 19.9711 19.8783H25.4107V22.1929C26.1325 21.0802 27.4254 19.4941 30.3131 19.4941Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="mb-6 md:mb-0 mr-6">
                            <a target="_blank" href="https://www.youtube.com/channel/UChTbwY8jmyJ6v8FtRf4jx6g">
                                <svg class="fill-white hover:fill-indigo inline-block h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM34.0016 15.7493C35.1031 16.0516 35.9706 16.9422 36.265 18.0732C36.8 20.123 36.8 24.4 36.8 24.4C36.8 24.4 36.8 28.6768 36.265 30.7268C35.9706 31.8578 35.1031 32.7484 34.0016 33.0508C32.0054 33.6 24 33.6 24 33.6C24 33.6 15.9946 33.6 13.9983 33.0508C12.8967 32.7484 12.0292 31.8578 11.7348 30.7268C11.2 28.6768 11.2 24.4 11.2 24.4C11.2 24.4 11.2 20.123 11.7348 18.0732C12.0292 16.9422 12.8967 16.0516 13.9983 15.7493C15.9946 15.2 24 15.2 24 15.2C24 15.2 32.0054 15.2 34.0016 15.7493Z" />
                                    <path d="M21.6001 28.7998V20.7998L28.0001 24.7999L21.6001 28.7998Z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/9punto5_/">
                                <svg class="fill-white hover:fill-indigo inline-block h-12 w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM18.7233 11.2773C20.0886 11.2152 20.5249 11.2 24.0012 11.2H23.9972C27.4746 11.2 27.9092 11.2152 29.2746 11.2773C30.6373 11.3397 31.5679 11.5555 32.384 11.872C33.2266 12.1987 33.9386 12.636 34.6506 13.348C35.3627 14.0595 35.8 14.7736 36.128 15.6155C36.4427 16.4294 36.6587 17.3595 36.7227 18.7222C36.784 20.0876 36.8 20.5238 36.8 24.0001C36.8 27.4764 36.784 27.9116 36.7227 29.277C36.6587 30.6391 36.4427 31.5695 36.128 32.3837C35.8 33.2253 35.3627 33.9394 34.6506 34.6509C33.9394 35.3629 33.2264 35.8013 32.3848 36.1283C31.5703 36.4448 30.6391 36.6605 29.2765 36.7229C27.9111 36.7851 27.4762 36.8003 23.9996 36.8003C20.5236 36.8003 20.0876 36.7851 18.7222 36.7229C17.3598 36.6605 16.4294 36.4448 15.615 36.1283C14.7736 35.8013 14.0595 35.3629 13.3483 34.6509C12.6365 33.9394 12.1992 33.2253 11.872 32.3834C11.5557 31.5695 11.34 30.6394 11.2773 29.2767C11.2155 27.9114 11.2 27.4764 11.2 24.0001C11.2 20.5238 11.216 20.0873 11.2771 18.7219C11.3384 17.3598 11.5544 16.4294 11.8717 15.6152C12.1997 14.7736 12.6371 14.0595 13.3491 13.348C14.0606 12.6363 14.7747 12.1989 15.6166 11.872C16.4305 11.5555 17.3606 11.3397 18.7233 11.2773Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.853 13.5071C23.0759 13.5068 23.3158 13.5069 23.5746 13.507L24.0013 13.5071C27.4189 13.5071 27.824 13.5194 29.1736 13.5807C30.4216 13.6378 31.0989 13.8463 31.5501 14.0215C32.1475 14.2535 32.5733 14.5309 33.0211 14.9789C33.4691 15.4269 33.7464 15.8536 33.979 16.4509C34.1542 16.9016 34.363 17.5789 34.4198 18.8269C34.4811 20.1763 34.4944 20.5816 34.4944 23.9976C34.4944 27.4137 34.4811 27.819 34.4198 29.1684C34.3627 30.4164 34.1542 31.0937 33.979 31.5444C33.747 32.1417 33.4691 32.5671 33.0211 33.0148C32.5731 33.4628 32.1477 33.7402 31.5501 33.9722C31.0995 34.1482 30.4216 34.3562 29.1736 34.4132C27.8242 34.4746 27.4189 34.4879 24.0013 34.4879C20.5834 34.4879 20.1783 34.4746 18.8289 34.4132C17.5809 34.3556 16.9036 34.1471 16.4521 33.9719C15.8548 33.7399 15.4281 33.4625 14.9801 33.0145C14.5321 32.5665 14.2548 32.1409 14.0222 31.5433C13.847 31.0927 13.6382 30.4153 13.5814 29.1673C13.5201 27.818 13.5078 27.4126 13.5078 23.9944C13.5078 20.5763 13.5201 20.1731 13.5814 18.8237C13.6385 17.5757 13.847 16.8984 14.0222 16.4472C14.2542 15.8498 14.5321 15.4232 14.9801 14.9752C15.4281 14.5272 15.8548 14.2498 16.4521 14.0173C16.9033 13.8413 17.5809 13.6333 18.8289 13.5759C20.0097 13.5226 20.4674 13.5066 22.853 13.5039V13.5071ZM30.8339 15.6325C29.9859 15.6325 29.2978 16.3197 29.2978 17.168C29.2978 18.016 29.9859 18.704 30.8339 18.704C31.6819 18.704 32.3699 18.016 32.3699 17.168C32.3699 16.32 31.6819 15.632 30.8339 15.632V15.6325ZM17.4279 24.0006C17.4279 20.3705 20.3709 17.4273 24.001 17.4272C27.6312 17.4272 30.5736 20.3704 30.5736 24.0006C30.5736 27.6308 27.6314 30.5727 24.0013 30.5727C20.3711 30.5727 17.4279 27.6308 17.4279 24.0006Z" />
                                    <path d="M24.0011 19.7334C26.3574 19.7334 28.2678 21.6436 28.2678 24.0001C28.2678 26.3564 26.3574 28.2668 24.0011 28.2668C21.6445 28.2668 19.7344 26.3564 19.7344 24.0001C19.7344 21.6436 21.6445 19.7334 24.0011 19.7334Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
