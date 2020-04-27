<?php
$conexion = mysql_connect("127.0.0.1","root","123456789") or die("No se ha podido conectar");
 $db = mysql_select_db("Reservaonline",$conexion) or die ("Base de Datos no Existe");
 ?> 