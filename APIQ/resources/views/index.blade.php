<!doctype html>
<html lang="en">

<head>
    <title>APIQ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('/img/logos/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/scroll.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container d-flex align-items-center ">
                <!-- Botón de navegación -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logo y Nombre Centrados -->
                <a class="navbar-brand d-flex  align-items-center text-center mx-auto empresa " style="font-size: 14px;"
                    href="#">
                    <img src="{{ asset('/img/logos/logo.svg') }}" alt="logo" class="logo">
                    <p class="m-0 ">Asociación Peruana de <br> Ingenieros Químicos</p>
                </a>

                <!-- Menú de Navegación -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Nosotros">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Mision">Misión y Visión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Directiva">Junta Directiva</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Eventos">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="conteiner-portada" id="Inicio">
            <div class="portada">
                <h1>Promoviendo la Ciencia Química para un Futuro Mejor</h1>
                <p>Somos una asociación sin fines de lucro dedicada a la divulgación, investigación y educación en el
                    campo de la química.</p>
                 <div class="d-flex justify-content-center">
                    <a href="https://wa.me/933186405?text=Hola%20quiero%20más%20información" class="btn_unete">Unete a Nosostros</a>
                 </div>   
                
            </div>
        </section>
        <section class="conteiner-quienes-somos" id="Nosotros">
            <h1>¿Quiénes somos?</h1>
            <div class="quienes-somos">
                <img src="{{ asset('/img/nosotros.png') }}" alt="" class="nosotros" />
                <p>Somos una organización conformada por estudiantes de distintas universidades del Perú que busca
                    realiza proyectos de impacto universitario por medio de diferentes equipos y trabajo en conjunto
                    fomentando el desarrollo de habilidades blandas y gestión de proyectos.</p>
            </div>
        </section>
        <section class="container-hacemos">
            <h1>¿Qué hacemos?</h1>
            <div class="content-cards">
                <div class="card">
                    <img src="{{ asset('/img/projections.svg') }}" alt="" />
                    <p>Diversos proyectos de aspecto académico y social.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('/img/market.svg') }}" alt="" />
                    <p>Ofrecerle a la comunidad universitaria la oportunidad de desarrollar fortalezas en su formación
                        profesional.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('/img/developer-activity.svg') }}" alt="" />
                    <p>Participar en actividades académicas y culturales, por medio de la realización de proyectos.</p>
                </div>
            </div>
        </section>
        <section class="conteiner-mision" id="Mision">
            <div class="content-mision">
                <h3>Misión</h3>
                <p>Promover la formación, investigación e innovación en ingeniería química, brindando espacios de
                    capacitación y desarrollo profesional para contribuir al avance del sector y la sociedad.</p>
            </div>
            <div class="img-mision">
                <img src="{{ asset('/img/mision.jpg') }}" alt="" class="mision" />
            </div>

        </section>
        <section class="conteiner-vision">
            <div>
                <img src="{{ asset('img/vision.jpg') }}" alt="" class="vision" />
            </div>
            <div class="content-vision">
                <h3>Visión</h3>
                <p>Ser la asociación referente en el Perú en la difusión del conocimiento, el uso de tecnología y el
                    impulso de soluciones sostenibles en ingeniería química.</p>
            </div>
        </section>
        <section class="conteiner-directiva" id="Directiva">
            <h1>Junta Directiva</h1>
            <div class="content-integrantes">
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/presidente.jpg') }}" alt="" class="miembro" />
                    <h4>Presidente</h4>
                    <p>Aarón Zúñiga</p>
                </div>
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/vicepresidente.jpg') }}" alt="" class="miembro" />
                    <h4>Vice Presidente</h4>
                    <p>Frank Martinez</p>
                </div>
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/tesorero.jpg') }}" alt="" class="miembro" />
                    <h4>Tesorero</h4>
                    <p>Alexis Torres</p>
                </div>
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/secretaria.jpg') }}" alt="" class="miembro" />
                    <h4>Secretaria General</h4>
                    <p>Astryd Abanto</p>
                </div>
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/recursos_humanos .jpg') }}" alt=""
                        class="miembro" />
                    <h4>Dir.ª RRHH y RRPP</h4>
                    <p>Marianella Alave</p>
                </div>
                <div class="integrante">
                    <img src="{{ asset('img/integrantes/marketing.jpg') }}" alt="" class="miembro" />
                    <h4>Dir. Marketing y Publicida</h4>
                    <p>Stefano Gamarra</p>
                </div>
            </div>

        </section>
        <section class="conteiner-eventos" id="Eventos">
            <div class="w-75 mx-auto text-center">
                <h1>Eventos</h1>
                <h5>
                    Participa en nuestras actividades y mantente actualizado con los últimos avances en el campo de la
                    química.
                </h5>
            </div>

            <div class="content-eventos">
                <div class="evento">
                    <img src="{{ asset('/img/eventos/evento.jpg') }}" alt="" />
                    <div class="descripcion">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class='bx bx-calendar' style='color:#a09898; font-size:25px;'></i>
                            <p class="time mb-0 text-muted" style="font-size:15px;">2025-06-01</p>
                        </div>
                        <h4>Seminario de Química Verde</h4>
                        <p>Conoce las últimas tendencias en química sostenible.</p>
                        <button type="button" class="btn btn-warning">Inscribirme</button>
                    </div>
                </div>
                <div class="evento">
                    <img src="{{ asset('/img/eventos/evento.jpg') }}" alt="" />
                    <div class="descripcion">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class='bx bx-calendar' style='color:#a09898; font-size:25px;'></i>
                            <p class="time mb-0 text-muted" style="font-size:15px;">2025-06-01</p>
                        </div>
                        <h4>Biotecnología</h4>
                        <p>Conoce las últimas tendencias en química sostenible.</p>
                        <button type="button" class="btn btn-warning">Inscribirme</button>
                    </div>
                </div>
                <div class="evento">
                    <img src="{{ asset('/img/eventos/evento.jpg') }}" alt="" />
                    <div class="descripcion">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class='bx bx-calendar' style='color:#a09898; font-size:25px;'></i>
                            <p class="time mb-0 text-muted" style="font-size:15px;">2025-06-01</p>
                        </div>
                        <h4>Química Industrial</h4>
                        <p>Conoce las últimas tendencias en química sostenible.</p>
                        <button type="button" class="btn btn-warning">Inscribirme</button>
                    </div>
                </div>
                <div class="evento">
                    <img src="{{ asset('/img/eventos/evento.jpg') }}" alt="" />
                    <div class="descripcion">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class='bx bx-calendar' style='color:#a09898; font-size:25px;'></i>
                            <p class="time mb-0 text-muted" style="font-size:15px;">2025-06-01</p>
                        </div>
                        <h4>Gestión de la Calidad y Seguridad Industrial</h4>
                        <p>Conoce las últimas tendencias en química sostenible.</p>
                        <button type="button" class="btn btn-warning">Inscribirme</button>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="conteiner-validacion" >

            <div class="content-titulo ">
                <i class='bx bx-shield-alt-2' style='color:#0055f2'></i>
                <h1 style='color:#0055f2;  font-weight:800;'>Validación de Certificados</h1>
                <h4 style='color:#4b5563'>Verifica la autenticidad de los certificados emitidos por Asociación Peruana de Ingenieros Químicos
                    de manera rápida y segura.</h4>
            </div>
            <div class="content-validacion">
                <h3 style='color:#0055f2; font-weight:600;'>Sistema de Verificación Digital</h3>
                <p>Verifica la autenticidad de certificados de cursos, talleres, simposios y otras actividades
                    organizadas por nuestra asociación.</p>
                <div class="contenedor_boton">
                    <a href="{{ route('validacion') }}" class="btn_validar">
                        Validar Certificado <i class='bx bx-link-external'></i>
                    </a>
                    
                </div>

                <div style="background: rgb(170, 166, 166); height:2px; margin:15px 0px;"></div>
                <p class=" nota "><i class='bx bx-check-circle' style='color:#22c55e'></i>Sistema seguro y confiable
                    para la validación de documentos oficiales</p>
            </div>
        </section>
    </main>
    <footer>
        <section class="conteiner-contactos" id="Contacto">
            <!-- place footer here -->
            <div class="content-contactos">
                <h1>Contactanos</h1>
                <p>Estamos aquí para responder tus preguntas y explorar posibles colaboraciones.</p>
                <a href="" class="contacto">
                    <i class='bx bx-envelope'></i>
                    <p>info@asociaquimica.org</p>
                </a>
                <a href="" class="contacto">
                    <i class='bx bxs-phone-call'></i>
                    <p>+51 9876543</p>
                </a>
                <div class="redes">
                    <a href="https://www.facebook.com/profile.php?id=61571562634601"><i
                            class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.youtube.com/@APIQPER%C3%9A"><i class='bx bxl-youtube'></i>
                    </a>
                </div>
            </div>
            <div style="background: rgb(170, 166, 166); height:2px; margin-top:10px;"></div>
            <div class="derechos">
                <strong>© 2025 APIQ. Todos los derechos reservados.</strong>
            </div>

        </section>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
