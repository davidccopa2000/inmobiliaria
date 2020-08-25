const eliminarE=document.querySelectorAll('.delete');

/*const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })*/
 
eliminarE.forEach(function(e){
    e.addEventListener('click',()=>{
        //e.preventDefault();

          
          Swal.fire({
            title: 'Estas seguro?',
            text: "No podrás revertir esto!,Si Solo Deseas desabiliarlo del sistema dirigete a modificar !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'No, Cancelar!',
            reverseButtons: true
          }).then((result) => {
            if (result.value) {
                window.location.href = `controllers/controllerAdministrador.php?action=eliminarEmpleado&idPeople=${e.value}`;
              swal.fire(
                'Eliminado!',
                'Cliente Eliminado.',
                'Exitosamente'
              )
              
            } else if (
              
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swal.fire(
                'Cancelado',
                'Se cancelo el proceso :)',
                'error'
              )
            }
          })
    })
});