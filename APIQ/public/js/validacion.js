import  { success, warning, error } from "./alerts.js";

document.addEventListener("DOMContentLoaded", function() {
    $('#ValidacionForm').on("submit", function(event) {
        event.preventDefault(); // Prevenir el submit tradicional

        const formData = new FormData(this);

        // Muestra los datos para verificar que se estén enviando correctamente
        

        $.ajax({
            url: "/validacion", 
            type: "POST",
            data: formData,
            contentType: false, 
            processData: false, 
            success: function(response) {

                if (response.success) {
                    const estudiante = response.estudiante;
                    // success("Validación exitosa. ID: " + estudiante.codigo);
                
                    $("#validacionTable").removeClass("d-none");

                   
                    const tbody = $("#validacionTable tbody");

                    gor 
                    const fila = `
                    <tr>
                        <td>${estudiante.codigo}</td>
                        <td>${estudiante.nombre}</td>
                        <td>${estudiante.apellido}</td>
                       
                        <td>${estudiante.nombre}</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <i class="bx bxs-show" color="#f7f7f2"></i>
                   </button></td>
                    </tr>
                `;
                    tbody.append(fila);


                } else {
                   warning("Aviso: " + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:clear", xhr.responseText);
            }
        });
    });
});
