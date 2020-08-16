<?php
/**
 *  IMPORTANDO EL PAQUETE DE LA SESION:::::::: 
 */

session_start();
if(!isset($_SESSION['name'])){
    header("location:http://localhost/inmobiliaria/");
}else if($_SESSION['rol']!='1'){
    header("location:http://localhost/inmobiliaria/");
}
require_once("models/administrador.php");
$obj= new administrador();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/icon/EscuelaVirtual.png">
    

    <link rel="stylesheet" href="lib/animate.css/animate.css">
    <link rel="stylesheet" href="lib/sweetAlert2/sweetalert2.min.css"> 
    <link rel="stylesheet" href="assets/css/principal/login.css">
    <link rel="stylesheet" href="assets/css/administrador/alerts.css" >
   
    
</head>


<body>

<h2>My Customers</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
     <th>Dni</th>
     <th>Nombres</th>
     <th>Apellidos</th>
     <th>Dirección</th>
     <th>Correo</th>
     <th>Estado</th>
     <th>Opciones</th>
  </tr>
  <?php
                  $rs=$obj->listUsers();
                  foreach($rs as $cliente):
                ?>
                <tr>
                    <td><?php echo $cliente->dni; ?></td>
                    <td><?php echo $cliente->first_name; ?></td>
                    <td><?php echo $cliente->last_name ; ?></td>
                    <td><?php echo $cliente->adress; ?></td>
                    <td><?php echo $cliente->email; ?></td>
                    <td><?php echo ($cliente->is_active=='1')?'activo':'inactivo'; ?></td>

                    <!--<--?php echo '<td><a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=eliminarCliente&idPeople=".urlencode($cliente->id_people)).'">delete</a>'; ?>-->
                    <td>
                    <a class="btn btn-info" onclick="document.getElementById('id01').style.display='block'"  >
                      <img src="assets/icon/administrador/editar.png" class="p-0" style="width: 40px;" >
                    </a>

                    <!--<a class="<--?php echo "delete";?>"value="<--?php echo $cliente->id_people;?>" style="width:auto; height:3rem; " >
                      <img src="assets/icon/administrador/eliminar.png" class="p-0" style="width: 40px;" >
                    </a>
                    
                    Boton para eiminar un cliente
                    -->
                    
                    <button class="<?php echo "delete";?>"value="<?php echo $cliente->id_people;?>" style="width:auto; height:auto; ">
                      <img src="assets/icon/administrador/eliminar.png"  style="width:28px; " alt="Elimanar">
                    </button>
                   <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; height:3rem; ">Info</button>-->
                    
                    <div id="id01" class="modal">
                        
                    <div class="row" style="margin-top:8rem; margin-botton:4rem;">
                    <div class="col-md-3"></div>    

                              <div class="col-md-6 pr-5 pl-5 " style="background: #ffff ; border-radius:0.70rem;">
                                  <!--order-md-1-->
                                <h4 class="mb-3 pt-5 text-primary">Información del Cliente</h4>
                                <form class="needs-validation"  novalidate action="#">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label class="text-primary" for="firstName">Dni</label>
                                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="text-primary "for="firstName">Nombre</label>
                                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="text-primary " for="lastName">Apellido</label>
                                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                      <label class="text-primary" for="lastName">Teléfono</label>
                                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    

                                    <div class="col-md-6 mb-3">
                                    <label class="text-primary" >Sexo</label>
                                    <div class="custom-control custom-radio">
                                      <input value="1" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                      <label class="custom-control-label text-primary" for="credit">Masculino</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                      <input value="0" name="paymentMethod" type="radio" class="custom-control-input" required>
                                      <label class="custom-control-label text-primary" for="debit">Femenino</label>
                                    </div>
                                    
                                  </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="text-primary" for="lastName">N° Ruc</label>
                                      <input type="text" class="form-control " id="lastName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>


                                  </div>
                                  <div class="mb-3">
                                    <label class="text-primary" for="address">Dirección</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                    <div class="invalid-feedback">
                                      Please enter your shipping address.
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="text-primary" for="address">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="address" placeholder="1234 Main St" required>
                                    <div class="invalid-feedback">
                                      Please enter your shipping address.
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="text-primary" for="email">Email <span class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                      Please enter a valid email address for shipping updates.
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label class="text-primary" for="username">Usuario</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                      </div>
                                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                                      <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="text-primary" for="username">Contraseña</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                      </div>
                                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                                      <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                      </div>
                                    </div>
                                  </div>


                                  <div class="row">
                                    <div class="col-md-5 mb-3">
                                      <label class="text-primary" for="country">Estado </label>
                                      <select class="custom-select d-block w-100" id="country" required>
                                        <option value="" disabled >Seleccione...</option>
                                        <option>Vigente</option>
                                        <option>Retirado</option>
                                      </select>
                                      <div class="invalid-feedback">
                                        Please select a valid country.
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label class="text-primary " for="state">Tipo de Usuario</label>
                                      <select class="custom-select d-block w-100" id="state" required>
                                        <option value="" disabled>Seleccione...</option>
                                        <option>Cliente</option>
                                        <option>Empleado</option>
                                        <option>Administrador</option>

                                      </select>
                                      <div class="invalid-feedback">
                                        Please provide a valid state.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label class="text-primary" for="zip">Logueado</label>
                                      <input type="text" class="form-control" id="zip" placeholder="" required>
                                      <div class="invalid-feedback">
                                        Zip code required.
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="mb-4">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label    class="custom-control-label text-primary" for="same-address">Shipping address is the same as my billing address</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label text-primary" for="save-info">Save this information for next time</label>
                                  </div>
                                  <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">actualizar</button>
                                  <div class="container" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Cancel</button>
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                                  </div>
                              </div>
                            

                              <div class="col-md-3"></div>  
                          </div>
                         
                        </form>
                    </div>
                    <!--<--?php echo '<a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=infoCliente&idPeople=".urlencode($cliente->id_people)).'">info</a>--></td><!--'; ?>-->
                    
                </tr>
                  <?php
                  endforeach;
                  ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
