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
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Volver al inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
            <section class="container-validation">
                <form class="form-search" method="POST">
                    @csrf
                    <h1>Validación de Certificado</h1>
                    <p>Ingresa el ID del certificado para verificar su autenticidad</p>
    
                    <div class="formulario input-group-lg search  ">
                        <input type="text" class="form-control" id="inputGroup-sizing-lg" name="" placeholder="Ingrese su DNI"
                            required>
                        <button type="submit" class="verificar ">
                            <i class='bx bx-search-alt-2' style='color:#ffffff'></i>Verificar
                        </button>
                    </div>
    
                </form>
            </section>
            <section class="container-table ">
                <table class="table table-striped table-bordered text-center m-0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Curso</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de finalización</th>
                            <th>Certificado</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan kevin</td>
                            <td>Pérez cajachagua</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Curso de PHP</td>
                            <td>2023-01-01</td>
                            <td>2023-01-30</td>
                            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-show-alt' style='color:#ffffff'  ></i></button></td> {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->correo }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->tipo_membresia }}</td>
                                </tr>
                            @endforeach --}}
                        </tr>
                        
                    </tbody>
                </table>
    
            </section>

        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Certificado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        </div>
        
      </div>
    </div>
  </div>
        
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
