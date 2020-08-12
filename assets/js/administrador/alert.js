const eliminar=document.querySelectorAll('.delete');

/*const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })*/
 
eliminar.forEach(function(e){
    e.addEventListener('click',()=>{
        //e.preventDefault();

          
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.value) {
                window.location.href = `controllers/controllerAdministrador.php?action=eliminarCliente&idPeople=${e.value}`;
              swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              
            } else if (
              
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          })
    })
});

