<?php
// En artisan se borra el cache de las vistas
// php artisan view:clear
// php artisan cache:clear
?>
<section class="mt-5">
    <article class="col-md-6 col-lg-9 item flex-grow-1 column_content_central mt-5 mt-xl-0">
        <img class="rounded-circle" src="{{ asset('img/foto-curriculum.jpg') }}" alt=""/>
        <h3 class="nombre m0">Javier Cuadros</h3>
        <p class="titulo">Desarrollador de apps a tiempo completo</p>
        <p class="descripcion">En la actualidad realizando proyectos mayormente en Swift, Kotlin y Laravel</p>
        <!-- SECCIÓN DE ICONOS -->
        <section class="social">
            <div class="has-text-centered">
                <!-- ICONO -->
                <a class="boton largo blanco" href="https://www.apple.com/es/app-store/" target="_blank">
                    <i class="fab fa-app-store" aria-hidden="true"></i>
                    <span>App Store</span>
                </a>
                <!-- ICONO -->
                <a class="boton largo blanco" href="https://play.google.com/store?gl=ES" target="_blank">
                    <i class="fab fa-google-play" aria-hidden="true"></i>
                    <span>Google play</span>
                </a>
                <!-- ICONO -->
                <a class="boton largo blanco" href="https://github.com/gabatx" target="_blank">
                    <i class="fab fa-github" aria-hidden="true"></i>
                    <span>Code</span>
                </a>
                <!-- ICONO -->
                <a class="boton largo blanco" href="https://twitter.com/funCody_" target="_blank">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span>Tweets</span>
                </a>
            </div>
        </section>
        <p class="descripcion-inicio">
            Si quieres que trabajemos juntos, aquí puedes
            <a href="{{ url('/contact') }}">comunicarte conmigo</a>
        </p>
    </article>
</section>
