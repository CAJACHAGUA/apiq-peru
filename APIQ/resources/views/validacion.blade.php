<!doctype html>
<html lang="en">

<head>
    <title>Validacion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('/img/logos/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/validacion.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/scroll.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg  ">
            <div class="container d-flex align-items-center ">
                <!-- Botón de navegación -->
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class='bx bx-menu' style='color:#ffffff'  ></i>
                </button>

                <!-- Logo y Nombre Centrados -->
                <a class="navbar-brand d-flex  align-items-center text-center mx-auto empresa " style="font-size: 14px;"
                    href="#">
                    <img src="{{ asset('/img/logos/WHITE.svg') }}" alt="logo" class="logo">
                    <p class="m-0 text-white ">Asociación Peruana de <br> Ingenieros Químicos</p>
                </a>
                <!-- Menú de Navegación -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                        <li class="nav-item text-white">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Volver al
                                inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="title">
            <h1>Verificación de Certificados</h1>
            <p>Ingrese el código de su certificado para verificar su autenticidad</p>
        </div>
        <section class="container-validation">
            <div class="content-title">
                <h4>Validación de Certificado</h4>
                <p>Ingrese el código único de su certificado o su DNI</p>
            </div>
            <div>
                <form class="form-search" method="POST" id="ValidacionForm" action="{{ route('estudiante.show') }}">
                    @csrf
                    <div class="formulario input-group-lg search d-flex gap-4 ">
                        <input type="text" class="form-control" id="inputGroup-sizing-lg" name="codigo"
                            placeholder="Ingrese su Codigo o DNI" required>
                        <button type="submit" class="verificar ">
                            <i class='bx bx-search-alt-2' ></i>Verificar
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <section class="container-table " id="validacionTable">
            <div class="content-title-valiacion">
                <h4>Resultados de Verificación</h4>
                <p id="N_certificados"></p>
                <div style="background: rgb(170, 166, 166); height:1.5px; margin-top:10px;"></div>
                <div class="d-flex gap-3 mt-3">
                    <p id="nombre">Nombre y apellidos:</p>
                    <p id="dni">DNI:</p>
                </div>
            </div>
            <div class="content-table table-responsive">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Curso</th>
                            <th>Fecha de emision</th>
                            <th>Certificado</th>
                        </tr>
                    </thead>
                    <tbody class="body-estudiante">
                        <tr>
                            <td colspan="7" class="text-center">No se encontraron resultados</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="paginacion" class="mt-4 d-flex justify-content-center"> </div>
        </section>
        <section class="container-instruciones">
            <div>
                <h4>¿Cómo verificar su certificado?</h4>
            </div>
            <div>
                <ol style="color:#cdd4db;">
                    <li>Ingrese el código único que aparece en su certificado (formato: CERT-XXXXX)</li>
                    <li>Haga clic en el botón "Verificar"</li>
                    <li>El sistema mostrará los detalles del certificado en la tabla de resultados</li>
                    <li>Puede ver los detalles completos o descargar su certificado usando los botones de acción</li>
                </ol>
            </div>
             <!-- Modal PDF-->
             <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog" style="max-width: 900px;">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Documento Sustentatorio</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <iframe id="pdfFrame" src="" width="100%" height="500px"
                             style="border: none;"></iframe>

                     </div>
                 </div>
             </div>
         </div>
    </main>
    <footer>
        <div class="derechos">
            <strong>© 2025 APIQ. Todos los derechos reservados.</strong>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="{{ asset('js/validacion.js') }}"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
