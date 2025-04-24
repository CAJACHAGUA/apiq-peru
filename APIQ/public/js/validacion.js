document.addEventListener("DOMContentLoaded", function () {
    // Función para obtener el código desde la URL (si se pasa en la URL)
    function getParametroURL(nombre) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(nombre);
    }

    // Función para cargar los estudiantes
    function cargarEstudiantes(page = 1, codigo = "") {
        const formData = new FormData(document.getElementById("ValidacionForm"));
        formData.append("page", page);
        
        if (codigo) {
            formData.append("codigo", codigo);  // Si se pasa un código, lo agregamos
        }

        $.ajax({
            url: "/validacion/",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                const estudiantes = response.estudiantes;
                const tbody = $("#validacionTable tbody");
                tbody.empty();

                // Verificar si se obtuvieron resultados
                if (response.success && estudiantes.length > 0) {
                    $("#validacionTable").removeClass("d-none");  // Mostrar tabla
                    $("#paginacion").removeClass("d-none");       // Mostrar paginación
                    estudiantes.forEach((est) => {
                        const fila = `
                          <tr>
                            <td>${est.codigo_certificado}</td>
                            <td>${est.nombre}</td>
                            <td>${est.apellido}</td>
                            <td>${est.curso}</td>
                            <td>${est.fecha_inicio}</td>
                            <td>${est.fecha_fin}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-pdf-id="${est.codigo_certificado}">
                                    <i class="bx bxs-show"></i>
                                </button>
                            </td>
                          </tr>`;
                        tbody.append(fila);
                    });

                    generarPaginacion(response.current_page, response.last_page);
                } else {
                    $("#paginacion").addClass("d-none");
                    const fila = `<tr><td colspan="7" class="text-center">No se encontraron resultados</td></tr>`;
                    tbody.append(fila);
                }
            },
            error: function (xhr) {
                console.error("Error:", xhr.responseText);
                alert("Error en la carga.");
            },
        });
    }

    // Mostrar paginación
    function generarPaginacion(paginaActual, ultimaPagina) {
        const paginacion = $("#paginacion");
        paginacion.empty();

        if (ultimaPagina > 1) {
            const ul = $('<ul class="pagination justify-content-center"></ul>');

            // Paginación: Prev
            const prevDisabled = paginaActual === 1 ? "disabled" : "";
            const prevBtn = $(`
                <li class="page-item ${prevDisabled}">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            `);
            prevBtn.click(function (e) {
                e.preventDefault();
                if (paginaActual > 1) {
                    cargarEstudiantes(paginaActual - 1);
                }
            });
            ul.append(prevBtn);

            // Páginas numéricas
            for (let i = 1; i <= ultimaPagina; i++) {
                const active = i === paginaActual ? "active" : "";
                const item = $(`
                    <li class="page-item ${active}">
                        <a class="page-link" href="#">${i}</a>
                    </li>
                `);
                item.click(function (e) {
                    e.preventDefault();
                    cargarEstudiantes(i);
                });
                ul.append(item);
            }

            // Paginación: Next
            const nextDisabled = paginaActual === ultimaPagina ? "disabled" : "";
            const nextBtn = $(`
                <li class="page-item ${nextDisabled}">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            `);
            nextBtn.click(function (e) {
                e.preventDefault();
                if (paginaActual < ultimaPagina) {
                    cargarEstudiantes(paginaActual + 1);
                }
            });
            ul.append(nextBtn);

            paginacion.append($('<nav aria-label="Page navigation example"></nav>').append(ul));
        }
    }

    // Detectar parámetro "id" en la URL (si es que se pasa en la URL)
    const idDesdeURL = getParametroURL("id");
    if (idDesdeURL) {
        cargarEstudiantes(1, idDesdeURL); // Llamar con el código directamente desde la URL
    } else {
        
    }

    // Submit del formulario
    $("#ValidacionForm").on("submit", function (event) {
        event.preventDefault();
        cargarEstudiantes();
    });
});
