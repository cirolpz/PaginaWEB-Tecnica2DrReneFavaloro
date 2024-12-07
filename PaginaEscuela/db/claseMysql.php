<?php /*Etiqueta de apertura, de nuestro codigo php */
error_reporting(0);
class DataBaseMysql {
    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;
    var $Conexion_ID = 0;
    var $Error = "";

    public function __construct($host = "localhost", $user = "root", $pass = "root", $bd = "escuelatecnica2") {
        $this->Servidor = $host;
        $this->Usuario = $user;
        $this->Clave = $pass;
        $this->BaseDatos = $bd;
    }

    /* Conexión a la base de datos */
    function conectar($host = "", $user = "", $pass = "", $bd = "") {
        if ($host != "") $this->Servidor = $host;
        if ($user != "") $this->Usuario = $user;
        if ($pass != "") $this->Clave = $pass;
        if ($bd != "") $this->BaseDatos = $bd;
        
        // Conectamos al servidor
        $this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
        
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexión.";
            return 0;
        } 
        
        /* Si hemos tenido éxito conectando devuelve el identificador de la conexión, sino devuelve 0 */
        return $this->Conexion_ID;
    }

    /* Método para verificar la conexión */
    function verificarConexion() {
        if ($this->Conexion_ID) {
            return "Conexión exitosa a la base de datos.";
        } else {
            return "Error al conectar a la base de datos: " . $this->Error;
        }
    }
}
?>