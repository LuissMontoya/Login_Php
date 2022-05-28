<?php
$error_Array = array();

if (isset($_POST['registrar'])) {
    $usuario = strip_tags($_POST['usuario']);
    $correo = strip_tags($_POST['correo']);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $correo2 = strip_tags($_POST['correo2']);
    $password = strip_tags($_POST['password']);
    $password2 = strip_tags($_POST['password2']);

    if (strlen($usuario) > 50 || strlen($usuario) < 4) {
        array_push($error_Array, '<div class="alert alert-danger" role="alert">
        El nombre debe contener más de cuatro caracteres
      </div>');
    }
}
