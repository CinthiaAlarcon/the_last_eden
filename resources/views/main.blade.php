<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Last Eden - Inicio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Trouble&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sans-serif&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="icon" href="imagenes/icon-16x16.png" type="image/png">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="manifest" href="/manifest.json">
   
   <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,es,fr,de,it'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
      .then(function(registration) {
        console.log('Service Worker registrado con éxito:', registration);
      })
      .catch(function(error) {
        console.log('Error al registrar el Service Worker:', error);
      });
  }
</script>



</head>
<body class="bg-light text-dark">



<section id="hero" class="position-relative text-white d-flex align-items-center" style="min-height: 100vh; background: url('imagenes/Back-hero.png') center/cover no-repeat; font-family: 'Playfair Display', serif;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100" style="top: 0;">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand ms-3" href="#">
            <img src="imagenes/logo.png" alt="Logo The Last Eden" style="height: 50px;">
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-dark mx-2 btn-nav" href="#historia">Historia</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark mx-2 btn-nav" href="#gameplay">Gameplay</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark mx-2 btn-nav" href="#sobre-nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark mx-2 btn-nav" href="#propuesta-valor">Propuesta de Valor</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark mx-2 btn-nav" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- Google Translate -->
        <div id="google_translate_element" class="ms-3"></div>
    </div>
</nav>
    <!-- Título en el Hero -->
    <div class="container position-absolute text-center text-lg-end" style="top: 50%; right: 10%; transform: translateY(-50%);">
        <h1 class="fw-bold responsive-title">The Last Eden</h1>
    </div>

    <!-- Shape divider -->
    <div class="custom-shape-divider-bottom-1648424872 color2">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.29C205.75,85.33,82.07,86.43,0,79.58V0H1200V86.36c-71.88-6.56-136.13-20.22-197.15-26.19C859.12,45.29,696.2,79.33,516.33,84.35,453.67,86.42,385.37,68.28,321.39,56.29Z" class="shape-fill-2"></path>
        </svg>
    </div>
</section>

<style>
/* Responsividad para el título */
.responsive-title {
    font-size: 4rem; /* Tamaño base */
}

/* Ajustes según los tamaños de pantalla */
@media (max-width: 992px) {
    .responsive-title {
        font-size: 3rem; /* Tamaño para tablets y pantallas medianas */
    }
}

@media (max-width: 768px) {
    .responsive-title {
        font-size: 2.5rem; /* Tamaño para móviles grandes */
        text-align: center; /* Centra el texto en pantallas pequeñas */
    }
}

@media (max-width: 576px) {
    .responsive-title {
        font-size: 2rem; /* Tamaño para móviles pequeños */
    }
}
</style>




    <!-- Sección Historia -->
    <section id="historia" class="py-5 position-relative backblack">
        <div class="container backblack">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <h2 class="display-5 text-primary-white">La Historia de The Last Eden</h2>
                    <p class="text-green">En un futuro distópico cercano, el cambio climático ha devastado gran parte del planeta, provocando olas de calor extremas, colapsos ecológicos, y la destrucción de grandes ciudades. Los recursos naturales están al borde del agotamiento, y la humanidad ha sido obligada a refugiarse en pequeños enclaves que ofrecen protección limitada.</p>
                    <p class="text-green">El protagonista es Rafael Montiel, un ingeniero agrónomo que dedicó su vida a la investigación de técnicas de cultivo sostenible. Tras la aparición de una serie de olas de calor masivas y la falta de apoyo gubernamental a proyectos ecológicos, la sociedad se fragmentó, y Rafael se vio separado de su esposa e hija, quienes lograron refugiarse en un búnker llamado "Eden-12".</p>
                    <p class="text-green">Rafael ahora está en busca de su familia, recorriendo las ruinas de lo que alguna vez fue una próspera civilización. Sin embargo, las amenazas que enfrenta no solo son ambientales, sino también las consecuencias de antiguos proyectos científicos fallidos que han dejado huellas permanentes en la sociedad.</p>
                    <a href="#gameplay" class="btn btn-custom mt-3">Ver Gameplay</a>
                    </div>
                <div class="col-md-6">
                    <div class="interactive-image">
                        <img src="imagenes/history.jpeg" class="img-fluid rounded shadow animated-hover" alt="Historia">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Sección Gameplay -->
<section id="gameplay" class="bg-light-2 py-5">
    <div class="custom-shape-divider-bottom-1648424872-3">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V60.75c34.78,6.52,70.08,10.73,104.62,12.24,32.89,1.45,64.35-0.67,95.37-6.11,36.66-6.04,73.57-16.47,110.01-22.83,55.29-10.06,108.93-4.38,163.22,6.88,58.25,13.35,116.51,27.29,174.78,29.18C1105.89,38.15,1200,36.57,1200,36.57V0H0Z" class="shape-fill-2"></path>
        </svg>
    </div>
    
    <div class="container">
        <h1 class="text-primary text-black text-center">Gameplay</h1>
        
        <div class="row mt-4">
            <!-- Columna del Slider de Imágenes -->
            <div class="col-md-6 gameplay-slider">
                <div id="gameplaySlider" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <img src="imagenes/gameplay1.png" class="d-block w-100 h-100" alt="Gameplay Image 1">
                            <div class="carousel-caption d-none d-md-block">
                                <p>Explora un mundo devastado y lleno de misterios.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/gameplay2.png" class="d-block w-100 h-100" alt="Gameplay Image 2">
                            <div class="carousel-caption d-none d-md-block">
                                <p>Resuelve puzles complejos para avanzar en la historia.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/gameplay3.png" class="d-block w-100 h-100" alt="Gameplay Image 3">
                            <div class="carousel-caption d-none d-md-block">
                                <p>Enfréntate a criaturas mutantes y sobrevive.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#gameplaySlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gameplaySlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <!-- Columna del Video de YouTube -->
            <div class="col-md-5 video-container">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/2FpiiqFNVTs" title="Gameplay Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<!-- Nueva Sección: Sobre Nosotros -->
