
<section class="row justify-content-center">
    <article class="text-center mt-5">
        <div class="imagen-proyecto">
            <img src="{{ asset('storage') . '/' . $project->cover_image }}" alt="imagen-proyecto">
        </div>
        <h1 class="titulo-proyecto h2 mt-4">{{ $project->title }}</h1>
        <h2 class="subtitulo-proyecto h5">{{ $project->subtitle }}</h2>
        <div class="mt-5 mb-5 imagen-plataforma">
            <a href="https://www.apple.com/es/app-store/" target="_blank">
                <img src="{{ asset('../img/google-play.svg') }}" alt="App Store">
            </a>
        </div>
        <a href="{{ $project->url_repo }}" target="_blank" class="repository">Repositorio <i class="fab fa-github"></i></a>
    </article>

    <article class="row mt-5">
        <article class="offset-lg-2 col-lg-8 offset-lg-2">
               <?php echo $project->description ?>
        </article>
    </article>
</section>

<!-- CAPTURAS DE PANTALLA  -->
<section class="row justify-content-center mt-5 mb-3">
    @foreach($project->images as $image)
        <article class="col-md-4 content_captura_proyecto mb-3">
            <img src="{{ asset('storage') . '/' . $image }}" alt="">
        </article>
    @endforeach
</section>
