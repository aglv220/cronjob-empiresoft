<?php
    $user = "utp_canvas";
    $password = "Theclown10";
    $update_token = file_get_contents("http://empiresoftgroup.online/academico/ApiControlador/actualizar_token?usuario=".$user."&password=".$password);
    $hoy = date("d-m-Y H:i:s");
    echo $update_token . " => ".$hoy;
?>