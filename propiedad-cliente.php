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
     <img src="assets/img/administrador/admin3.jpg" alt="Logo" style="width:40px; border-radius:55%;">
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
          <a class="dropdown-item text-primary" href="?a=pageDocente">Propias</a>
          <a class="dropdown-item text-primary" href="#">Clientes</a>
        </div>
        </li>
<!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Usuarios
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Empleados</a>
          <a class="dropdown-item text-primary" href="controllers/controllerAdministrador.php?action=ListarClientes">Clientes</a>
          <a class="dropdown-item text-primary" href="#">Administradores</a>
        </div>
        </li>
    </ul>
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
            <h1 class="title-single">Nuestras increíbles propiedades</h1>
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
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">205 Sarabia
                      <br /> Clásico</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">206 Arabia
                      <br /> Saudita</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">200 Greco
                      <br /> Romano</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">207 Sandoval
                      <br /> Parque</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-8.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">201 Selva
                      <br /> Negra</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">204 Real
                      <br /> Encino</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Renta | S/ 12.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Haga clic aquí para ver
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Camas</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
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




<table class="table table-hover table-bordered mt-3">
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
        <tbody id="myTable" class="bg-secondary text-white">
            <!-- contenido DOCENTE API -->
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
        </tbody>
      </table>
  </div>

  <ul id="table-pagination-global" class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>

</div>






