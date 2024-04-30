<div class="container container-proyects mb-5" id="container-proyects">
    <div class="row">
        <div class="col-12 mb-4">
            <h3 class="seccion-title"><span class="bold">Proyectos</span></h3>
            <p class="seccion-body">
                Mi portafolio destaca mi experiencia en desarrollo de software con proyectos que reflejan mi compromiso
                con la calidad y la innovación. Estos proyectos demuestran mi capacidad para abordar desafíos complejos
                y ofrecer soluciones efectivas que cumplen con los objetivos del cliente.
            </p>
        </div>
    </div>
    @php
        $proyectos = [
            [
                'imagen' => asset('assets/img/proyects/1.svg'),
                'titulo' => 'SISCOPEV',
                'subtitulo' => 'Sistema de Control de Personal Eventual',
                'tecnologias' => [
                    ['nombre' => 'PHP', 'clase' => 'text-bg-php'],
                    ['nombre' => 'MySQL', 'clase' => 'text-bg-mysql'],
                    ['nombre' => 'Bootstrap', 'clase' => 'text-bg-bootstrap'],
                    ['nombre' => 'CSS', 'clase' => 'text-bg-css'],
                    ['nombre' => 'Javascript', 'clase' => 'text-bg-javascript'],
                    ['nombre' => 'HTML', 'clase' => 'text-bg-html'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                ],
                'descripcion' =>
                    'Participe en el desarrollo de un sistema de nóminas para el personal eventual de la Secretaría de Cultura y turismo, trabaje de manera activa en el Frontend y Backend de la aplicación, la base de datos fue participación primordial dentro del sistema ya que se emplearon procedimientos almacendados, funciones, triggers y vistas.',
                'enlace' => [['default' => 'd-none', 'url' => 'Sitio1']],
            ],
            [
                'imagen' => asset('assets/img/proyects/2.svg'),
                'titulo' => 'OTAEM',
                'subtitulo' => 'Observatorio Turístico del EDOMEX',
                'tecnologias' => [
                    ['nombre' => 'WordPress', 'clase' => 'text-bg-wordpress'],
                    ['nombre' => 'PHP', 'clase' => 'text-bg-php'],
                    ['nombre' => 'Apache', 'clase' => 'text-bg-apache'],
                    ['nombre' => 'Linux', 'clase' => 'text-bg-linux'],
                    ['nombre' => 'HTML', 'clase' => 'text-bg-html'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                    ['nombre' => 'Docker', 'clase' => 'text-bg-docker'],
                ],
                'descripcion' =>
                    'Participe en la cinfiguración del ambiente del proyecto, hice la pertiente configuración del servidor, configure el entorno de la base de datos (la cual se instaló en un contenedor) y la seguridad del servidor en general, se solicitó la instalación de la herramienta Wordpress, asi como la configuración de las versiones adecuadas de PHP.',
                'enlace' => [['default' => '', 'url' => 'https://otaem.edomex.gob.mx/']],
            ],
            [
                'imagen' => asset('assets/img/proyects/3.svg'),
                'titulo' => 'Patriminio cultural EDOMEX',
                'subtitulo' => 'Sistema de acervo para la administración de obras en museos del EDOMEX',
                'tecnologias' => [
                    ['nombre' => 'PHP', 'clase' => 'text-bg-php'],
                    ['nombre' => 'Javascript', 'clase' => 'text-bg-javascript'],
                    ['nombre' => 'MySQL', 'clase' => 'text-bg-mysql'],
                    ['nombre' => 'Bootstrap', 'clase' => 'text-bg-bootstrap'],
                    ['nombre' => 'HTML', 'clase' => 'text-bg-html'],
                    ['nombre' => 'CSS', 'clase' => 'text-bg-css'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                ],
                'descripcion' =>
                    'Mi rol en el  proyecto fue el de refactorizar gran parte del código para que los módulos del sistema volvieran a tener el funcionamiento esperado, se hizo un proceso de migración ETL que salvaguardo la integridad de los datos y permitio añadir funcionalidades de búsqueda al sistema, asi mismo se mejoro el Frontend con el uso de Bootstrap.',
                'enlace' => [['default' => '', 'url' => 'https://patrimoniocultural.edomex.gob.mx/']],
            ],
            [
                'imagen' => asset('assets/img/proyects/4.svg'),
                'titulo' => 'Acervo público del EDOMEX',
                'subtitulo' => 'Página para conocer el acervo cultural del EODMEX',
                'tecnologias' => [
                    ['nombre' => 'MySQL', 'clase' => 'text-bg-mysql'],
                    ['nombre' => 'PHP', 'clase' => 'text-bg-php'],
                    ['nombre' => 'Laravel', 'clase' => 'text-bg-laravel'],
                    ['nombre' => 'Javascript', 'clase' => 'text-bg-javascript'],
                    ['nombre' => 'HTML', 'clase' => 'text-bg-html'],
                    ['nombre' => 'CSS', 'clase' => 'text-bg-css'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                    ['nombre' => 'Docker', 'clase' => 'text-bg-docker'],
                    ['nombre' => 'Bootstrap', 'clase' => 'text-bg-bootstrap'],
                ],
                'descripcion' =>
                    'Para este proyecto se necesitaba hacer la publicación del acervo cultural del EDOMEX, mismo que tenia que ser retratado de manera eficiente para consultas ciudadanas, se configuro una búsqueda en tiempo real, asi como la respectiva generacion de reportes en formato PDF, la configuracion de la base de datos se baso en la creacion de tablas relacionales y vistas.',
                'enlace' => [['default' => '', 'url' => 'https://patrimoniocultural.edomex.gob.mx/acervopublico/']],
            ],
            [
                'imagen' => asset('assets/img/proyects/5.svg'),
                'titulo' => 'Codicé Azul',
                'subtitulo' => 'Sistema de gestión de visitantes en hacienda',
                'tecnologias' => [
                    ['nombre' => 'NextJS', 'clase' => 'text-bg-nextjs'],
                    ['nombre' => 'Typescript', 'clase' => 'text-bg-typescript'],
                    ['nombre' => 'AntDesign', 'clase' => 'text-bg-antdesign'],
                    ['nombre' => 'React', 'clase' => 'text-bg-react'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                    ['nombre' => 'Docker', 'clase' => 'text-bg-docker'],
                    ['nombre' => 'npm', 'clase' => 'text-bg-npm'],
                    ['nombre' => 'GitLab', 'clase' => 'text-bg-gitlab'],
                ],
                'descripcion' =>
                    'En este proyecto desempeñe el rol de Fullstack Developer, ya que interactue con el Frontend y Backend de la aplicación, el proyecto buscaba gestionar de manera eficiente los grupos de visitantes de una hacienda, con varios modulos que permitieran al usuario centralizar el uso de sus espacios, asi como el monitoreo en tiempo real de los visitantes del recinto.',
                'enlace' => [['default' => 'd-none', 'url' => 'Sitio1']],
            ],
            [
                'imagen' => asset('assets/img/proyects/6.svg'),
                'titulo' => 'Sistema inventario',
                'subtitulo' => 'Administración y gestión de recursos de equipo de cómputo',
                'tecnologias' => [
                    ['nombre' => 'MySQL', 'clase' => 'text-bg-mysql'],
                    ['nombre' => 'PHP', 'clase' => 'text-bg-php'],
                    ['nombre' => 'Laravel', 'clase' => 'text-bg-laravel'],
                    ['nombre' => 'CSS', 'clase' => 'text-bg-css'],
                    ['nombre' => 'Javascript', 'clase' => 'text-bg-javascript'],
                    ['nombre' => 'HTML', 'clase' => 'text-bg-html'],
                    ['nombre' => 'Git', 'clase' => 'text-bg-git'],
                ],
                'descripcion' =>
                    'Creación de sistema de inventario de equipo de computó para el Departamento de Tecnologías de la Informacion de la Secretaría de Cultura y Turismo, el sistema contiene la información de los trabajadores asi como los números de serie y observaciones de los componentes, aparte de un módulo que permite generar reportes con la información simplificada.',
                'enlace' => [['default' => 'd-none', 'url' => 'Sitio1']],
            ],
        ];
    @endphp

    <div class="row" id="proyectos-container">
        @foreach ($proyectos as $index => $proyecto)
            <div class="col-12 col-lg-3">
                <div class="card card-academic shadow-sm mx-1 mb-5 mb-lg-0" style="transition: transform 0.2s;">
                    <img onclick="openModal(this)" src="{{ $proyecto['imagen'] }}" class="card-img-top img-card">
                    <div class="card-body">
                        @foreach ($proyecto['tecnologias'] as $tecnologia)
                            <span class="badge {{ $tecnologia['clase'] }} mx-1 mb-1">{{ $tecnologia['nombre'] }}</span>
                        @endforeach
                        <h5 class="card-title title-card mt-2">{{ $proyecto['titulo'] }}</h5>
                        <hr style="color: white">
                        <p class="card-text text-card">{{ $proyecto['subtitulo'] }}</p>
                        <button type="button" class="btn btn-primary px-2 py-1"
                            onclick="openModalDescription('{{ $proyecto['titulo'] }}','{{ $proyecto['subtitulo'] }}', '{{ $proyecto['imagen'] }}','{{ $proyecto['descripcion'] }}')">
                            Ver más
                        </button>
                        @foreach ($proyecto['enlace'] as $enlace)
                            <a target="_blank" href="{{ $enlace['url'] }}">
                                <button class="btn btn-primary py-1 px-2 {{ $enlace['default'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20"
                                        height="20">
                                        <path
                                            d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z">
                                        </path>
                                    </svg>
                                </button>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Modal -->
        <div class="modal" id="proyectsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title bold" id="titleModal">Título del Modal</h5>
                    </div>
                    <div class="modal-body">
                        <h5 id="subtitleModal"></h5>
                        <img id="imgModal" class="img-fluid mb-3 mt-3" src="{{ asset('assets/img/proyects/1.svg') }}"
                            alt="">
                        <p id="bodyModal">Cuerpo modal</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                            onclick="closeModalDescription()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
