
<?php
/**
 *  IMPORTANDO EL PAQUETE DE LA SESION:::::::: 
 */

session_start();
if(!isset($_SESSION['name'])){
    header("location:http://localhost/inmobiliaria/");
}else if($_SESSION['rol']!='2'){
    header("location:http://localhost/inmobiliaria/");
}
require_once("models/empleado.php");
$obj= new empleado();
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
              
              $rs=$obj->getPhoto($_SESSION['id']);
              
            if($rs->from_url ){ ?>
                <img src="img-uploaded/<?php echo $rs->from_url;?>" alt="img_de admin" style="width:40px;height:40px; border-radius:55%;">
            <?php } else { ?>
                <img src="assets/img/administrador/admin3.jpg" alt="" style="width:40px; height:40px; border-radius:55%;">  
            <?php } ?>
          <!-- <img src="assets/img/administrador/admin3.jpg" alt="Logo" style="width:40px; border-radius:55%;">-->
    </a>
        <div class="dropdown-menu bg-dark"> 
          <a id="perfil" class="dropdown-item text-primary" href="perfil-empleado.php">Perfil</a>
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
          <a id="inicio" class="nav-link" href="?a=inicio">INICIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Inmuebles
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="propiedad-cliente.php?numeros=0">Clientes</a>
          <a class="dropdown-item text-primary" href="#">Propias</a>
        </div>
        </li>
<!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Usuarios
          </a>
        <div class="dropdown-menu bg-dark">
          <!--<a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarEmpleados">Empleados</a>-->
          <a class="dropdown-item text-primary" href="controllers/controllerEmpleado.php?action=ListarClientes">Clientes</a>
          <!--<a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarAdmin">Administradores</a>-->
        </div>
        </li>
    </ul>
    <a href="empleado.php">
      <img src="assets/img/principal/logoin.svg" rel="icon" style="padding-left:1500px; width:93%"  position alt="">
    </a>
</nav> 

 <!------------------------ navergador principal pantalla pequeña---------------------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top" style="paddin-botton:20px;">
    <a class="navbar-brand" href="#">Empleado</a>
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
            <!--<a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Empleados</a>-->
            <a class="dropdown-item" href="admin-tabla-clientes.php">Clientes</a>
            <!--<a class="dropdown-item" href="#controllers/controllerAdminstrador.php?action=salir">Administradores</a>-->
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Configuracion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="perfil-empleado.php">Perfil</a>
            <a class="dropdown-item" href="controllers/controllerAdminstrador.php?action=salir">Exit</a>
          </div>
        </li>      
      </ul>
    </div>  
</nav>
<!-- menu perfil---------------------------------------------------- -->
<div class="content-wrapper mb-1 m-t3" style="margin-top:140px;">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <?php if($rs->from_url){?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="img-uploaded/<--?php echo $c->from_url; ?>"
                       style="width:60%;">
                
                <?php }else{ ?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/principal/img_avatar2.png"
                       style="width:60%;">
                
                <?php } ?>
                  
                </div>

                <h3 class="profile-username text-center">Empleado</h3>

                <?php 
                $id=$_SESSION['id'];
                echo "<script>let idRegistro=$id</script>";
                ?>

                <ul id="listado-datos" class="list-group list-group-unbordered mb-3" >
                    <!-- rellenar datos del usuario API -->
                </ul>

                <!-- HERE THE ESTART THE GET OF THE ADMIN PERFIL-->
              
            
                <!-- HERE ENDIG¡NG THE INSERT THE ADMIN PERFIL -->
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informes</a></li>
        
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Info. adicional</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                        <div class="media border p-3" style="border-radius: 15px;">
                          <img src="assets/icon/administrador-icono.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                          <div class="media-body">
                            <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p> 
                          </div>
                        </div>
                  </div>

                  <!-- /.tab-pane -->
                  <!-- INSERT HER START THE PERFIL-->

                  <!-- END THE UNSERT-->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">

        
                      <div class="form-group row">
                        <label for="inputDNI" class="col-sm-2 col-form-label">DNI</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputDNI" placeholder="Dni">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">NOMBRES</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputNombre" placeholder="Nombres">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputApellido" class="col-sm-2 col-form-label">APELLIDOS</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputTelefono" class="col-sm-2 col-form-label">TELÉFONO</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputTelefono" placeholder="Teléfono">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputSalario" class="col-sm-2 col-form-label">SALARIO</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputSalario" placeholder="Salario">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                     <label for="lastName">FECHA DE ENTRADA</label>
                     <input type="date" class="form-control" name="date_in" placeholder="" value="<?php echo $c->date_in; ?>" required>
                     <div class="invalid-feedback">
                     Valid last name is required.
                     </div>
                 </div>
                 <div class="col-md-6 mb-3">
                     <label for="lastName">FECHA DE SALIDA</label>
                     <input type="date" class="form-control" name="date_out" placeholder="" value="<?php echo $c->date_out; ?>" required>
                     <div class="invalid-feedback">
                     Valid last name is required.
                     </div>
                 </div>

                      <div class="form-group row">
                        <label for="inputDireccion" class="col-sm-2 col-form-label">DIRECCIÓN</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                     <label for="lastName">FECHA DE NACIMIENTO</label>
                     <input type="date" class="form-control" name="date_happy" placeholder="" value="<?php echo $c->date_out; ?>" required>
                     <div class="invalid-feedback">
                     Valid last name is required.
                     </div>
                 </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputUsuario" class="col-sm-2 col-form-label">USUARIO</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputContraseña" class="col-sm-2 col-form-label">CONTRASEÑA</label>
                        <div class="col-sm-4">
                          <input type="password" class="form-control" id="inputContraseña" placeholder="Contraseña">
                        </div>
                      </div>
                      

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button id="infoAdicional" type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

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