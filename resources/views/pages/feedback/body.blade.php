<section class="row ">

    <article class="text-center">
        <div class="imagen-proyecto">
            <img src="{{ asset('../img/proyectos/conversor/icon-1.png') }}" alt="imagen-proyecto">
        </div>
        <h1 class="titulo-proyecto h2 mt-4 text-secondary">Conversor</h1>
        <h2 class="subtitulo-proyecto h2 mt-4 mb-4">Aporta tu opinión sobre la app conversor</h2>
        <p class="feeback">Para mi tiene mucho valor el feedback que me puedas aportar 🙌</p>
    </article>

    <!-- FORMULARIO -->
    <article class="offset-lg-3 col-lg-6 offset-lg-3">
        <form action="" class="needs-validation" enctype="multipart/form-data" novalidate>
            <div class="form-group">
                <div class="mb-3">
                    <label for="idTextArea" class="form-label">Mensaje*</label>
                    <textarea class="form-control" id="idTextArea" rows="3" name="mensaje" required></textarea>
                    <div class="valid-feedback">
                        ¡Escribe lo que necesites transmitir!
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="idInputEmail" class="form-label">Email*</label>
                    <input type="email" class="form-control p-3" id="idInputEmail" placeholder="nombre@ejemplo.com" name="email" required>
                    <div class="valid-feedback">
                        ¡Bien hecho!
                    </div>
                </div>

                <div class="form-group">
                    <label for="idArchivosAdjuntos" class="form-label mt-4">Archivos adjuntos:</label>
                    <input class="form-control" type="file" id="idArchivosAdjuntos" name="archivos_adjuntos">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary boton-feeback">Enviar feeback</button>
                </div>
            </div>
        </form>
    </article>

</section>
