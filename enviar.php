<?php
if (isset($_POST["nombre"])&& !empty($_POST["nombre"])&&
isset($_POST["apellido"])&& !empty($_POST["apellido"])&&
isset($_POST["email"])&& !empty($_POST["email"])&&
isset($_POST["texto"])&& !empty($_POST["texto"])) {
  $nombre=$_POST["nombre"] . " " . $_POST["apellido"];
  $mail =$_POST["email"];
  $mensaje = $_POST["texto"];
  mail("kendysatomicos@hotmail.com" , $mail,$nombre,$mensaje);
echo "Enviado satisfactoriamente";
}
?>
