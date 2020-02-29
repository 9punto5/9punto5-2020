<template>
    <content>
        <div class="bg-n5_purple">
            <div class="container mx-auto py-12 text-white flex flex-row px-8 md:px-0">
                <div class="w-ful px-2">
                    <h2 class="font-bold text-3xl mb-4">¡Gracias por la cuarta versión!</h2>
                    <h3 class="text-2xl mb-8">2019 fue la mejor versión de la conferencia hasta ahora.</h3>

                    <div class="embed-container">
                        <iframe class="embed-iframe" src="https://player.vimeo.com/video/390838158" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>

                    <h4 class="font-bold text-xl md:text-2xl mt-8 mb-4">One more thing</h4>

                    <p class="text-xl md:text-2xl leading-normal mb-4">
                        Hoy <b>el talento</b> es un elemento central en las empresas, y para muchas se está volviendo algo <b>escaso</b>. Lo que significa que tienes ante ti una posibilidad real de <b>desarrollar tu carrera</b> y acceder a <b>nuevas oportunidades de trabajo</b>.
                    </p>

                    <p class="text-xl md:text-2xl leading-normal mb-4">
                        Queremos <b>ayudarte a ser un talento</b> y darte <b>acceso a nuevas posibilidades</b>.
                    </p>

                    <p class="text-xl md:text-2xl leading-normal">
                        Estamos generando vínculos con empresas como Amazon, Evernote, Walmart, Zenta Group y compañías que son parte de MITI que están buscando personas.
                    </p>

                    <p class="text-xl md:text-2xl leading-normal">
                        Estamos generando vínculos con empresas como Amazon, Evernote, Walmart, Zenta Group y compañías que son parte de MITI que están buscando personas.
                    </p>

                    <div class="flex flex-col md:flex-row mt-12">
                        <div class="w-full md:w-1/2 text-left md:text-center mb-8 md:mb-0">
                            <button class="button-pink" onclick="window.location.href='https://welcu.com/9punto5/9punto5-2020'">
                                Tickets versión 2020
                            </button>
                        </div>
                        <div class="w-full md:w-1/2 text-left md:text-center">
                            <button class="button-indigo" onclick="window.location.href='https://vimeo.com/9punto5/videos'">
                                Ver charlas versión 2019
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="container mx-auto py-12 text-white px-8 md:px-0">
                <h4 class="font-bold text-2xl mb-4 text-n5_purple">¿Te gustaría ser sponsor de 9punto5?</h4>

                <p class="text-xl leading-normal text-black mb-4">
                    Desde el 2016, hemos tenido múltiples empresas apoyando nuestra misión a través de auspicios.<br>
                    Sin ellas, sería imposible la realización de esta conferencia.<br><br>
                    9punto se nutre constantemente con estos apoyos y ha creado una comunidad de más de 3.000 personas apoyando el trabajo remoto.
                </p>

                <h4 class="text-n5_pink text-xl font-bold">Algunas marcas que han confiado en 9punto5</h4>

                <ul class="mt-4 mb-6 flex flex-col md:flex-row items-center">
                    <li class="mr-0 md:mr-8">
                        <img :src="this.path + 'img/evernote.png'" alt="Evernote" width="160">
                    </li>
                    <li class="mt-8 md:mt-0 mr-0 md:mr-8">
                        <img :src="this.path + 'img/doist.png'" alt="Doist" width="130">
                    </li>
                    <li class="mt-8 md:mt-0 mr-0 md:mr-8">
                        <img :src="this.path + 'img/google.png'" alt="Google Developers" width="160">
                    </li>
                    <li class="mt-8 md:mt-0 mr-0 md:mr-8">
                        <img :src="this.path + 'img/walmart.png'" alt="Walmart Chile" width="160">
                    </li>
                    <li class="mt-8 md:mt-0 mr-0 md:mr-8">
                        <img :src="this.path + 'img/cornershop.png'" alt="Cornershop" width="160">
                    </li>
                    <li class="mt-8 md:mt-0">
                        <img :src="this.path + 'img/compara.png'" alt="Compara Online" width="160">
                    </li>
                </ul>

                <p class="text-xl leading-normal text-black mb-4">
                    ¿Te gustaría ser un sponsor? Envíanos un mensaje para mostrarte lo que podemos lograr juntos.
                </p>

                <div class="w-full md:w-2/5">
                    <ValidationObserver v-slot="{ invalid }">
                        <form class="flex flex-col" action="">
                            <ValidationProvider name="name" rules="required">
                                <div slot-scope="{ errors }" v-show="!sent">
                                    <input v-model="name" type="text" :class="errors.length > 0 ? 'border-n5_pink' : 'border-black'" placeholder="Nombre" class="input-text mb-2" required>
                                    <p class="pl-4 mb-2 text-n5_pink text-sm">{{ errors[0] }}</p>
                                </div>
                            </ValidationProvider>

                            <ValidationProvider name="email" rules="required|email">
                                <div slot-scope="{ errors }" v-show="!sent">
                                    <input v-model="email" type="text" :class="errors.length > 0 ? 'border-n5_pink' : 'border-black'" placeholder="Email" class="input-text mb-2" required>
                                    <p class="pl-4 mb-2 text-n5_pink text-sm">{{ errors[0] }}</p>
                                </div>
                            </ValidationProvider>

                            <button v-on:click="send" :disabled="invalid || loading || sent" :class="invalid || loading || sent ? 'bg-gray-600 cursor-default' : 'cursor-pointer bg-n5_pink hover:bg-white hover:text-n5_pink'" class="button text-white">
                                {{ sent ? "¡Gracias! Estaremos en contacto pronto 😀" : "Envíanos un mensaje 📨" }}
                            </button>
                        </form>
                    </ValidationObserver>
                </div>
            </div>
        </div>
    </content>
</template>

<script>
    import { ValidationProvider, ValidationObserver, extend } from 'vee-validate'
    import { required, email } from 'vee-validate/dist/rules'
    import axios from 'axios'

    extend('required', {
        ...required,
        message: 'Este campo es requerido para enviarnos un mensaje.',
        computesRequired: true
    });

    extend('email', {
        ...email,
        message: 'El email no es correcto.',
        computesRequired: true
    });

    export default {
        components: {
            ValidationProvider,
            ValidationObserver
        },
        props: ['path'],
        name: 'HelloWorld',
        data: function () {
            return {
                email: null,
                name: null,
                loading: false,
                sent: false
            }
        },
        methods: {
            send: function (event) {
                event.preventDefault();
                this.loading = true

                axios.post('/api/v1/sponsor', {
                  name: this.name,
                  email: this.email
                }).then(() => {
                    this.loading = false
                    this.email = null
                    this.name = null
                    this.sent = true
                })
            }
        }
    }
</script>
