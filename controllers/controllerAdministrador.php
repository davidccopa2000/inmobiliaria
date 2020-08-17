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
              
            }
        }

    }else if($_SERVER['REQUEST_METHOD']==='GET'){
        if($_GET['action']=="salir"){
            session_start();
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
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}