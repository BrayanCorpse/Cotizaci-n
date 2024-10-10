<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
     session_start();
}

if(!empty($_SESSION['co_login']) and $_SESSION['co_login'] == 1){
    // $_SESSION["id"] 	   = $id_Usuario;
    // $_SESSION['nombre']    = $nombre;
   
        header('Location: View/index.php');
   
}else{
    header('Location: View/index.php');
}
?>
?>