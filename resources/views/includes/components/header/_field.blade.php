</head>
<body class="container">
<!-- HEADER: Navbar -->
<header class="container longitud-cabecera">
    <nav class="navbar navbar-expand-lg navbar-dark bg-body">
        <div class="content_logo_inicio">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/infinity_icon.svg') }}" alt="logo" class="logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/projects') }}">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/repositories') }}">Repos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/about-me') }}">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ url('/contact') }}">Contacto</a>
                </li>
                @if(isset($admin))
                    @if($admin)
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ url('/logout') }}">Logout</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>
</header>
<!-- El main solo mostrará una imagen y textos de presentación -->
<main class="presentacion row justify-content-center align-items-center elimina-padding content_general_centra">
