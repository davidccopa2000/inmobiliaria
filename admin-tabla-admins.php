
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
<body class="background-gris">


<!---------------------------- navergador principal pantalla grande---------------------------------------------------------------->
<nav class="navbar d-none d-sm-none d-lg-flex navbar-expand-lg bg-dark navbar-dark fixed-top " style=" width: 100%;">
    <a class="navbar-brand dropdown dropdown-toggle mr-3" href="navbardrop" id="navbardrop" data-toggle="dropdown">
           <?php
              
              $foto=$obj->getPhoto($_SESSION['id']);
              
            if($foto->from_url ){ ?>
                <img src="img-uploaded/<?php echo $foto->from_url;?>" alt="img_de admin" style="width:40px;height:40px; border-radius:55%;">
            <?php } else { ?>
                <img src="assets/img/administrador/admin3.jpg" alt="" style="width:40px; height:40px; border-radius:55%;">  
            <?php } ?>
    </a>
        <div class="dropdown-menu bg-dark"> 
          <a id="perfil" class="dropdown-item text-primary" href="?a=perfil">Perfil</a>
          <a class="dropdown-item text-primary" href="#configuracion">Configuracion</a>
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=salir">Salir</a>
        </div>
    <ul class="navbar-nav ">
        <!--<li class="nav-item">
          <a id="inicio" class="nav-link" href="?a=inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?a=cursos">Inmuebles</a>
        </li>
        -->
        <li class="nav-item">
          <a id="inicio" class="nav-link" href="administrador.php">INICIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Inmuebles
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="propiedad-cliente.php">Propias</a>
          <a class="dropdown-item text-primary" href="#">Clientes</a>
        </div>
        </li>
<!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Usuarios
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarEmpleados">Empleados</a>
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarClientes">Clientes</a>
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarAdmin">Administradores</a>
        </div>
        </li>
    </ul>
    <a href="administrador.php">
      <img src="assets/img/principal/logoin.svg" rel="icon" style="padding-left:1500px; width:93%"  position alt="">
    </a>
</nav> 

 <!------------------------ navergador principal pantalla pequeña---------------------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top">
    <a class="navbar-brand" href="#">Administrador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?a=inicio">Inicio</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Inmuebles
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Propias</a>
          <a class="dropdown-item text-primary" href="?a">Clientes</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Usuarios
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Empleados</a>
            <a class="dropdown-item" href="admin-tabla-clientes.php">Clientes</a>
            <a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Administradores</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Configuracion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="?a=perfil">Perfil</a>
            <a class="dropdown-item" href="controllers/controllerAdminstrador.php?action=salir">Exit</a>
          </div>
        </li>      
      </ul>
    </div>  
    <a href="administrador.php">
      <img src="assets/img/principal/logoin.svg" rel="icon" style="padding-left:1500px; width:93%"  position alt="">
    </a>
