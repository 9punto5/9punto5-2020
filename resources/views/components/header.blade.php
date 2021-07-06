<header class="bg-n5_purple_lighter py-4 px-8 shadow-lg">
    <div class="container mx-auto flex flex-col md:flex-row justify-between">

        <div class="flex flex-col md:flex-row mb-8 md:mb-0">
            <h1 class="mr-0 md:mr-8 flex justify-center">
                <a href="/">
                    <img src="{{ asset('img/9punto5.png') }}" alt="9punto5" height="40" class="h-12">
                </a>
            </h1>
            <ul class="flex flex-col md:flex-row items-center mt-6 md:mt-0">
                <li class="mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="#services"
                    >SERVICIOS</a>
                </li>
                <li class="mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="https://webinar.9punto5.cl/"
                    >WEBINAR</a>
                </li>
                <li class="mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        class="nav-link"
                        href="#knowledge_base"
                    >KNOWLEDGE BASE</a>
                </li>
                <li class="hidden md:block md:mr-0 md:mr-4 mb-4 md:mb-0">
                    <dropdown width="150px">
                        <template v-slot:trigger>
                            <a
                                class="nav-link"
                                href="#"
                            >CONFERENCIA</a>
                        </template>

                        <ul class="flex flex-col">
                            <li class="mb-4">
                                <a @click="isOpen = false" class="nav-link" href="https://2016.9punto5.cl" target="_blank">EDICIÓN 2016</a>
                            </li>
                            <li class="mb-4">
                                <a @click="isOpen = false" class="nav-link" href="https://2017.9punto5.cl" target="_blank">EDICIÓN 2017</a>
                            </li>
                            <li class="mb-4">
                                <a @click="isOpen = false" class="nav-link" href="https://2018.9punto5.cl" target="_blank">EDICIÓN 2018</a>
                            </li>
                            <li class="mb-4">
                                <a @click="isOpen = false" class="nav-link" href="https://2019.9punto5.cl" target="_blank">EDICIÓN 2019</a>
                            </li>
                            <li class="mb-4">
                                <a @click="isOpen = false" class="nav-link" href="https://2020.conferencia.cl/" target="_blank">EDICIÓN 2020</a>
                            </li>
                            <li>
                                <a @click="isOpen = false" class="nav-link" href="https://www.conferencia.cl/" target="_blank">ONLINE 2021</a>
                            </li>
                        </ul>
                    </dropdown>
                </li>

                <li class="md:hidden mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="https://2016.9punto5.cl"
                    >EDICIÓN 2016</a>
                </li>
                <li class="md:hidden mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="https://2017.9punto5.cl"
                    >EDICIÓN 2017</a>
                </li>
                <li class="md:hidden mr-0 md:mr-4 mb-4 md:mb-0">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="https://2018.9punto5.cl"
                    >EDICIÓN 2018</a>
                </li>
                <li class="md:hidden mr-0 md:mr-4 mb-4 md:mb-0">
                    <a target="_blank" class="nav-link" href="https://2019.9punto5.cl"
                    >EDICIÓN 2019</a>
                </li>
                <li class="md:hidden mr-0 md:mr-4 mb-4 md:mb-0">
                    <a target="_blank" class="nav-link" href="https://www.conferencia.cl"
                    >ONLINE 2020</a>
                </li>
                <li class="">
                    <a
                        target="_blank"
                        class="nav-link"
                        href="https://podcast.9punto5.cl"
                    >PODCAST</a>
                </li>
            </ul>
        </div>

        <div class="mx-auto md:mx-0">
            <a class="block text-center button button-pink w-48" href="https://conferencia.cl/sponsorship-interest">HABLEMOS</a>
        </div>


    </div>

</header>
