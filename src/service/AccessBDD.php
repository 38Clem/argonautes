<?php


class AccessBDD
{
    public static $instance = null;
    private $handle;
    private $host;
    private $dbName;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbName = "jason";
        $this->user = "root";
        $this->password= "";
        $this->handle = null;

        try{

            $this->handle = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8",
                $this->user,
                $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );

        } catch (PDOException $e){
            return $e->getMessage();
        }



    }

    public function getHandle(){
        return $this->handle;
    }

    public static function getConnection()
    {
        if(is_null(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

}

