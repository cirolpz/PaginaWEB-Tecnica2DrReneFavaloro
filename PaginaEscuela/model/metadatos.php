<?php
include("crud_usuario.php");//Inlcuye el codigo del archivo crud_usuario.php

if (isset($_POST['User']))//chequeo o valido con un if que la variable $_POST['User], contenga un valor, ingresado
    $UserIngresado=strtolower($_POST['User']);//Si se cumple la condicion, se guarda lo ingresado en una variable.
    else $UserIngresado='';//si no tiene valor, guarda un espacio vacio, para evitar un error
    
if (isset($_POST['Pass']))//chequeo o valido con un if que la variable $_POST['User], contenga un valor, ingresado
    $PassIngresado=sha1($_POST['Pass']);//Si se cumple la condicion, se guarda lo ingresado en una variable.
    else $PassIngresado='';//si no tiene valor, guarda un espacio vacio, para evitar un error
    $objeto = new crud_usuario();
    $Respuesta = $objeto->mostrar_condicion("Usuario, Contraseña, id_Usuario, id_Cargo","usuarios","Usuario='$UserIngresado' AND Contraseña='$PassIngresado' LIMIT 1 ");
   
    if($Respuesta == true){
        session_start();
    }else{
      ?>
      <SCRIPT language='JavaScript'>
        alert ("El nombre de usuario y contraseña es incorrecto"); 
        location.href='../view/pagina de la escuela.php'; 
        </SCRIPT>
      <?php
    }
    foreach ($Respuesta as $matriz);
    if($matriz)
    {
        $UserBase=$matriz['Usuario'];//Guardamos de la matriz, el campo "User" en la variable "$UserBase"
        $PassBase=$matriz['Contraseña'];//Guardamos de la matriz, el campo "Pass" en la variable "$PassBase"
        $id_Usuario=$matriz['id_Usuario'];
        $Cargo=$matriz['id_Cargo'];
        $_SESSION['Usuario']=$UserBase;//Guardamos en la variable $_SESSION['User'], lo contenido en la variable $UserBase
        $_SESSION['Contraseña']=$PassBase;//Guardamos en la variable $_SESSION['Pass'], lo contenido en la variable $PassBase
        $_SESSION['id_Usuario']=$id_Usuario;
        $_SESSION['id_Cargo']=$Cargo;
    }
    if ($UserIngresado==$UserBase and $PassIngresado == $PassBase){
        header("Location:../view/pagina de la escuela.php");
    }
    else{ 
        $UserBase=" ";?> 
        <SCRIPT language='JavaScript'> 
        alert ("El nombre de usuario y contraseña es incorrecto"); 
        location.href='../view/pagina de la escuela.php'; 
        </SCRIPT><?php  
    }
?> 