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
    array_push($error_Array, '<div class="alert alert-danger" role="alert">El nombre debe contener más de cuatro caracteres</div>');
  }

  $validarUsuario = mysqli_query($con, "SELECT usuario From Usuarios where usuario = '$usuario'");

  if (mysqli_num_rows($validarUsuario) != 0) {
    array_push($error_Array, '<div class="alert alert-danger" role="alert"> El usuario ya existe</div>');
  }

  if ($correo != $correo2) {
    array_push($error_Array, '<div class="alert alert-danger" role="alert">Los correos no coinciden</div>');
  } else {
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      $validarCorreo = mysqli_query($con, "SELECT correo from usuarios where correo = '$correo'");
      if (mysqli_num_rows($validarCorreo) != 0) {
        array_push($error_Array, '<div class="alert alert-danger" role="alert">El correo ya existe!</div>');
      }
    } else {
      array_push($error_Array, '<div class="alert alert-danger" role="alert">El formato no es válido!</div>');
    }
  }
}
