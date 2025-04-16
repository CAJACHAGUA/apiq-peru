export function success(mensaje){
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        background:"green",
        color:"white",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: mensaje
      });

}

export function warning(mensaje){
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        background:"orange",
        color:"white",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "warning",
        title: mensaje
      });

}

export function error(mensaje){
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        background:"red",
        color:"white",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "error",
        title: mensaje,
      });

}