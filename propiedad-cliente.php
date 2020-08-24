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
          <a class="dropdown-item text-primary" href="?a=pageDocente">Clientes</a>
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
</nav>


<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"> Increíbles propiedades de Nuestros Clientes</h1>
            <span class="color-text-a">Cuadrícula de Propiedades </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Cuadrícula de Propiedades
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
   
  </section>
  <!--/ Intro Single End /-->




    


  <!--/ Property Grid Star /-->
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
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
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
  <!--/ Property Grid End /-->
  <!--/ Property Grid End /-->




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








