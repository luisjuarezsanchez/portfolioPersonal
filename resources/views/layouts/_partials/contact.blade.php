<div class="container" id="container-contact">
    <div class="row">
        <h1 class="seccion-title bold">Contacto</h1>
        <p class="seccion-body contact-title">Déjame un mensaje y me pondré en contacto contigo lo más pronto posible.
            También puedes consultar mi demás información de contacto en <a href="#container-banner"><span
                    class="bold">Acerca de mí.</span></a>
        </p>
        <div class="col-12 col-lg-9 offset-lg-1">
            </p>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf <!-- Agrega un token CSRF para protección -->
                <div class="mb-3">
                    <label class="form-label label-form bold">Correo electrónico</label>
                    <input required ="email" name="email" type="email" class="form-control input-form"
                        placeholder="Ingresa tu correo electrónico">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label label-form bold">Nombre</label>
                    <input required id="name" name="name" type="text" class="form-control input-form"
                        placeholder="Ingresa tu nombre">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label label-form bold">Asunto</label>
                    <input required id="subject" name="subject" type="text" class="form-control input-form"
                        placeholder="Dime brevemente el motivo de tu mensaje">
                    @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <label class="form-label label-form bold">Mensaje</label>
                <div class="form-floating">
                    <textarea required id="message" name="message" class="form-control input-form"></textarea>
                </div>
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <button type="submit" class="btn btn-primary bold mt-3">Enviar &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path
                            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                    </svg>
                </button>
            </form>

        </div>
    </div>
</div>
