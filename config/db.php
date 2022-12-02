<?php
class db{
    private $host = $DATABASE_URL;
    private $dbname = $DB_NAME;
    private $user = $DB_USER;
    private $password = $DB_PASS;

    public function conexion(){
        try{
            $PDO = new PDO("pgsql:dbname=".$this->dbname." host=".$this->host ,$this->user,$this->password);
            return $PDO;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}

?>