<section id="sobre-nosotros" class="py-5 position-relative backblack">
    <div class="custom-shape-divider-bottom-1648424872-3">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V60.75c34.78,6.52,70.08,10.73,104.62,12.24,32.89,1.45,64.35-0.67,95.37-6.11,36.66-6.04,73.57-16.47,110.01-22.83,55.29-10.06,108.93-4.38,163.22,6.88,58.25,13.35,116.51,27.29,174.78,29.18C1105.89,38.15,1200,36.57,1200,36.57V0H0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <h1 class="text-primary-white text-center">Sobre Nosotros</h1>
        <div class="row mt-4">
            <!-- Columna de Texto -->
            <div class="col-md-6 text-center">
                <p class="text-green">
                    Somos un equipo apasionado de desarrolladores y diseñadores, dedicados a crear experiencias de juego que desafían y cautivan. Nos inspira la idea de contar historias profundas en mundos cautivadores.
                </p>
                <img src="imagenes/ubication.png" alt="Gameplay" class="img-fluid interactive-image">
            </div>
            <!-- Columna de Mapa -->
            <div class="col-md-6">
                <div id="map" class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97528.4898694143!2d-104.89843486283144!3d21.451696189702766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273123eaaaf2b9%3A0x16adf6ada41de099!2sUniversidad%20Tecnol%C3%B3gica%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1730240308746!5m2!1ses!2smx" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Nueva Sección: Propuesta de Valor -->
<section id="propuesta-valor" class="bg-light-2 py-5 position-relative">
    <div class="custom-shape-divider-bottom-1648424872-3">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V60.75c34.78,6.52,70.08,10.73,104.62,12.24,32.89,1.45,64.35-0.67,95.37-6.11,36.66-6.04,73.57-16.47,110.01-22.83,55.29-10.06,108.93-4.38,163.22,6.88,58.25,13.35,116.51,27.29,174.78,29.18C1105.89,38.15,1200,36.57,1200,36.57V0H0Z" class="shape-fill-2"></path>
        </svg>
    </div>
    <div class="container">
        <h1 class="text-primary text-black text-center">Propuesta de Valor</h1>
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Narrativa Inmersiva</h5>
                        <p class="card-text">Sumérgete en una historia cautivadora llena de giros inesperados y personajes memorables.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gráficos</h5>
                        <p class="card-text">Disfruta de un estilo visual atractivo y gráficos de buena calidad que enriquecen la experiencia de juego.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Desafíos Enganchadores</h5>
                        <p class="card-text">Resuelve puzles y enfrenta enemigos en un mundo que se adapta a tus decisiones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Aprendizaje y Mensaje</h5>
                        <p class="card-text">Adaptación ante desastres climáticos y soluciones sostenibles para la supervivencia. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Nueva Sección: Testimonios -->
<section id="testimonios" class="py-5 position-relative backblack">
    <div class="custom-shape-divider-bottom-1648424872-3">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V60.75c34.78,6.52,70.08,10.73,104.62,12.24,32.89,1.45,64.35-0.67,95.37-6.11,36.66-6.04,73.57-16.47,110.01-22.83,55.29-10.06,108.93-4.38,163.22,6.88,58.25,13.35,116.51,27.29,174.78,29.18C1105.89,38.15,1200,36.57,1200,36.57V0H0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <h1 class="text-primary-white text-center">Testimonios</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-sm testimonial-card"> <!-- Nueva clase aquí -->
                    <div class="card-body">
                        <h5 class="card-title">Ana Rodríguez</h5>
                        <p class="card-text">"The Last Eden sera una experiencia fascinante. Lo disfrutaré desde el principio."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm testimonial-card"> <!-- Nueva clase aquí -->
                    <div class="card-body">
                        <h5 class="card-title">Carlos López</h5>
                        <p class="card-text">"Un juego que te hace pensar y sentir. Será una verdadera obra maestra."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm testimonial-card"> <!-- Nueva clase aquí -->
                    <div class="card-body">
                        <h5 class="card-title">Marta Sánchez</h5>
                        <p class="card-text">"Nunca antes había visto algo tan intenso. Totalmente recomendado."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Sección Contacto -->
    <section id="contacto" class="py-5 border-bottom bg-light-2">
        <div class="container text-center">
            <h1 class="text-primary text-black text-center">Contacto</h1>
            <p class="text-center text-white">Si deseas obtener más información, no dudes en contactarnos.</p>
            <a href="/contact" class="btn btn-custom mt-3">Enviar Mensaje</a>
        </div>
    </section>
    

    <!-- Footer -->
    <footer class="py-5 position-relative backblack text-green text-center">
        <p>&copy; 2024 The Last Eden. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
</body>
</html>
