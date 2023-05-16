<?php

class conection
{
    public $server = 'sql10.freemysqlhosting.net';
    public $user = "sql10618119";
    public $password = "4NHAsCAvnP";

    public $conection;


    public function __construct()
    {
        try{
            $username="sql10618119";
            $password="4NHAsCAvnP";
            $database="sql10618119";

            $mysqli = new mysqli("sql10.freemysqlhosting.net", $username, $password, $database);

            //echo $mysqli->query("SELECT * FROM `imagenes`") ."funciono" ;
            foreach($mysqli->query("SELECT * FROM `imagenes`") as $clave => $valor) {
                print "$clave => $valor\n";
                foreach ($valor as &$valor1) {
                    print($valor1);
                }
            }
            echo "\n";

        }catch (PDOException $e) {
            echo 'error' . $e;
        }


        //try {
        //    $this->conection= new PDO("mysql:host=" . $this->server . ";dbname=	sql10618119", $this->user, $this->password);
        //    $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //} catch (PDOException $e) {
        //    echo 'error' . $e;
        //}
    }
    public function execut($I)//Insertar/actualizar/Eliminar
    {
        $this->conection->exec($I); 
        return $this->conection->lastInsertId();
    }
    public function consult($sql)
    {
        $sentence = $this->conection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}


?>