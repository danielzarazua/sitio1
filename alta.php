<?php

$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$correo = $_POST['correo'];

$query = "INSERT INTO USUARIOS (nombre, apaterno, amaterno, correo) VALUES ('$nombre', '$apaterno', '$amaterno', '$correo')";
$conn = pg_connect("host=127.0.0.1 port=5432 dbname=autobd user=user_auto password=auto1") or die (pg_last_error());
$result = pg_query($conn, $query) or die (pg_last_error());
pg_close($conn);


?>
