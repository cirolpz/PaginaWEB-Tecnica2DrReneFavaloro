<?php /*Etiqueta de apertura, de nuestro codigo php */
error_reporting(0);
include_once("../db/claseMysql.php");//Inlcuye el codigo del archivo "claseMysql.php"
class crud_usuario{ //Creamos la clase crud_usuario
    //Metodo Insertar
    public function insertar($tabla, $datos){//Metodo publico(que cualquier clase puede acceder a el), que recibira 2 parametros
        $miconexion = new DataBaseMysql; // Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2"); //Guardamos la conexion en una variable

        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
        $resultado = $this->conexion->query("INSERT INTO $tabla VALUES($datos)") or die ($this->conexion->error);
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return true;
        return false;
    }
    //Metodo Actualizar
    public function actualizar($tabla, $campos, $condicion){//Metodo publico(que cualquier clase puede acceder a el), que recibira 3 parametros
        $miconexion = new DataBaseMysql;// Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2");//Guardamos la conexion en una variable

        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
        $resultado = $this->conexion->query("UPDATE $tabla SET $campos WHERE $condicion") or die ($this->conexion->error);
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return true;
        return false;
    }
    //Metodo Eliminar
    public function eliminar($tabla, $condicion){//Metodo publico(que cualquier clase puede acceder a el), que recibira 2 parametros
        $miconexion = new DataBaseMysql;// Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2");//Guardamos la conexion en una variable
        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
        $resultado = $this->conexion->query("DELETE FROM $tabla WHERE $condicion") or die ($this->conexion->error);
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return true;
        return false;
    }

    //Metodo Mostrar todos los datos de una tabla
    public function mostrar($datos, $tabla){//Metodo publico(que cualquier clase puede acceder a el), que recibira 2 parametros
        $miconexion = new DataBaseMysql;// Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2");//Guardamos la conexion en una variable
        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
        $resultado = $this->conexion->query("SELECT $datos FROM $tabla") or die ($this->conexion->error);
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return $resultado->fetch_all(MYSQLI_ASSOC); //Retorna todas las filas en forma de un array associativo
        return false;
    }
    //Metodo Mostrar datos de una tabla con condicion
     public function mostrar_condicion($datos, $tabla, $condicion){//Metodo publico(que cualquier clase puede acceder a el), que recibira 3 parametros
        $miconexion = new DataBaseMysql;// Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2");//Guardamos la conexion en una variable

        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
     $resultado = $this->conexion->query("SELECT $datos FROM $tabla WHERE $condicion") or die ($this->conexion->error);  
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return $resultado->fetch_all(MYSQLI_ASSOC); //Retorna todas las filas en forma de un array associativo
        return false;
    }
    //Metodo Buscador
    public function buscador($datos, $tabla, $condicion){//Metodo publico(que cualquier clase puede acceder a el), que recibira 3 parametros
        $miconexion = new DataBaseMysql;// Instanciamos el objeto
        $this->conexion = $miconexion->conectar("localhost", "root", "root", "escuelatecnica2");//Guardamos la conexion en una variable
    
        // Guardamos en la variable $resultado, la ejecucion de la consulta, con sus respectivos datos.
    $resultado = $this->conexion->query("SELECT $datos FROM $tabla WHERE $condicion") or die ($this->conexion->error);
        if($resultado)//Si se ejecuta la consulta correctamente nos la retorna, sino no.
        return $resultado->fetch_all(MYSQLI_ASSOC); //Retorna todas las filas en forma de un array associativo
        return false;
    }
}
?> <!--Etiqueta de cierre de nuestro codigo php. -->

