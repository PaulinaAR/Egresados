<?php
$obj = new homeController();
$correo = $obj->limpiarcorreo($_POST['correo']);
$contraseña = $obj->limpiarcadena($_POST['contraseña']);
$bandera = $obj->verificarusuario($correo,$contraseña);
if(bandera){
    
}else{
    $error="<li>Las claves son incorrectas</li>";
}
?>