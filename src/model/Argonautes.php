<?php


class Argonautes
{
    private $handle;

    public function __construct()
    {
        $bd = AccessBDD::getConnection();
        $this->handle = $bd->getHandle();
    }

    public function getArgonautes(){
        try{
            $query = $this->handle->prepare('SELECT * FROM `argonautes`');
            $query->execute();
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $e){
            return $e;
        }
    }

    public function addArgonautes($name){
        $request = $this->handle->prepare('INSERT INTO `argonautes` (argonautes_name) VALUE (?)');
        $request->execute(array($name));
    }

}