import { success, warning, error } from "./alerts.js";

document.addEventListener("DOMContentLoaded", function() {
    let currentPage = 1;

    function cargarEstudiantes(page = 1) {
        const formData = new FormData(document.getElementById("ValidacionForm"));
        formData.append('page', page); // Añadir la página a la petición
    
        $.ajax({
            url: "/validacion",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    const estudiantes = response.estudiantes;
                    const tbody = $("#validacionTable tbody");
                    tbody.empty();
                    $("#validacionTable").removeClass("d-none");
                    estudiantes.forEach(est => {
                        const fila = `
                            <tr>
                                <td>${est.codigo}</td>
                                <td>${est.nombre}</td>
                                <td>${est.apellido}</td>
                                <td>${est.nombre}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="bx bxs-show"></i>
                                    </button>
                                </td>
                            </tr>`;
                        tbody.append(fila);
                    });
    
                    generarPaginacion(response.current_page, response.last_page);
                } else {
                    warning("Aviso: " + response.message);
                }
            },
            error: function(xhr) {
                console.error("Error:", xhr.responseText);
                error("Error en la carga.");
            }
        });
    }
    
    function generarPaginacion(paginaActual, ultimaPagina) {
        const paginacion = $("#paginacion");
        paginacion.empty();
    
        if (ultimaPagina > 1) {
            const ul = $('<ul class="pagination justify-content-center"></ul>');
    
            // Botón anterior
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
                    currentPage = paginaActual - 1;
                    cargarEstudiantes(currentPage);
                }
            });
            ul.append(prevBtn);
    
            // Botones numerados
            for (let i = 1; i <= ultimaPagina; i++) {
                const active = i === paginaActual ? "active" : "";
                const item = $(`
                    <li class="page-item ${active}">
                        <a class="page-link" href="#">${i}</a>
                    </li>
                `);
                item.click(function (e) {
                    e.preventDefault();
                    currentPage = i;
                    cargarEstudiantes(currentPage);
                });
                ul.append(item);
            }
    
            // Botón siguiente
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
                    currentPage = paginaActual + 1;
                    cargarEstudiantes(currentPage);
                }
            });
            ul.append(nextBtn);
    
            // Insertar en el contenedor
            paginacion.append($('<nav aria-label="Page navigation example"></nav>').append(ul));
        }
    }
    
    
    $(document).ready(function () {
        $('#ValidacionForm').on("submit", function (event) {
            event.preventDefault();
            currentPage = 1;
            cargarEstudiantes(currentPage);
        });
    });
    
});
