<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inmobiliaria Ccopita</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/principal/l.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="assets/css/principal/login.css" rel="stylesheet">

  <!-- =======================================================
    Tittle project: Inmobiliaria CCopita
   
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Buscar Propiedad</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Palabra Clave</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Palabra Clave">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Tipo</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Todo Tipo</option>
                <option>En Renta</option>
                <option>En Venta</option>
                <option>Casa Abierta</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Ciudad</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Toda la Ciudad</option>
                <option>Huepetuhe</option>
                <option>Laberinto</option>
                <option>Iberia</option>
                <option>Puerto Maldonado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Dormitorios</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Cualquier</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garajes</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Cualquier</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Baños</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Cualquier</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Precio Mínimo</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Ilimitado</option>
                <option>S/50,000</option>
                <option>S/100,000</option>
                <option>S/150,000</option>
                <option>S/200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Buscar Propiedad</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <a href="index.php">
    <img src="assets/img/principal/inmue.svg" rel="icon" style="padding-left:350px; width:90%"  position alt="">
  </a>
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Inmobiliaria<span class="color-b">Ccopita</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Propiedad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Páginas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.php">Propiedad Individual</a>
              <a class="dropdown-item" href="blog-single.php">Blog Individual</a>
              <a class="dropdown-item" href="agents-grid.php">Cuadrícula de Agentes</a>
              <a class="dropdown-item" href="agent-single.php">Agente Individual</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contacto</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"  style="width:2.5rem; margin=2rem;" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; height:3rem; ">Login</button>

      <div id="id01" class="modal">
          
          <form class="modal-content animate" action="controllers/controllerPeople.php" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
                
              <button type="submit" action="">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
           </form>
      </div>

    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
   <!--/ Intro Single star /-->
   <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">200 Greco Romano</h1>
            <span class="color-text-a">Iberia, Tahuamanu 17251</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Inicio</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Propiedades</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                200 Greco Romano
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="img/slide-2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/slide-3.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/slide-1.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">S/</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">12000</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Sumario rápido</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Propiedad ID:</strong>
                      <span>01</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Localización:</strong>
                      <span>Iberia, Tahuamanu 17251</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Tipo Propiedad:</strong>
                      <span>Casa</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Estado:</strong>
                      <span>Venta</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Camas:</strong>
                      <span>4</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baños:</strong>
                      <span>2</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garajes:</strong>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Descripción de Propiedad</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet
                  aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                  Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                  nibh pulvinar quam id dui posuere blandit.
                </p>
                <p class="description color-text-a no-margin">
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                  malesuada. Quisque velit nisi,
                  pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Comodidades</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Balcón</li>
                  <li>Cocina al aire libre</li>
                  <li>Televisión por cable</li>
                  <li>Cubierta</li>
                  <li>Canchas de tenis</li>
                  <li>Internet</li>
                  <li>Estacionamiento</li>
                  <li>Habitació Solar</li>
                  <li>Pisos de concreto</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                aria-controls="pills-video" aria-selected="true">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                aria-selected="false">Planos de planta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                aria-selected="false">Ubicación</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="img/plan2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Agente de contacto</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="img/agent-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">Anabella Geller</h4>
                <p class="color-text-a">
                  Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                  dui. Quisque velit nisi,
                  pretium ut lacinia in, elementum id enim.
                </p>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Teléfono:</strong>
                    <span class="color-text-a">(222) 4568932</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Celular:</strong>
                    <span class="color-text-a">777 287 378 737</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Correo Electrónico:</strong>
                    <span class="color-text-a">annabella@gmail.com</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Skype:</strong>
                    <span class="color-text-a">Annabela.ge</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
                <form class="form-a">
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="Nombre *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Correo Electrónico *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comentario *" name="message" cols="45"
                          rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a">Enviar Mensaje</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

  <!--/ Property Single End /-->

  <!--/ footer Star /-->
  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Agente Inmobiliaria</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Me pregunto que vendrá sin ejercicio, el distrito escolar puede que no funcione aliquip exea conveniencia fotografía tarea
                Pero si cupidatat.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">La Compañia</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agente Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Carreras</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Afiliados</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Política y Privacidad</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Ciudades</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Arequipa</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Cusco</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Madre de Dios</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Lima</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Loreto</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">La libertad</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">Inicio</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Nosotros</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Inmuebles</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Blog</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Paginas</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Contacto</a>
            </li>
          </ul>
        </nav>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">InmobiliariaCcopita</span> Todos los Derechos Reservados.
          </p>
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
         
          -->
          Diseñado por <a href="https://bootstrapmade.com/">@Ccopita</a>
        </div>
      </div>
    </div>
  </div>
</footer>
  <!--/ Footer End /-->
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
