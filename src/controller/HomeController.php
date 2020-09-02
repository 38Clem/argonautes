<?php


class HomeController
{
    private $argonautes;

    public function __construct()
    {
        $this->argonautes = new Argonautes();
    }
    public function manage()
    {
        if(isset($_POST["name"])){
            $this->argonautes->addArgonautes($_POST["name"]);
        }

        try{
            $argonauteList = $this->argonautes->getArgonautes();
        }catch (PDOException $e){
            $e->getMessage();
        }

        include (__DIR__ . "./../view/home.php");
    }

}