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
$obj=new administrador();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/icon/EscuelaVirtual.png"/>
    

    <link rel="stylesheet" href="lib/animate.css/animate.css">
    <link rel="stylesheet" href="lib/sweetAlert2/sweetalert2.min.css"> 
    
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
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top" style="paddin-botton:20px;">
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
</nav>




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
$obj=new administrador();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/icon/EscuelaVirtual.png"/>
    

    <link rel="stylesheet" href="lib/animate.css/animate.css">
    <link rel="stylesheet" href="lib/sweetAlert2/sweetalert2.min.css"> 
    
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
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top" style="paddin-botton:20px;">
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
                <?php if($c->from_url){?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="img-uploaded/<?php echo $c->from_url; ?>"
                       style="width:60%;">
                
                <?php }else{ ?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="assets/img/principal/img_avatar2.png"
                       style="width:60%;">
                
                <?php } ?>
                  
                </div>

                <h3 class="profile-username text-center">Administrador</h3>

                <?php 
                $id=$_SESSION['ID'];
                echo "<script>let idRegistro=$id</script>";
                ?>

                <ul id="listado-datos" class="list-group list-group-unbordered mb-3" >
                    <!-- rellenar datos del usuario API -->
                </ul>

                <!-- HERE THE ESTART THE GET OF THE ADMIN PERFIL-->
              
                <div class="row" style="margin-top:2px; margin-botton:4rem;">
                          <div class="col-md-2"></div>    
    
                          <div class="col-md-10 pr-5 pl-3 " style="background: #ffff ; border-radius:0.70rem;">
                                      <!--order-md-1-->
                                      
                                <form class="needs-validation"  action="controllers/controllerAdministrador.php?tipo=admin&id=<?php echo $c->id_people; ?>" method="post" enctype="multipart/form-data"  novalidate>
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
                  <!-- INSERT HER START THE PERFIL-->$_GET

                        

                  <!-- END THE UNSERT-->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Contacto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="celular y/o telefono">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
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
</body>
</html>



<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/sweetAlert2/sweetalert2.all.min.js"></script>
</body>
</html>