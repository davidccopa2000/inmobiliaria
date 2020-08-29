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


     <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/principal/login.css" rel="stylesheet">
    
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
<div class="content-wrapper mb-1 m-t1" style="margin-top:140px;">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

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

                <!--HERE THA ESTRAR
                  -->

                  

                <!-- HERE THE ESTART THE GET OF THE ADMIN PERFIL-->
              <!--  <a class="btn btn-info" onclick="document.getElementById('id02').style.display='block'"  >
              <img src="assets/icon/administrador/agregar.svg" class="p-0" style="width: 40px;" >
          </a>
          <div id="id02" class="modal" style="width:58%; ">

              
            <div class="row" style="margin-top:0rem; margin-botton:0rem;">
            <div class="col-md-3"></div>    

            <div class="col-md-8 pr-4 pl-4 " style="background: #ffff ; border-radius:0.70rem;"  >
            order-md-1-->
            
          
         <!-- <form class="needs-validation" action="controllers/controllerAdministrador.php?tipo=admin" method="post" enctype="multipart/form-data" style="position-size:0 0 0 0;" novalidate >
            
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </div>
                        <h4 class="mb-2 pt-0">MOdifica Este  Inmueble</h4>
                        <div class="row" style="margin-top:40px;">
                          <div class="col-md-5 mb-2 mt-1">
                            <label for="firstName">Nombre del Inmueble</label>
                            <input type="text" class="form-control" name="dni" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-2 mb-3">
                            <label for="lastName">N°Habitaciones</label>
                            <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-2 mb-3">
                            <label for="lastName">N° de Baños</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-2  mb-2">
                            <label for="lastName">N° de Garages</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="firstName">Superficie</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-2 mb-3">
                            <label for="address">Precio</label>
                            <input type="text" class="form-control" name="direccion" style="width:100px;"  required>
                            <div class="invalid-feedback">
                             Please enter your shipping address.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" name="direccion" style="width:500px;" placeholder="1350 Main St" required>
                            <div class="invalid-feedback">
                             Please enter your shipping address.
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
                        <div class="row">
                          <div class="col-md-4 mb-2" >
                            <label for="country" >Tipo de Inmueble </label>
                            <select class="custom-select d-block w-10"   name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>CASA</option>
                              <option>DEPARTAMENTO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Tipo de Operación </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>VENTA</option>
                              <option>ALQUILER</option>
                              <option>TRASPASO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Duración </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>12</option>
                              <option>6</option>
                              <option>3</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>

                          <div class="col-md-4 mb-2" >
                            <label for="country" >Departamento </label>
                            <select class="custom-select d-block w-10"   name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>LIMA</option>
                              <option>CUSCO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Provincia </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>CUSCO</option>
                              <option>LA CONVENCION</option>
                              <option>ACOMAYO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">DIstrito </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>SAN JERONIMO</option>
                              <option>SAN SEBASTIAN</option>
                              <option>SANTIAGO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                        


                        </div>
                       

                        
                        <label for="email">Descripción <span class="text-muted">(Optional)</span></label>
                        <div class="mb-3">
                          
                          <textarea name="mensaje" placeholder="Comparte tu opinión con el autor!" style="width:800px;"></textarea>
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        <div class="row">
                        
                          <div class="text-center" style="padding-left:190px;">
                            <--?php if($c->from_url){?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="img-uploaded/<--?php echo $c->from_url; ?>"
                                  style="width:30%;">
                            
                            <--?php }else{ ?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="assets/img/principal/img_avatar2.png"
                                  style="width:300px; height:180px;">
                            
                            <--?php } ?>
                            <div style="margin:20px 0 20px 20px; " >
                              <input type="file" name="archivo" >
                          </div>
                              
                          </div>
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
            -->
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
                          
                          <div class="media-body">
                          <section class="property-grid grid">
    <div class="container">
      <div class="row">
      
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>Todo</option>
                <option value="1">Nuevo a viejo</option>
                <option value="2">En Renta</option>
                <option value="3">En Venta</option>
              </select>
            </form>
          </div>
        </div>
        <?php 
          $rs=$obj->list_limit(0,$_GET['numeros']);
          foreach($rs as $inmueble):

        ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $inmueble->identificador.'<br>'.$inmueble->nombre_inmueble?> 
                    </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $inmueble->nombre_t_operacion.'  |  '.$inmueble->precio?> </span>
                  </div>
                  <a href="#" class="link-a" onclick="document.getElementById('id02').style.display='block'" >Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>


                <!-- AAAH -->

                <!--<a class="btn btn-info" onclick="document.getElementById('id02').style.display='block'"  >
              <img src="assets/icon/administrador/agregar.svg" class="p-0" style="width: 40px;" >
          </a>-->
          <div id="id02" class="modal" style="width:58%; ">

              
            <div class="row" style="margin-top:2rem; margin-botton:0rem;">
            <div class="col-md-2"></div>    

            <div class="col-md-8 pr-1 pl-5 " style="background: #ffff ; border-radius:0.70rem;"  >
            <!--order-md-1-->
            
          
          <form class="needs-validation" action="controllers/controllerAdministrador.php?tipo=inmueble" method="post" enctype="multipart/form-data" style="margin:0,0,0,40px," novalidate >
            
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </div>
                        <h4 class="mb-2 pt-0">MOdifica Este  Inmueble</h4>
                        <div class="row" style="margin-top:40px;">
                          <div class="col-md-5 mb-2 mt-1">
                            <label for="firstName">Nombre del Inmueble</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-2 mb-3">
                            <label for="lastName">N°Habitaciones</label>
                            <input type="text" class="form-control" name="habitacion" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-2 mb-3">
                            <label for="lastName">N° de Baños</label>
                            <input type="text" class="form-control" name="baño" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-2  mb-2">
                            <label for="lastName">N° de Garages</label>
                            <input type="text" class="form-control" name="garaje" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-2 mb-2">
                            <label for="firstName">Superficie</label>
                            <input type="text" class="form-control" name="superficie" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-2 mb-3">
                            <label for="address">Precio</label>
                            <input type="text" class="form-control" name="precio" style="width:100px;"  required>
                            <div class="invalid-feedback">
                             Please enter your shipping address.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" name="direccion" style="width:500px;" placeholder="1350 Main St" required>
                            <div class="invalid-feedback">
                             Please enter your shipping address.
                            </div>
                          </div>
                          

                         <!-- <div class="col-md-6 mb-3">
                          <label >Sexo </label> <br>
                          <label>Masculino 
                          <input type="radio"  name="radio" value="1">
                          <span class="checkmark"></span>
                          </label><br>
                          <label >Femenino
                          <input type="radio" name="radio" value="0">
                          <span class="checkmark"></span>
                          </label>
                          -->
                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-2" >
                            <label for="country" >Tipo de Inmueble </label>
                            <select class="custom-select d-block w-8"   name="tipo_inmueble" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>CASA</option>
                              <option>DEPARTAMENTO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Tipo de Operación </label>
                            <select class="custom-select d-block w-8" name="tipo_operacion" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>VENTA</option>
                              <option>ALQUILER</option>
                              <option>TRASPASO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3  mb-3">
                            <label for="state">Duración </label>
                            <select class="custom-select d-block w-8" name="tiempo" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>black friday</option>
                              <option>monday friday</option>
                              <option>ultraboost</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>

                          <div class="col-md-4 mb-2" >
                            <label for="country" >Departamento </label>
                            <select class="custom-select d-block w-10"   name="departamento" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>MADRE DIOS</option>
                              <option disabled>CUSCO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Provincia </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>MANU</option>
                              <option>TAMBOPATA</option>
                              <option>TAHUAMANU</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="state">DIstrito </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>HUEPETUHE</option>
                              <option>IÑAPARI</option>
                              <option>MAZUKO</option>
                              <option>INAMBARI</option>
                              <option>LABERINTO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                        
                        


                        </div>
                       

                        
                        <label for="email">Descripción <span class="text-muted">(Optional)</span></label>
                        <div class="mb-3">
                          
                          <textarea name="mensaje" placeholder="Comparte tu opinión con el autor!" style="width:850px;"></textarea>
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        <div class="row">
                        
                          <div class="text-center" style="padding-left:190px;">
                            <?php if($c->from_url){?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="img-uploaded/<?php echo $c->from_url; ?>"
                                  style="width:30%;">
                            
                            <?php }else{ ?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="assets/img/principal/img_avatar2.png"
                                  style="width:300px; height:180px;">
                            
                            <?php } ?>
                            <div style="margin:20px 0 20px 20px; " >
                              <input type="file" name="archivo" >
                          </div>
                              
                          </div>
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

              <!--  -->


                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span><?php echo $inmueble->superficie ?>m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span><?php echo $inmueble->habitaciones ?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span><?php echo $inmueble->baño ?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span><?php echo $inmueble->cochera ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
         <?php  endforeach; ?>
      
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <?php 
                $page=$obj->countRegister();
                $page=ceil(($page->total)/6);
                for($i=0;$i<$page;$i++){            
              ?>

              <li class="page-item">
                <a class="page-link" href="controllers/controllerAdministrador.php?action=limitProperty&paginas=<?php echo $i+1; ?>"><?php echo $i+1; ?></a>
              </li>
                <?php } ?>

              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section> 
                          </div>
                        </div>
                  </div>



                  <div class="tab-pane" id="settings">
                  <form class="form-horizontal"  style="padding:0 85px 0 85px;" >
                        <h4 class="mb-3 pt-5">Agrega un Nuevo Inmueble</h4>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre del Inmueble</label>
                            <input type="text" class="form-control" name="dni" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="firstName">Superficie</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Habitaciones</label>
                            <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Baños</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Garages</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">Precio del Inmubele</label>
                            <input type="number" class="form-control" name="salary" placeholder="" value="<?php echo $c->salary; ?>" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          

                         <!-- <div class="col-md-6 mb-3">
                          <label >Sexo </label> <br>
                          <label>Masculino 
                          <input type="radio"  name="radio" value="1">
                          <span class="checkmark"></span>
                          </label><br>
                          <label >Femenino
                          <input type="radio" name="radio" value="0">
                          <span class="checkmark"></span>
                          </label>
                          -->
                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-2" >
                            <label for="country" >Tipo de Inmueble </label>
                            <select class="custom-select d-block w-10"   name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>CASA</option>
                              <option>DEPARTAMENTO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Tipo de Operación </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>VENTA</option>
                              <option>ALQUILER</option>
                              <option>TRASPASO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">TIEMPO DE PUBLICIDAD enMESES </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>12</option>
                              <option>6</option>
                              <option>3</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>

                          <div class="col-md-4 mb-2" >
                            <label for="country" >Departamento </label>
                            <select class="custom-select d-block w-10"   name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>LIMA</option>
                              <option>CUSCO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Provincia </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>CUSCO</option>
                              <option>LA CONVENCION</option>
                              <option>ACOMAYO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">DIstrito </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>SAN JERONIMO</option>
                              <option>SAN SEBASTIAN</option>
                              <option>SANTIAGO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                        
                        


                        </div>
                        <div class="mb-3">
                          <label for="address">Dirección</label>
                          <input type="text" class="form-control" name="direccion" placeholder="1350 Main St" required>
                          <div class="invalid-feedback">
                            Please enter your shipping address.
                          </div>
                        </div>

                        
                        <label for="email">Descripción <span class="text-muted">(Optional)</span></label>
                        <div class="mb-5">
                          
                          <textarea name="mensaje" placeholder="Comparte tu opinión con el autor!" style="width:1180px;"></textarea>
                          <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                          </div>
                        </div>

                        
                        


                        <div class="row">
                          <div class="col-md-5 mb-3">
                            <label for="country"> Inmueble de :. </label>
                            <select class="custom-select d-block w-100" name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>Cliente</option>
                              <option>Propiedad de la empresa</option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="text-center" style="padding-left:190px;">
                            <?php if($c->from_url){?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="img-uploaded/<?php echo $c->from_url; ?>"
                                  style="width:30%;">
                            
                            <?php }else{ ?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="assets/img/principal/img_avatar2.png"
                                  style="width:300px; height:180px;">
                            
                            <?php } ?>
                            <div style="margin:20px 0 20px 20px; " >
                              <input type="file" name="archivo" >
                          </div>
                              
                          </div>
                        </div>
                  
                        
                      <div class="form-group row" style="margin:0 100px 0 0;">
                        <div class="offset-sm-2 col-sm-10">
                          <button id="infoAdicional" type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- /.tab-pane -->
                  <!-- INSERT HER START THE PERFIL-->

                        

                  <!-- END THE UNSERT-->

                  <div class="tab-pane" id="settings" style="padding:0px 150px 0px 150px;">
                   <form class="form-horizontal"  >
                        <h4 class="mb-3 pt-5">Agrega un Nuevo Inmueble</h4>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre del Inmueble</label>
                            <input type="text" class="form-control" name="dni" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="firstName">Superficie</label>
                            <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Habitaciones</label>
                            <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Baños</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">N° de Garages</label>
                            <input type="text" class="form-control" name="contacto" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">Precio del Inmubele</label>
                            <input type="number" class="form-control" name="salary" placeholder="" value="<?php echo $c->salary; ?>" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          

                         <!-- <div class="col-md-6 mb-3">
                          <label >Sexo </label> <br>
                          <label>Masculino 
                          <input type="radio"  name="radio" value="1">
                          <span class="checkmark"></span>
                          </label><br>
                          <label >Femenino
                          <input type="radio" name="radio" value="0">
                          <span class="checkmark"></span>
                          </label>
                          -->
                        </div>
                        <div class="row">
                          <div class="col-md-4 mb-2" >
                            <label for="country" >Tipo de Inmueble </label>
                            <select class="custom-select d-block w-10"   name="country" required>
                              <option value="" disabled >Seleccione...</option>
                              <option>CASA</option>
                              <option>DEPARTAMENTO</option>
                            </select>
                            <div class="invalid-feedback" >
                              Please select a valid country.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">Tipo de Operación </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>VENTA</option>
                              <option>ALQUILER</option>
                              <option>TRASPASO</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="state">TIEMPO DE PUBLICIDAD enMESES </label>
                            <select class="custom-select d-block w-100" name="state" required>
                              <option value="" disabled>Seleccione...</option>
                              <option>12</option>
                              <option>6</option>
                              <option>3</option>

                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
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
                  
                        <div class="text-center" >
                            <?php if($c->from_url){?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="img-uploaded/<?php echo $c->from_url; ?>"
                                  style="width:30%;">
                            
                            <?php }else{ ?>
                                <img class="profile-user-img img-fluid img-circle"
                                  src="assets/img/principal/img_avatar2.png"
                                  style="width:300px; height:180px;">
                            
                            <?php } ?>
                            <div style="margin:20px 0 20px 20px; " >
                              <input type="file" name="archivo" >
                          </div>
                              
                          </div>
                      <div class="form-group row" style="margin:0 100px 0 0;">
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


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>



</body>
</html>







