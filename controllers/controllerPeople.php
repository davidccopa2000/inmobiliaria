<?php
if(isset($_SERVER['REQUEST_METHOD'])){

    /** 
     * 
     *configurar segun al metodo POST
    */
    if($_SERVER['REQUEST_METHOD']==='POST'){
        require_once("../models/people.php");

        $people= new people();
        /**
         * capturamos datos enviados del formulario
         */
        $user=$_POST['username'];//DILAN
        $pass=$_POST['password'];//1234

        $obj=$people->validar($user,$pass);
        
        
        if(!$obj){
            /**
             * si el user no existe redirigimos al index
             */
            header("location:http://localhost/inmobiliaria/");
        }else if($obj->is_user=='1' && $obj->is_active=='1'){
            
            /**
             * usamos el objeto que nos retorna
             */
            
            session_start();
            $_SESSION['name']=$obj->first_name.' '.$obj->last_name;
            $_SESSION['rol']=$rol=$obj->is_user;
            $_SESSION['id']=$obj->id_people;
            $people->status_loguin_on($_SESSION['id']);

            header("location:http://localhost/inmobiliaria/administrador.php");
      
        }else if($obj->is_user=='2' && $obj->is_active=='1'){

                /**
             * NOTA:::::----FALTA
             * configurar segun usuario
             */
            session_start();
            $_SESSION['name']=$obj->first_name.' '.$obj->last_name;
            $_SESSION['rol']=$rol=$obj->is_user;
            $_SESSION['id']=$obj->id_people;
            $people->status_loguin_on($_SESSION['id']);
            header("location:http://localhost/inmobiliaria/empleado.php");
            /**
             * NOTA:::::----FALTA
             * configurar segun usuario
             */
      
        }else if($obj->is_user=='3'){

            /**
             * NOTA:::::----FALTA  ojito
             * configurar segun usuario
             */
            header("location:http://localhost/inmobiliaria/");
      
        }else{
            header("location:http://localhost/inmobiliaria/");
        }
        
    }else {
        /**
         * VALIDAMOS QUE SOLO NOS HAGAN PETICIONES TIPO POST
         */
        header("location:http://localhost/inmobiliaria/404.html");
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}