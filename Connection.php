
<!--                                                                                            _____
                                                                                              /       \
                                                                                             /  STO   \
                                                                                             \         /
                                                                                              \ _____ /
                                                                                                 |
                                                                                                 |
                                                                                        | NO PASAR SIN PERMISO |
________________________________________________________________________________________________________________________________________________________________________________________________/ -->
                                                           <!-- No Tocar nada a menos que estes 100% seguro de lo que haces... -->
<?php

class conection
{
    public $server = 'sql10.freemysqlhosting.net';
    public $user = "sql10618119";
    public $password = "4NHAsCAvnP";
    public $dbname = 'sql10618119';

    public $conection;


    public function __construct()
    {

        try {
            $this->conection= new PDO("mysql:host=" . $this->server . ";dbname=	sql10618119", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'error' . $e."UNA LOCURA...";
        }
    }
    public function execut($I)//Insertar/actualizar/Eliminar
    {
        $this->conection->exec($I); 
        return $this->conection->lastInsertId();
    }
    public function consult($sql="SELECT * FROM `imagenes`")
    {
        $sentence = $this->conection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}


?>
