@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    @vite(['resources/sass/app.scss', 'resources/sass/index.scss', 'resources/js/app.js'])

@endpush
<x-layouts.guest>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 datos-duros">
                    <h1>Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus natus totam sed hic
                        repudiandae
                        minima omnis architecto. Esse iusto quas molestias qui dignissimos hic numquam! Perspiciatis
                        esse
                        repudiandae soluta natus?</p>
                    <button class="btn btn-primary">Contactar ahora</button>
                    <div class="cv">
                        <div class="bullet">
                            <h2>16</h2>
                            <span>Años de experiencia</span>
                        </div>
                        <div class="bullet">
                            <h2>10,000+</h2>
                            <span>Horas de trabajo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ asset('img/Image.png') }}" class="img-fluid" alt="Imagen ingeniero">
                </div>
            </div>
        </div>
    </header>
    <section class="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2>Construyendo el futuro desde el año 2008.</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eligendi sed a et dolor nesciunt
                        error est molestiae similique recusandae earum, temporibus iure expedita veritatis reiciendis,
                        ullam sit qui libero.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ asset('img/nosotroos.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 bullets">
                    <div class="bullets__info">
                        <div class="work">
                            <img src="{{ asset('img/grua.svg') }}" width="40" alt="">
                            <div class="work__info">
                                <h4>Lorem, ipsum dolor.</h4>
                                <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    quidem ratione quasi
                                    odit aperiam libero.</p>
                            </div>
                        </div>
                        <div class="work">
                            <img src="{{ asset('img/edificio.svg') }}" width="40" alt="">
                            <div class="work__info">
                                <h4>Lorem, ipsum dolor.</h4>
                                <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    quidem ratione quasi
                                    odit aperiam libero.</p>
                            </div>
                        </div>
                        <x-cta />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="obracivil">
        <div class="container">
            <h2 class="pt-4">Lorem ipsum dolor sit amet.</h2>
        </div>
        <div class="obra__civil">
            <div class="elemento1">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        PEMEX
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quisquam cupiditate
                        adipisci voluptas omnis sequi nulla quis ad, non quam?
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        CONSTRUCCIÓN
                    </x-slot>
                    <x-slot name="duracion">
                        X MESES
                    </x-slot>
                    <x-slot name="lugarobra">
                        AGUASCALIENTES
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento2">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        PEMEX
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quisquam cupiditate
                        adipisci voluptas omnis sequi nulla quis ad, non quam?
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        CONSTRUCCIÓN
                    </x-slot>
                    <x-slot name="duracion">
                        X MESES
                    </x-slot>
                    <x-slot name="lugarobra">
                        AGUASCALIENTES
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento3">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        PEMEX
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quisquam cupiditate
                        adipisci voluptas omnis sequi nulla quis ad, non quam?
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        CONSTRUCCIÓN
                    </x-slot>
                    <x-slot name="duracion">
                        X MESES
                    </x-slot>
                    <x-slot name="lugarobra">
                        AGUASCALIENTES
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento4">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        PEMEX
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos quisquam cupiditate
                        adipisci voluptas omnis sequi nulla quis ad, non quam?
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        CONSTRUCCIÓN
                    </x-slot>
                    <x-slot name="duracion">
                        X MESES
                    </x-slot>
                    <x-slot name="lugarobra">
                        AGUASCALIENTES
                    </x-slot>
                </x-obraprivada>
            </div>
        </div>
        <button aria-label="anterior" class="carrusel__anterioruno">
            < </button>
                <button aria-label="siguiente" class="carrusel__siguienteuno">
                    >
                </button>

                <div class="ornament">
                    <img src="{{asset('img/Ornament.png')}}" width="200" alt="">
                </div>
    </section>

    <section class="obrapublica">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto pb-5">
                    <div class="contenido">
                        <h2>Lorem ipsum <br>dolor sit.</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam et numquam sed maiores
                            eligendi
                            consequatur!</p>
                        <div class="cta">
                            <x-cta />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 flechas">
                    <div class="carrusel-track">
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Construcción de 80 sanitarios rurales, de 2.05 x 2.20 metros, incluye fosa de
                                    absorción
                                    de 1.8 y 1.00mts de mampostería, tanque séptico biodigestor auto impermeable de
                                    600lts y
                                    tinaco de 450 litros para almacenamiento de agua potable. Así como muebles de baño,
                                    registros, alimentación hidráulica y sanitaria en la localidad de Sihó.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Halachó</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Construcción de 80 sanitarios rurales, de 2.05 x 2.20 metros, incluye fosa de
                                    absorción
                                    de 1.8 y 1.00mts de mampostería, tanque séptico biodigestor auto impermeable de
                                    600lts y
                                    tinaco de 450 litros para almacenamiento de agua potable. Así como muebles de baño,
                                    registros, alimentación hidráulica y sanitaria en la localidad de Sihó.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Halachó</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Construcción de 80 sanitarios rurales, de 2.05 x 2.20 metros, incluye fosa de
                                    absorción
                                    de 1.8 y 1.00mts de mampostería, tanque séptico biodigestor auto impermeable de
                                    600lts y
                                    tinaco de 450 litros para almacenamiento de agua potable. Así como muebles de baño,
                                    registros, alimentación hidráulica y sanitaria en la localidad de Sihó.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Halachó</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Construcción de 80 sanitarios rurales, de 2.05 x 2.20 metros, incluye fosa de
                                    absorción
                                    de 1.8 y 1.00mts de mampostería, tanque séptico biodigestor auto impermeable de
                                    600lts y
                                    tinaco de 450 litros para almacenamiento de agua potable. Así como muebles de baño,
                                    registros, alimentación hidráulica y sanitaria en la localidad de Sihó.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Halachó</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán
                                </x-slot>
                            </x-obra>
                        </div>
                    </div>

                    <button aria-label="anterior" class="carrusel__anterior">
                        <
                    </button>
                    <button aria-label="siguiente" class="carrusel__siguiente">
                        >
                    </button>


                </div>
            </div>



        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                    <div class="elemento">
                        <h5>Dirección</h5>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel?</small>
                    </div>
                    <div class="elemento">
                        <h5>Email</h5>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel?</small>
                    </div>
                    <div class="elemento">
                        <h5>Phone</h5>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vel?</small>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 formulario">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="nombredelaempresa@empresa.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                    <button class="btn btn-primary">Enviar mensaje</button>
                </div>
            </div>
        </div>
    </section>
    <section class="footernav">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2>DDR PROYECTOS</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="navbar-nav  ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proyectos de obra civil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Proyectos de obra privada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copyright">
                DDR PROYECTOS © TODOS LOS DERECHOS RESERVADOS
            </div>
        </div>
    </section>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
        <script src="{{ asset('js/carrusel.js') }}"></script>
        <script src="{{ asset('js/carruselpublica.js') }}"></script>
    @endpush
</x-layouts.guest>
