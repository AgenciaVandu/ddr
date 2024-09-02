@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    @vite(['resources/sass/app.scss', 'resources/sass/index.scss', 'resources/js/app.js'])

@endpush
<x-layouts.guest>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 datos-duros">
                    <h1>MÁS DE 15 AÑOS DE EXPERIENCIA A SU SERVICIO</h1>
                    <p class="descripcion">DDR S.A. DE C.V. es una empresa fundada en la ciudad de Mérida, Yucatán en Marzo del 2008.  Nuestra experiencia en desarrollo de proyectos incluye: Diseño y construcción de casa habitación unifamiliar, Diseño y construcción de casa habitación multifamiliar (flat, dúplex y loft), Mantenimiento de casa habitación y edificios corporativos, Construcción de baños ecológicos en comunidades rurales,
                        Construcción, re acondicionamiento y mantenimiento de escuelas; así como proyectos de infraestructura de seguridad.</p>
                    <div>
                        <button class="btn btn-primary">Contactar ahora</button>
                    </div>
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
                    <h2>CONSTRUYENDO VALOR <br> DESDE EL AÑO 2008.</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 info">
                    <p class="parrafo_info">Trabajamos en apego a nuestra identidad y filosofía empresarial.</p>
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
                                <h4>MISIÓN.</h4>
                                <p class="descripcion">Ejecutar cada proyecto en tiempo, forma y con la calidad esperada por nuestros clientes, para ser en todo momento acreedores de su confianza y referencia. Para ello creemos en mantener siempre equipos de trabajo comprometidos, con buena actitud y una adecuada cultura del servicio y la atención. </p>
                            </div>
                        </div>
                        <div class="work">
                            <img src="{{ asset('img/edificio.svg') }}" width="40" alt="">
                            <div class="work__info">
                                <h4>VISIÓN.</h4>
                                <p class="descripcion">Ser el socio ideal de nuestros clientes para el desarrollo de sus proyectos de construcción e infraestructura, reconocida por su buen trabajo, respaldo de sus socios, colaboradores y aliados; que busca siempre la innovación en sus procesos para mantener finanzas sanas y una buena rentabilidad. </p>
                            </div>
                        </div>
                        <x-cta />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="obracivil">
        <div class="container-fluid">
            <h2 class="pt-4">Algunos proyectos desarrollados de manera exitosa</h2>
        </div>
        <div class="obra__civil">
            <div class="elemento3">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        Yucatan <br> Tropical Property
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Diseño y construcción “llave en mano” de complejo habitacional y turístico de más e 2,000  mts2
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        construcción de <br> edificio multifamiliar
                    </x-slot>

                    <x-slot name="lugarobra">
                        Motul, Yucatán
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento2">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        Junta de Agua Potable y Alcantarillado de Yucatán
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Construcción de 180 sanitarios rurales, incluyendo instalaciones sanitarias, hidráulicas y eléctricas, en diversas localidades del Estado de Yucatán.
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        Construcción de sanitarios rurales
                    </x-slot>

                    <x-slot name="lugarobra">
                        Yucatán, méxico
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento1">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        IDEFEY
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Rehabilitación de aulas, incluyendo paredes, techos, pisos, accesos para discapacitados, instalaciones eléctricas y de aire acondicionado.
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        Mejoramiento de escuela primaria.
                    </x-slot>
                    <x-slot name="lugarobra">
                        Chelem, Yucatán
                    </x-slot>
                </x-obraprivada>
            </div>
            <div class="elemento2">
                <x-obraprivada>
                    <x-slot name="obracivil">
                        Ayuntamiento <br> de Mérida
                    </x-slot>
                    <x-slot name="obracivildescripcion">
                        Demolición de baños anteriores, reconstrucción y rehabilitación de baños, incluyendo obra civil, instalaciones sanitarias, hidráulicas y eléctricas.
                    </x-slot>
                    <x-slot name="tipodeproyecto">
                        Remodelación de baños en Mercados Municipales ubicados en diversas localidades
                    </x-slot>

                    <x-slot name="lugarobra">
                        mérida, México
                    </x-slot>
                </x-obraprivada>
            </div>


        </div>
        <button aria-label="anterior" class="carrusel__anterioruno">
            < </button>
                <button aria-label="siguiente" class="carrusel__siguienteuno">
                    >
                </button>

                <div class="ornament d-none d-sm-none d-md-none d-lg-block">
                    <img src="{{asset('img/Ornament.png')}}" width="200" alt="">
                </div>
    </section>

    <section class="obrapublica">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto pb-5">
                    <div class="contenido">
                        <h2> PROYECTOS DE <br> INFRAESTRUCTURA</h2>
                        <p>De igual manera hemos desarrollado diversos proyectos de infraestructura de voz y datos, audio y video.</p>
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
                                    Desarrollo de Ingeniería y Construcción de infraestructura para soportar y operar el sistema de Video Vigilancia y Control de Acceso.

                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>CENTRO INTERNACIONAL DE CONGRESOS</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán, México
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Canalización ductería eléctrica, voz y datos para el edificio de la LITOTECA NACIONAL ubicado en el Parque Científico y Tecnológico de Yucatán
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Litoteca Nacional</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Yucatán
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Instalación de ductería y nodos para red de voz y datos, audio y video; instalación de circuitos eléctricos, certificación de la red.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>PEMEX</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Paraíso, Tabasco
                                </x-slot>
                            </x-obra>
                        </div>
                        <div class="obra">
                            <x-obra>
                                <x-slot name="descripcionobra">
                                    Suministro e instalación de cableado estructurado en el edificio, centro de datos y sitios.
                                </x-slot>
                                <x-slot name="tituloobra">
                                    <b>Instituto Tecnológico Superior de Comalcalco.</b>
                                </x-slot>
                                <x-slot name="cityobra">
                                    Comalcalco, Tabasco
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
                        <p><a href="https://maps.app.goo.gl/Cc2HYr14wFx2TsoN8">Calle 43 # 203 entre 48 y 50, <br> Col Benito Juárez Norte, CP 97119. Mérida, Yucatán</a></p>
                    </div>
                    <div class="elemento">
                        <h5>Email</h5>
                        <p><a href="mailto:proyectos@ddrproyectos.mx">proyectos@ddrproyectos.mx</a></p>
                    </div>
                    <div class="elemento">
                        <h5>Phone</h5>
                        <p><a href="tel:9999213228">+52 (999) 921 32 28</a></p>
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
                {{-- <div class="col-lg-6 col-md-12 col-sm-12">
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
                </div> --}}
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
