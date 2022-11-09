<?php
function connect(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "php";
    try{
        //PDO("mysql:host=localhost;dbname=cba_pqrs,root,123568");
        $pdo = new PDO ('mysql:host=' .$host. ';dbname='.$database,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }catch(PDOException $e ){
        die($e->getmessage());
    }
}


?>