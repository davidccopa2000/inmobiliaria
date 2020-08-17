<?php
if(isset($ctrl)){
    /**
     * importando database-config/controller
     */
    require_once("../config/database.php");
    require_once("../config/config.php");
    require_once("../config/Igestor.php");
    require_once("../config/mysql.php");
}else{
    require_once("config/database.php");
}
class administrador{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
    }





    /*CRUD PEOPLE*/
    private function getIdPeople($dni){
        $sql="SELECT id_people FROM people WHERE dni=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($dni));
        return $rs->fetch(PDO::FETCH_OBJ);
    }


    public function createPeople($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$ruta){
        $active=1;
        $logueado=0;
        $var=null;

        $sql="INSERT INTO people VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($logueado,$dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$logueado,3,$ruta));
    }


    public function updatePeople($id_people,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$is_user,$ruta){
        $sql="UPDATE people SET first_name=?,last_name =?,adress=?,phone =?,email =?,sexo =?,date_birthday=?,user_name=?,pass=?,is_active=?,is_user=?,from_url=? WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$is_user,$ruta,$id_people));
    }


    /*CRUD CLIENT
    /**
     * get all users from table people
     */
    public function listUsers(){
        $sql="SELECT id_people,dni,first_name,last_name,adress,email,is_active FROM people WHERE is_user=3";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    public function getUsers(){
        $sql="SELECT people.*,client.ruc_client FROM people,client  WHERE people.id_people=client.id_people AND  is_user=3 ";
        $rs=$this->con->prepare($sql); 
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * set register user client
     */ 
    public function createClient($dni){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */

        $var=0; // var autoincrement
        $ruc="";
        $idClient=$this->generateIdClient();
        $sql="INSERT INTO  client VALUES(?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$idClient->id,$idPeople->id_people,$ruc));
    }
   

    //, last_name =?,adress=?,phone =?,email =?,sexo =?,date_birthday=?,user_name=?,pass=?,is_active=?,is_staff=?,is_user=?,from_url=?

    //,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$staff,$is_user,$ruta,
    public function updateClient($dni,$ruc_client){
        $idPeople=$this->getIdPeople($dni);
     
        $idClient=$this->generateIdClient();
        $sql="UPDATE client SET ruc_client=? WHERE id_people =?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($ruc_client,$idPeople->id_people));
    }
    
    private function generateIdClient(){

        $sql="SELECT fnReturnId('3') AS id";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
    }
    public function eliminarCliente($idPeople){
        $sql="DELETE FROM client WHERE id_people=? ";
        $rss=$this->con->prepare($sql);
        $rss->execute(array($idPeople));
        $sql="DELETE FROM people WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }




    /*GENERATE PHOTO OF ADMINIStRADOR*/
    public function getPhoto($id){
        $sql="SELECT from_url FROM people WHERE id_people=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($id));
        return $rs->fetch(PDO::FETCH_OBJ);
    }
  


    /*CRUD <EMPLOYEE>*/


      public function listUsersEmployee(){
        $sql="SELECT id_people,dni,first_name,last_name,adress,email,is_active FROM people WHERE is_user=2";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    public function getUsersEmployee(){
        $sql="SELECT people.*,employee.salary,employee.date_in,employee.date_out FROM people,employee  WHERE people.id_people=employee.id_people AND  is_user=2";
        $rs=$this->con->prepare($sql); 
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }

    public function createEmployee($dni){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */

        $var=0; // var autoincrement
        $ruc="";
        $idClient=$this->generateIdEmployee();
        $sql="INSERT INTO  employee VALUES(?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$idClient->id,$idPeople->id_people,$ruc));
    }
    private function generateIdEmployee(){

        $sql="SELECT fnReturnId('4') AS id";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
    }



}