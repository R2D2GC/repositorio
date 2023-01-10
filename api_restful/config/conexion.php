<?php
//archivo de conexion a la BD de MySQL api_restful
class Conectar
{
protected $dbh;

protected function Conexion()
{
    try
    {
        $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=api_restful","root","");
        return $conectar;
    }
    catch(Exception $e)
    {
        print "error en la base de datos".$e->getmessage()."</br>";
        die("verificar por favor...");
    }
}
}
?>