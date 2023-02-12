<section class="content_general_centra">
    <h1 class="h3 titulo_apps">Proyectos</h1>
    <p class="parrafo-intro">
        En esta sección se presentan los proyectos en los que he participado, donde se pueden encontrar detalles sobre
        las funcionalidades y características de cada aplicación o complemento, así como imágenes de pantalla y enlaces
        a repositorios o tiendas en caso de estar disponibles. Cada proyecto es un testimonio de mi experiencia y
        habilidades en el desarrollo de aplicaciones móviles nativas.
    </p>
</section>

<!-- TODAS LAS APPS  -->
<section class="row content_general">

    @foreach($projects as $project)
        <!-- PROJECT  -->
        <article class="col-lg-6 mb-sm-5">
            <a href="{{ url('/project/' . $project->id) }}" class="enlace-app">
                <div class="card bg-body resalta">
                    <div class="row no-gutters justify-content-center align-items-center">
                        <div class="col-3 col-sm-3 col-md-2 col-lg-3">
                            <img class="card-img" src="{{ asset('storage') . '/' . $project->cover_image }}"
                                 alt="Suresh Dasari Card">
                        </div>
                        <div class="col-9 col-sm-9 col-md-10 col-lg-9">
                            <div class="card-body">
                                <h5 class="card-title mb-0 mb-md-1"> {{ $project->title }} </h5>
                                <p class="card-text mb-0 mb-md-1"> {{ $project->subtitle }}</p>
                                @foreach($project->tags as $tag)
                                    <span class="badge {{ $tag->color }}">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </article>
        <!-- END PROJECT  -->


    @endforeach


</section>