</nav>


    <!-- Interfas deAgregar Cliente-->
    
    <div class="container-fluid" style="margin-top:100px;">
      <div class="">
        <h2>Administradores</h2>
        <div class="row">
        
          <div class="col-9">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
          </div>
          
          
          <a class="btn btn-info" onclick="document.getElementById('id02').style.display='block'"  >
              <img src="assets/icon/administrador/agregar.svg" class="p-0" style="width: 40px;" >
          </a>
          <div id="id02" class="modal" style="width:90%; margin:auto;">
              
            <div class="row" style="margin-top:8rem; margin-botton:4rem;">
            <div class="col-md-3"></div>    

            <div class="col-md-6 pr-5 pl-5 " style="background: #ffff ; border-radius:0.70rem;">
            <!--order-md-1-->
            
          
          <form class="needs-validation" action="controllers/controllerAdministrador.php?tipo=admin" method="post" enctype="multipart/form-data"  novalidate >
            
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="assets/img/principal/img_avatar2.png"  style="width:20%;"  alt="Avatar" class="avatar">
            </div>
            <div style="margin-left:39%;" >
                <input type="file" name="archivo" >
            </div>
            <h4 class="mb-3 pt-5">Agrega un Nuevo Administrador</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Dni</label>
                <input type="text" class="form-control" name="dni" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="lastName">Teléfono</label>
                <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
              

              <div class="col-md-6 mb-3">
              <label >Sexo </label> <br>
              <label>Masculino 
              <input type="radio"  name="radio" value="1">
              <span class="checkmark"></span>
              </label><br>
              <label >Femenino
              <input type="radio" name="radio" value="0">
              <span class="checkmark"></span>
              </label>
              
            </div>

              <div class="col-md-6 mb-3">
                <label for="lastName">Salario</label>
                <input type="number" class="form-control" name="salary" placeholder="" value="<?php echo $c->salary; ?>" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

                 <div class="col-md-6 mb-3">
                     <label for="lastName">Fecha de Entrada</label>
                     <input type="date" class="form-control" name="date_in" placeholder="" value="<?php echo $c->date_in; ?>" required>
                     <div class="invalid-feedback">
                     Valid last name is required.
                     </div>
                 </div>
                 <div class="col-md-6 mb-3">
                     <label for="lastName">Fecha de Salida</label>
                     <input type="date" class="form-control" name="date_out" placeholder="" value="<?php echo $c->date_out; ?>" required>
                     <div class="invalid-feedback">
                     Valid last name is required.
                     </div>
                 </div>


            </div>
            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" name="direccion" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="mb-3">
              <label for="address">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="fecha" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="user" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="username">Contraseña</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="pass" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Estado </label>
                <select class="custom-select d-block w-100" name="country" required>
                  <option value="" disabled >Seleccione...</option>
                  <option>Vigente</option>
                  <option>Retirado</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Tipo de Usuario</label>
                <select class="custom-select d-block w-100" name="state" required>
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
                <label for="zip">Logueado</label>
                <input type="text" class="form-control" name="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Registrar</button>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" >Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        <div class="col-md-3"></div>  
    </div>
        
          
    </div>
  </div>
</div>
  <div class="contanier" style="overflow:auto;">
     <!-- aqui toca la tabla -->
      

     
     <table class="table table-hover table-bordered mt-3" id="myTable">
        <thead class="bg-dark text-white">
          <tr>
            <th>Dni</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Opciones</th>
          </tr>
        </thead>
       
        <tbody  class="bg-secondary text-white">
            <!-- contenido id="myTable" DOCENTE API -->
                <?php
                  $rs=$obj->listUsersAdmin();
                  foreach($rs as $admin):
                ?>
                <tr>
                    <td><?php echo $admin->dni; ?></td>
                    <td><?php echo $admin->first_name; ?></td>
                    <td><?php echo $admin->last_name ; ?></td>
                    <td><?php echo $admin->adress; ?></td>
                    <td><?php echo $admin->email; ?></td>
                    <td><?php echo ($admin->is_active=='1')?'activo':'inactivo'; ?></td>

                    <!--<--?php echo '<td><a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=eliminaradmin&idPeople=".urlencode($admin->id_people)).'">delete</a>'; ?>-->
                    <td>
                        <a class="btn btn-info" onclick="document.getElementById('<?php echo $admin->id_people;?>').style.display='block'"  >
                          <img src="assets/icon/administrador/editar.png" class="p-0" style="width: 40px;" >
                        </a>

                        <!--<a class="<--?php echo "delete";?>"value="<--?php echo $admin->id_people;?>" style="width:auto; height:3rem; " >
                          <img src="assets/icon/administrador/eliminar.png" class="p-0" style="width: 40px;" >
                        </a>
                        
                        Boton para eiminar un admin
                        -->
                        
                        <button class="<?php echo "delete";?>"value="<?php echo $admin->id_people;?>" style="width:auto; height:auto; ">
                          
                          <img src="assets/icon/administrador/eliminar.png"  style="width:28px; " alt="Elimanar">
                        </button>
                      <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; height:3rem; ">Info</button>-->
                        
                        
                        <!--<--?php echo '<a href="'.htmlspecialchars("controllers/controllerAdministrador.php?action=infoadmin&idPeople=".urlencode($admin->id_people)).'">info</a>--></td><!--'; ?>-->
                    
                </tr>
          
                  <?php
                  endforeach;
                  ?>
              </tbody>
      
      
      
      
      
      
      
      
      </table>
  </div>

  <ul id="table-pagination-global" class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>

