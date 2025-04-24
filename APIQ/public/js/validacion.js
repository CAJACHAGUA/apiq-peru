import  { success, warning, error } from "./alerts.js";
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
                console.log(response);
                const estudiantes = response.estudiantes;
                const tbody = $("#validacionTable tbody");
                
                tbody.empty();
              
                if (response.success && estudiantes.length > 0) {
                    var n_certicados=estudiantes.length ;
                    $("#N_certificados").text(n_certicados + " certificado(s) encontrado(s)");
                    let nombre = estudiantes[0].nombre + " " + estudiantes[0].apellido;
                    let dni = estudiantes[0].dni ;
                    $("#nombre").text("Nombre: " + nombre);
                    $("#dni").text("DNI: "+ dni);
                    $("#validacionTable").removeClass("d-none");  
                    $("#paginacion").removeClass("d-none");       
                    estudiantes.forEach((est) => {
                        const fila = `
                          <tr>
                            <td>${est.codigo_certificado}</td>
                            <td>${est.curso}</td>
                            <td>${est.fecha_emision}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-outline-warning fw-bold d-inline-flex align-items-center justify-content-center" href="${est.ruta_certificado}" target="_blank" download style="width: 80px; color: #07294d; gap: 5px;">
                                    <i class="bx bxs-show me-1" style="font-size:20px;"></i> Ver</a>
                               
                            </td>

                          </tr>`;
                        tbody.append(fila);
                    });

                    generarPaginacion(response.current_page, response.last_page);
                } else {
                    $("#N_certificados").text( "0 certificado(s) encontrado(s)");
                    $("#nombre").text("Nombre: ---------- " );
                    $("#dni").text("DNI:------- ");
                    $("#paginacion").addClass("d-none");
                    const fila = `<tr><td colspan="7" class="text-center">No se encontraron resultados</td></tr>`;
                    tbody.append(fila);
                    warning("Aviso: " + response.message);
                }
            },
            error: function (xhr) {
                console.error("Error:", xhr.responseText);
                error("Error en la carga.");
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
