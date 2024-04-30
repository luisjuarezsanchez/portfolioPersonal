<div class="container container-academic mb-5" id="container-academic">
    <div class="row">
        <div class="col-12 mb-4">
            <h3 class="seccion-title"><span class="bold">Educacion y recursos de aprendizaje</span></h3>
            <p class="seccion-body">Soy Ingeniero en Tecnologías de la Información y he ampliado mis conocimientos a
                través de cursos y certificaciones especializados. Esta combinación de formación académica y aprendizaje continuo me ha equipado con una
                sólida base de habilidades y conocimientos, permitiéndome abordar desafíos y oportunidades en la
                ingeniería con creatividad y eficacia.</p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-center">
                <button class="btn btn-primary btn-academic mx-1 mb-2 active" data-filter="formaciones">Formaciones</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="dataBase">Base de datos</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="backend">Backend</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="frontend">Frontend</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="herramientas">Herramientas</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="softSkills">Soft skills</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="redes">Redes</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="cloud">Cloud</button>
                <button class="btn btn-primary btn-academic mx-1 mb-2" data-filter="otros">Otros</button>
            </div>
        </div>
    </div>
    <div class="row" id="tarjetas-container">
        @foreach ($cardAcademic as $tarjeta)
            <div class="col-12 col-lg-3 tarjeta {{ $tarjeta['categoria'] }}">
                <div class="card card-academic shadow-sm mb-3 mx-1" style="transition: transform 0.2s;">
                    <img onclick="openModal(this)" src="{{ asset('assets/img/cards/' . $tarjeta['imagen']) }}"
                        class="card-img-top img-card">
                    <div class="card-body">
                        <h5 class="card-title title-card">{{ $tarjeta['nombre'] }}</h5>
                        <hr style="color: white">
                        <p class="card-text text-card">{{ $tarjeta['texto'] }}</p>
                        <a target="_blank" href="{{ $tarjeta['urlSello'] }}"><button
                                class="btn btn-primary">{{ $tarjeta['button'] }}</button></a>

                    </div>
                </div>
            </div>
        @endforeach

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImg">
        </div>
    </div>
</div>
