<?php
function Conexion_pozos(){
    $db=mysql_connect("localhost","root","") or die("No se conecto al servidor");
            mysql_select_db("scada",$db) or die ("No se conecto a la base de datos");
            return $db;
}
$dbx=Conexion_pozos();
?>