
php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =
 "test";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$nombreTabla = $_POST["nombre_tabla"];

// Consulta SQL para crear una tabla simple con un campo ID
$sql = "CREATE TABLE $nombreTabla (
id INT AUTO_INCREMENT PRIMARY KEY
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla '$nombreTabla' creada con éxito";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>
