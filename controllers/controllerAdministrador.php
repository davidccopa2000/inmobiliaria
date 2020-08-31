<?php
//require_once('models/administrador.php');
//require_once("../bin/sesion.php");
if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['actualizar'])){

            if($_GET['tipo']=="cliente"){
                    
                    $ctrl=true;
                    require_once("../models/administrador.php");
                    $obj= new administrador();
                    $dni=$_POST['dni'];
                    $nombre=$_POST['nombre'];
                    $apellido=$_POST['apellido'];
                    $direccion=$_POST['direccion'];
                    $tel=$_POST['tel'];
                    $email=$_POST['email'];
                    $sexo=$_POST['radio'];
                    $birthDay=$_POST['fecha'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                   
                    $is_active=($_POST['is_active']=="Vigente")?"1":"0";
                    if($_POST['is_user']=="Cliente"){
                        $is_user="3";
                    }else if($_POST['is_user']=="Empleado"){
                        $is_user="2";
                    }
                    else{
                        $is_user="1";
                    }
                   
                    $id=$_GET['id'];
                    $ruc_client=$_POST['ruc_client'];

                    $fileName=$_FILES['archivo']['name'];
                    $save=$_FILES['archivo']['tmp_name'];
                    move_uploaded_file($save,'../img-uploaded/'.$fileName);
                    
                    $obj->updatePeople($id,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$is_active,$is_user,$fileName);
                    $obj->updateClient($dni,$ruc_client);
                   // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
                   header("location:http://localhost/inmobiliaria/admin-tabla-clientes.php");
            }else if($_GET['tipo']=="empleado"){
                    
                $ctrl=true;
                require_once("../models/administrador.php");
                $obj= new administrador();
                $dni=$_POST['dni'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $direccion=$_POST['direccion'];
                $tel=$_POST['tel'];
                $email=$_POST['email'];
                $sexo=$_POST['radio'];
                $birthDay=$_POST['fecha'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               
                $is_active=($_POST['is_active']=="Vigente")?"1":"0";
                if($_POST['is_user']=="Cliente"){
                    $is_user="3";
                }else if($_POST['is_user']=="Empleado"){
                    $is_user="2";
                }
                else{
                    $is_user="1";
                }
               
                $id=$_GET['id'];
                $salary=$_POST['salary'];
                $date_in=$_POST['date_in'];
                $date_out=$_POST['date_out'];
                $fileName=$_FILES['archivo']['name'];
                $save=$_FILES['archivo']['tmp_name'];
                move_uploaded_file($save,'../img-uploaded/'.$fileName);
                
                $obj->updatePeople($id,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$is_active,$is_user,$fileName);
                $obj->updateEmployee($dni,$salary,$date_in,$date_out);
               // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
               header("location:http://localhost/inmobiliaria/admin-tabla-empleados.php");
            }else if($_GET['tipo']=="admin"){
                    
                $ctrl=true;
                require_once("../models/administrador.php");
                $obj= new administrador();
                $dni=$_POST['dni'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $direccion=$_POST['direccion'];
                $tel=$_POST['tel'];
                $email=$_POST['email'];
                $sexo=$_POST['radio'];
                $birthDay=$_POST['fecha'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
               
                $is_active=($_POST['is_active']=="Vigente")?"1":"0";
                if($_POST['is_user']=="Cliente"){
                    $is_user="3";
                }else if($_POST['is_user']=="Empleado"){
                    $is_user="2";
                }
                else{
                    $is_user="1";
                }
               
                $id=$_GET['id'];
                $salary=$_POST['salary'];
                $date_in=$_POST['date_in'];
                $date_out=$_POST['date_out'];
                $fileName=$_FILES['archivo']['name'];
                $save=$_FILES['archivo']['tmp_name'];
                move_uploaded_file($save,'../img-uploaded/'.$fileName);
                
                $obj->updatePeople($id,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$is_active,$is_user,$fileName);
                $obj->updateAdmin($dni,$salary,$date_in,$date_out);
               // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
               header("location:http://localhost/inmobiliaria/admin-tabla-admins.php");
              
            }else if($_GET['tipo']=="inmueble"){
                    
                $ctrl=true;
                require_once("../models/administrador.php");
                $obj= new administrador();
                
                $nombre=$_POST['nombre'];
                $tipo_inmueble=$_POST['tipo_inmueble'];
                $distrito=$_POST['distrito'];
                $direccion=$_POST['direccion'];
                $superficies=$_POST['superficies'];
                $habitaciones=$_POST['habitaciones'];
                $baños=$_POST['baños'];
                $cocheras=$_POST['cocheras'];
                $mensaje=$_POST['mensaje'];
                $precio=$_POST['precio'];
                
                $tipo_operacion=$_POST['tipo_operacion'];
                $tiempo=$_POST['tipo_contrato'];
                if($tiempo==12){
                    $tiempo="BLACK FRIDAY";
                }
                else if($tiempo==6){
                    $tiempo="MONDAY FRIDAY";
                }
                else{
                    $tiempo="ULTRABOOST";
                }
               
                
                $fileName=$_FILES['archivo']['name'];
                $save=$_FILES['archivo']['tmp_name'];
                move_uploaded_file($save,'../img-uploaded-in/'.$fileName);
                $id=$_GET['id'];
                echo "$id";
               // $obj->updateInmueble($id,$nombre,$tipo_inmueble,$ditrito,$direccion,$superficies,$habitaciones,$baños,$cocheras,$mensaje,$precio,$fileName,$tipo_operacion,$tiempo);
               
               // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
               //header("location:http://localhost/inmobiliaria/beta-view.php");
              
            }
                        
            
        }else if(isset($_GET['tipo'])){
            if($_GET['tipo']=="cliente"){
                /**
                 * logica de registro con ddbb
                 * 
                 */                
                    $ctrl=true;
                    require_once("../models/administrador.php");
                    $obj= new administrador();
                    $dni=$_POST['dni'];
                    $nombre=$_POST['nombre'];
                    $apellido=$_POST['apellido'];
                    $direccion=$_POST['direccion'];
                    $tel=$_POST['contacto'];
                    $email=$_POST['email'];
                    $sexo=$_POST['radio'];
                    $birthDay=$_POST['fecha'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                // href="controllers/controllerAdministrador.php?action=registrarCliente"
                    //echo "estamos aqui";
                 
                    $fileName=$_FILES['archivo']['name'];
                    $save=$_FILES['archivo']['tmp_name'];
                    move_uploaded_file($save,'../img-uploaded/'.$fileName);
                     //echo "estamos aqui";
                   // print_r($fileName);
                    //print_r($save);
                    $obj->createPeople($dni,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$fileName);
                    $obj->createClient($dni);
                    //$obj=null;
                // $ctrl=null;
                    header("location:http://localhost/inmobiliaria/admin-tabla-clientes.php");
              
            }else if($_GET['tipo']=="empleado"){
                /**
                * logica de registro con ddbb
                * 
                */                
               $ctrl=true;
               require_once("../models/administrador.php");
               $obj= new administrador();
               $dni=$_POST['dni'];
               $nombre=$_POST['nombre'];
               $apellido=$_POST['apellido'];
               $direccion=$_POST['direccion'];
               $tel=$_POST['contacto'];
               $email=$_POST['email'];
               $sexo=$_POST['radio'];
               $birthDay=$_POST['fecha'];
               $user=$_POST['user'];
               $pass=$_POST['pass'];
           // href="controllers/controllerAdministrador.php?action=registrarCliente"
               //echo "estamos aqui";
            
               /*$fileName=$_FILES['archivo']['name'];
               $save=$_FILES['archivo']['tmp_name'];
               move_uploaded_file($save,'../img-uploaded/'.$fileName);}*/
                //echo "estamos aqui";
              // print_r($fileName);
               //print_r($save);
               $salary=$_POST['salary'];
               $date_in=$_POST['date_in'];
               $date_out=$_POST['date_out'];
              // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
               $obj->createPeopleE($dni,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$fileName);
               $obj->createEmployee($dni,$salary,$date_in,$date_out);
               //$obj=null;
           // $ctrl=null;
               header("location:http://localhost/inmobiliaria/admin-tabla-empleados.php");
           
            }else if($_GET['tipo']=="admin"){
                /**
                * logica de registro con ddbb
                * 
                */                
               $ctrl=true;
               require_once("../models/administrador.php");
               $obj= new administrador();
               $dni=$_POST['dni'];
               $nombre=$_POST['nombre'];
               $apellido=$_POST['apellido'];
               $direccion=$_POST['direccion'];
               $tel=$_POST['contacto'];
               $email=$_POST['email'];
               $sexo=$_POST['radio'];
               $birthDay=$_POST['fecha'];
               $user=$_POST['user'];
               $pass=$_POST['pass'];
           // href="controllers/controllerAdministrador.php?action=registrarCliente"
               //echo "estamos aqui";
            
               /*$fileName=$_FILES['archivo']['name'];
               $save=$_FILES['archivo']['tmp_name'];
               move_uploaded_file($save,'../img-uploaded/'.$fileName);}*/
                //echo "estamos aqui";
              // print_r($fileName);
               //print_r($save);
               $salary=$_POST['salary'];
               $date_in=$_POST['date_in'];
               $date_out=$_POST['date_out'];
              // echo "estamos en update clint".$dni.$nombre.$apellido.$direccion.$tel.$email.$sexo.$birthDay.$user.$pass.$is_active.$is_user.$is_staff;
               $obj->createPeopleA($dni,$nombre,$apellido,$direccion,$tel,$email,$sexo,$birthDay,$user,$pass,$fileName);
               $obj->createAdmin($dni,$salary,$date_in,$date_out);
               //$obj=null;
           // $ctrl=null;
               header("location:http://localhost/inmobiliaria/admin-tabla-admins.php");
           
            }else if($_GET['tipo']=="inmueble"){
                    session_start();
                    $ctrl=true;
                    require_once("../models/administrador.php");
                    $obj= new administrador();
                    $dni=$_SESSION['dni'];
                    $nombre=$_POST['nombre'];
                    $tipo=$_POST['tipo_inmueble'];
                    $distrito=$_POST['distrito'];
                    $direccion=$_POST['direccion'];
                    $superficie=$_POST['superficie'];
                    $habitaciones=$_POST['habitaciones'];
                    $baños=$_POST['baños'];
                    $cocheras=$_POST['cocheras'];
                    $mensaje=$_POST['mensaje'];
                    $precio=$_POST['precio'];
                    $foto="NULL";
                    $tipo_operacion=$_POST['tipo_operacion'];
                    $tiempo=$_POST['tiempo'];
                    if($tiempo==12){
                        $tiempo="BLACK FRIDAY";
                    }
                    else if($tiempo==6){
                        $tiempo="MONDAY FRIDAY";
                    }
                    else{
                        $tiempo="ULTRABOOST";
                    }
                   
                    $tipo_1=0;
 
                    /*echo $dni;
                    echo $nombre."-";
                    echo $tipo."-";
                    echo $distrito."-";
                    echo $direccion."-";
                    echo $superficie."-";
                    echo $habitaciones."-";
                    echo $baños."-";
                    echo $cocheras."-";
                    echo $mensaje."-";

                    echo $precio."-";
                    echo $foto."-";
                    
                    echo $tipo_operacion."-";
                    echo $tiempo."-";
                    echo $tipo_1;
                    /*echo $depa."-";
                    echo $provincia."-";
                   
                    
                    echo $mensaje."-";*/

                    //echo $dni;
                    $obj->insertInmueble($dni,$nombre,$tipo,$distrito,$direccion,$superficie,$habitaciones,$baños,$cocheras,$mensaje,$precio,$foto,$tipo_operacion,$tiempo,$tipo_1);
                     header("location:http://localhost/inmobiliaria/beta-view.php");
            }



        }

    }else if($_SERVER['REQUEST_METHOD']==='GET'){
        
        if($_GET['action']=="salir"){
           
            session_start();  
            $ctrl=true;
            require_once("../models/administrador.php");
            $obj=new administrador();
            $obj->status_loguin_off($_SESSION['id']);
            session_unset();
            session_destroy();
            /**
             * redirigiendo 
             */
            header("location:http://localhost/inmobiliaria/index.php");

        }else if($_GET['action']=="ListarClientes"){
            /**
             * redirigiendo 
             */

            header("location:http://localhost/inmobiliaria/admin-tabla-clientes.php");
        }

        else if($_GET['action']=="registrarCliente"){

            header("location:http://localhost/inmobiliaria/add-table-cliente.php");

            
        }else if($_GET['action']=="eliminarCliente"){
            
            $idPeople=$_GET['idPeople'];
            $ctrl=true;
            require_once("../models/administrador.php");
            $obj= new administrador();
            $obj->eliminarCliente($idPeople);
            header("location:http://localhost/inmobiliaria/admin-tabla-clientes.php");

        }else if($_GET['action']=="infoCliente"){

            header("location:http://localhost/inmobiliaria/info-tabla-cliente.php?idCliente=".$_GET['idPeople']);

        }

        /*desde AQUI empiesa el controlador para EMpleado*/

        else if($_GET['action']=="ListarEmpleados"){

            header("location:http://localhost/inmobiliaria/admin-tabla-empleados.php");

        }else if($_GET['action']=="eliminarEmpleado"){
            
            echo "estamos dentro del controller eliminar client";
            /**$idPeople=$_GET['idPeople'];
            $ctrl=true;
            require_once("../models/administrador.php");
            $obj= new administrador();
            $obj->eliminarEmpleado($idPeople);
            header("location:http://localhost/inmobiliaria/admin-tabla-empleados.php");*/

        }

         /*desde AQUI empiesa el controlador para Admins*/

         else if($_GET['action']=="ListarAdmin"){

            header("location:http://localhost/inmobiliaria/admin-tabla-admins.php");

        }else if($_GET['action']=="eliminarAdmin"){
            
            $idPeople=$_GET['idPeople'];
            $ctrl=true;
            require_once("../models/administrador.php");
            $obj= new administrador();
            $obj->eliminarAdmin($idPeople);
            header("location:http://localhost/inmobiliaria/admin-tabla-admins.php");

        }


        else if($_GET['action']=="limitProperty"){
            
            $pagina=$_GET['paginas'];
            header("location:http://localhost/inmobiliaria/beta-view.php?numeros=$pagina");

        }



        /**des de aqui empiesa el controllador para admin */
     
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}
