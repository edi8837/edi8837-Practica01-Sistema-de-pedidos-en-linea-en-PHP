<?php
 session_start();
 include '../../config/conexionBD.php';
 $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 $rol =isset($_POST["rol"])? trim($_POST["rol"]) : null;
 $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password =
 MD5('$contrasena') ";

 $result = $conn->query($sql); 
 if ($result->num_rows > 0) { 
 $_SESSION['isLogged'] = TRUE;
 $per = $result->fetch_assoc();
 if($per['usu_rol']=='C'){
    echo "Cliente inciando session";
    header("Location: ../../private/cliente/vista/index.php?codigo=". $per['usu_codigo']);
 }else if($per['usu_rol']=='R'){        
    header("Location: ../../private/restaurante/vista/index.php?codigo=". $per['usu_codigo']);
   
    }else{   
        header("Location: ../vista/index.html");
    }  
    
    }
 $conn->close();