</div>

     <!-- aqui finaliza--->

    
     <!-- Este es el contenido del boton modificar-->
<?php
$users=$obj->getUsersAdmin();
foreach($users as $c):
?>
                   <div id="<?php echo $c->id_people; ?>" class="modal">
                        
                      <div class="row" style="margin-top:8rem; margin-botton:4rem;">
                          <div class="col-md-3"></div>    
    
                          <div class="col-md-6 pr-5 pl-5 " style="background: #ffff ; border-radius:0.70rem;">
                                      <!--order-md-1-->
                                      
                                <form class="needs-validation"  action="controllers/controllerAdministrador.php?tipo=admin&id=<?php echo $c->id_people; ?>" method="post" enctype="multipart/form-data"  novalidate>
                                      <div class="imgcontainer">
                                        <span onclick="document.getElementById('<?php echo $c->id_people; ?>').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        <?php if($c->from_url){?>
                                        <img src="img-uploaded/<?php echo $c->from_url; ?>"  style="width:200px; height:200px;"  alt="Avatar" class="avatar">
                                        <?php }else{ ?>
                                          <img src="assets/img/principal/img_avatar2.png"  style="width:200px; height:200px;"  alt="Avatar" class="avatar">
                                        <?php } ?>
                                      </div>
                                      <div style="margin-left:39%;" >
                                         <input type="file" name="archivo" >
                                      </div>
                                    <h4 class="mb-3 pt-5 text-primary">Información del Administrador</h4>
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label class="text-primary" for="firstName" >Dni</label>
                                          <input type="text" class="form-control" name="dni" placeholder="" value="<?php echo $c->dni; ?>" required>
                                          <div class="invalid-feedback">
                                            Valid first name is required.
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label class="text-primary "for="firstName">Nombre</label>
                                          <input type="text" class="form-control" name="nombre" placeholder="" value="<?php echo $c->first_name; ?>" required>
                                          <div class="invalid-feedback">
                                            Valid first name is required.
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label class="text-primary " for="lastName">Apellido</label>
                                          <input type="text" class="form-control" name="apellido" placeholder="" value="<?php echo $c->last_name; ?>" required>
                                          <div class="invalid-feedback">
                                            Valid last name is required.
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                          <label class="text-primary" for="lastName">Teléfono</label>
                                          <input type="text" class="form-control" name="tel" placeholder="" value="<?php echo $c->phone; ?>" required>
                                          <div class="invalid-feedback">
                                            Valid last name is required.
                                          </div>
                                        </div>
                                        
    
                                        <div class="col-md-6 mb-3">
                                        <?php 
                                        $m='';
                                        $f='';
                                        if($c->sexo==1){
                                        ?>
                                        <label >Sexo </label> <br>
                                        <label>Masculino 
                                        <input type="radio"  name="radio" value="1" checked>
                                        <span class="checkmark"></span>
                                        </label><br>
                                        <label >Femenino
                                        <input type="radio" name="radio" value="0"  >
                                        <span class="checkmark"></span>
                                        </label>
                                        <?php
                                        }else{
                                        ?>
                                        <label >Sexo </label> <br>
                                        <label>Masculino 
                                        <input type="radio"  name="radio" value="1" >
                                        <span class="checkmark"></span>
                                        </label><br>
                                        <label >Femenino
                                        <input type="radio" name="radio" value="0" checked>
                                        <span class="checkmark"></span>
                                        </label>
                                        <?php
                                        }
                                        ?>
                                        

                                        
                                        
                                      </div>
                                      <div class="col-md-6 mb-3">
                                            <label for="lastName">Salario</label>
                                            <input type="number" class="form-control" name="salary" placeholder="" value="<?php echo $c->salary; ?>" required>
                                            <div class="invalid-feedback">
                                            Valid last name is required.
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Fecha de Entrada</label>
                                            <input type="date" class="form-control" name="date_in" placeholder="" value="<?php echo $c->date_in; ?>" required>
                                            <div class="invalid-feedback">
                                            Valid last name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Fecha de Salida</label>
                                            <input type="date" class="form-control" name="date_out" placeholder="" value="<?php echo $c->date_out; ?>" required>
                                            <div class="invalid-feedback">
                                            Valid last name is required.
                                            </div>
                                        </div>
    
                                      </div>
                                      <div class="mb-3">
                                        <label class="text-primary" for="address">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" placeholder="1234 Main St" value="<?php echo $c->adress; ?>" required>
                                        <div class="invalid-feedback">
                                          Please enter your shipping address.
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="text-primary" for="address">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="fecha" placeholder="1234 Main St" value="<?php echo $c->date_birthday; ?>" required>
                                        <div class="invalid-feedback">
                                          Please enter your shipping address.
                                        </div>
                                      </div>
    
                                      <div class="mb-3">
                                        <label class="text-primary" for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="you@example.com" value="<?php echo $c->email; ?>">
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
                                          <input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo $c->user_name; ?>" required>
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
                                          <input type="text" class="form-control" name="pass" placeholder="Username" value="<?php echo $c->pass; ?>" required>
                                          <div class="invalid-feedback" style="width: 100%;">
                                            Your username is required.
                                          </div>
                                        </div>
                                      </div>
    
    
                                      <div class="row">
                                        <div class="col-md-5 mb-3">
                                        <?php if($c->is_active==1){?>
                                          <label class="text-primary" for="country">Estado </label>
                                          <select class="custom-select d-block w-100" name="is_active" value="<?php echo $c->is_active; ?>" required>
                                            <option value="" disabled >Seleccione...</option>
                                            <option selected>Vigente</option>
                                            <option >Retirado</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid country.
                                          </div>
                                        <?php }else{?>
                                          <label class="text-primary" for="country">Estado </label>
                                          <select class="custom-select d-block w-100" name="is_active" value="<?php echo $c->is_active; ?>" required>
                                            <option value="" disabled >Seleccione...</option>
                                            <option>Vigente</option>
                                            <option selected>Retirado</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid country.
                                          </div>
                                          <?php }?>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                          <label class="text-primary " for="state">Tipo de Usuario</label>
                                          <select class="custom-select d-block w-100" name="is_user" value="<?php echo $c->is_user; ?>" required>
                                            <option value="" disabled>Seleccione...</option>
                                            <option>Administrador</option>
                                            <option>Empleado</option>
                                            <option>Cliente</option>
                                            
    
                                          </select>
                                          <div class="invalid-feedback">
                                            Please provide a valid state.
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label class="text-primary" for="zip">Logueado</label>
                                          <input type="text" class="form-control" name="is_staff" placeholder="" required value="<?php echo $c->is_staff; ?>">
                                          <div class="invalid-feedback">
                                            Zip code required.
                                          </div>
                                        </div>
                                      </div>
                                      <hr class="mb-4">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="same-address">
                                        <label    class="custom-control-label text-primary" for="same-address">Shipping address is the same as my billing address</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="save-info">
                                        <label class="custom-control-label text-primary" for="save-info">Save this information for next time</label>
                                      </div>
                                      <button class="btn btn-primary btn-lg btn-block mb-5" name="actualizar" type="submit">actualizar</button>
                                      <div class="container" style="background-color:#f1f1f1">
                                        <button type="button" onclick="document.getElementById('<?php echo $c->id_people; ?>').style.display='none'" class="cancelbtn" >Cancel</button>
                                        <span class="psw">Forgot <a href="#">password?</a></span>
                                      </div>
                                  </div>
                                
    
                                  <div class="col-md-3"></div>  
                                </form>
                          </div>  
                    </div>
<?php endforeach;?>

     <!-- Aqui termina el botton modificar-->



<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="assets/js/administrador/alert.js"></script>
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