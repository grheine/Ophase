<?php
/**
 * Project: O-Phasen-Anmeldung (Fachschaft Physik, KIT)
 * Function: Class managing the pdo connection
 */

require_once("config.php");

class Database
{
    private $is_connected = false;
    private $pdo;

    public function connect(){
        if ($this->is_connected && !is_null($this->pdo)){
            return $this->pdo;
        } else{
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
            try{
                $this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false]);
                $this->is_connected = true;
                return $this->pdo;
            }catch (PDOException $ex){
                return null;
            }

        }
    }

}
