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
class empleado{
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
   /** new PEOPLE OF TYPE EMPLOYEE */
   public function createPeopleE($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$ruta){
        $active=1;
        $logueado=0;
        $var=null;

        $sql="INSERT INTO people VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($logueado,$dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$logueado,2,$ruta));
    }public function createPeopleA($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$ruta){
        $active=1;
        $logueado=0;
        $var=null;

        $sql="INSERT INTO people VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($logueado,$dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$logueado,1,$ruta));
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

    public function createEmployee($dni,$salary,$date_in,$date_out){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */

        $var=0; // var autoincrement
        $idEmployee=$this->generateIdEmployee();
        $sql="INSERT INTO employee  VALUES(?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$idEmployee->id,$idPeople->id_people,$salary,$date_in,$date_out));
    }
    private function generateIdEmployee(){

        $sql="SELECT fnReturnId('4') AS id";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
    }
     public function eliminarEmpleado($idPeople){
        $sql="DELETE FROM employee WHERE id_people=? ";
        $rss=$this->con->prepare($sql);
        $rss->execute(array($idPeople));
        $sql="DELETE FROM people WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }
    public function updateEmployee($dni,$salary,$date_in,$date_out){
        $idPeople=$this->getIdPeople($dni);
     
        $idClient=$this->generateIdEmployee();
        $sql="UPDATE employee SET salary=?,date_in=?,date_out=? WHERE id_people =?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($salary,$date_in,$date_out,$idPeople->id_people));
    }

    /** HERE GOING TO CREATE ADMINS */

    /**CRUD FOR THE ADMINS */

    public function listUsersAdmin(){
        $sql="SELECT id_people,dni,first_name,last_name,adress,email,is_active FROM people WHERE is_user=1";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
    public function getUsersAdmin(){
        $sql="SELECT people.*,employee.salary,employee.date_in,employee.date_out FROM people,employee  WHERE people.id_people=employee.id_people AND  is_user=1";
        $rs=$this->con->prepare($sql); 
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }

    public function createAdmin($dni,$salary,$date_in,$date_out){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */

        $var=0; // var autoincrement
        $idAdmin=$this->generateIdAdmin();
        $sql="INSERT INTO employee  VALUES(?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$idAdmin->id,$idPeople->id_people,$salary,$date_in,$date_out));
    }
    private function generateIdAdmin(){

        $sql="SELECT fnReturnId('4') AS id";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
    }
     public function eliminarAdmin($idPeople){
        $sql="DELETE FROM employee WHERE id_people=? ";
        $rss=$this->con->prepare($sql);
        $rss->execute(array($idPeople));
        $sql="DELETE FROM people WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }
    public function updateAdmin($dni,$salary,$date_in,$date_out){
        $idPeople=$this->getIdPeople($dni);
     
        $idClient=$this->generateIdAdmin();
        $sql="UPDATE employee SET salary=?,date_in=?,date_out=? WHERE id_people =?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($salary,$date_in,$date_out,$idPeople->id_people));
    }

    /** CRUD INMUEBLE NOT USE FOR MOMET    */

    public function listInmueble($var){
        
        $sql="SELECT a.identificador, a.nombre_inmueble ,e.nombre_t_inmueble ,d.nombre_distrito ,a.direccion ,a.numero ,a.superficie ,
        a.habitaciones ,a.baño ,a.cochera ,a.descripcion ,a.precio ,a.from_url ,a.fecha ,a.tipo ,b.id_operacion ,b.id_people ,
        c.nombre_t_operacion,f.id_contrato,f.identificador as id_contrato,g.tiempo ,f.contrato 
        from inmueble as a inner join operacion as b on a.id_inmuebe=b.id_inmueble 
        inner join tipo_operacion as c on b.tipo_operacion=c.id_t_operacion inner join distrito as d on a.id_distrito =d.id_distrito
        inner join tipo_inmueble as e on a.tipo_inmueble=e.id_tipo_inmueble inner join contrato as f  on b.id_operacion=f.id_operacion
        inner join tipo_contrato as g on f.id_t_contrato=g.id_t_contrato  where a.tipo =?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var));
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }


    /** CREATE PAGINATION FOR PROPERTY */ 

    public function countRegister(){
        $sql="SELECT COUNT(id_inmuebe) AS total FROM inmueble where tipo=0 ";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_OBJ);
		}

		/*
		 * function is use for list view  inmueble-pagination
		 * METHOD IS GET 
		 * */
    public function list_limit($var,$page){
        if($page>1){
            $page=$page*6-6;
        }else{
            $page=0;
        }
        $sql="SELECT a.identificador, a.nombre_inmueble ,e.nombre_t_inmueble ,d.nombre_distrito ,a.direccion ,a.numero ,a.superficie ,
        a.habitaciones ,a.baño ,a.cochera ,a.descripcion ,a.precio ,a.from_url ,a.fecha ,a.tipo ,b.id_operacion ,b.id_people ,
        c.nombre_t_operacion,f.id_contrato,f.identificador as id_contrato,g.tiempo ,f.contrato 
        from inmueble as a inner join operacion as b on a.id_inmuebe=b.id_inmueble 
        inner join tipo_operacion as c on b.tipo_operacion=c.id_t_operacion inner join distrito as d on a.id_distrito =d.id_distrito
        inner join tipo_inmueble as e on a.tipo_inmueble=e.id_tipo_inmueble inner join contrato as f  on b.id_operacion=f.id_operacion
        inner join tipo_contrato as g on f.id_t_contrato=g.id_t_contrato  where a.tipo =?  limit $page,6";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var));
        return $rs->fetchAll(PDO::FETCH_OBJ);
		}

		/*
		 * METHOD IS POST
		 * */
		public function insert_inmueble($dni,$n_inmu,$t_inmu,$dist,$direc,$num,$superf,$habit,$banio,$cochera,$descrip,$precio,$url,$tipo_oper,$name_t_cont,$contrato,$tipos){
			  $sql="CALL spRegistrarInmueble(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$rs=$this->con->prepare($sql);
				$rs->execute(array($dni,$n_inmu,$t_inmu,$dist,$direc,$num,$superf,$habit,$banio,$cochera,$descrip,$precio,$url,$tipo_oper,$name_t_cont,$contrato,$tipos));
		}
		

    /** CERRANDO SESSIONN  */
    public function status_loguin_off($idPeople){
        $sql="UPDATE people SET is_staff=0 WHERE id_people=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }





}
