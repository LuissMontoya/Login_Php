<?php 
     $con = mysqli_connect("localhost", "root", "", "formulario");
     if(mysqli_connect_errno()){
        echo "error al conectar a la base de datos" .mysqli_connect_errno();
     }
