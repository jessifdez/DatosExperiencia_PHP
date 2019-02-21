<?php
function crearTabla(){
	//Hacemos las variables globales para que se vean dentro de la funcion
	global $servername,$username,$password,$dbname;
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS datos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
	Telefono VARCHAR(50) NOT NULL,
	Experiencia VARCHAR(100) NOT NULL)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tabla creada<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
function insertarDatos(){
	//Hacemos las variables globales para que se vean dentro de la funcion
	global $servername,$username,$password,$dbname;
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$nombre=$_GET["nombre"];
	$email=$_GET["email"];
	$telefono=$_GET["telefono"];
	$experiencia=$_GET["experiencia"];
    $sql = "INSERT INTO datos (Nombre,Email,Telefono,Experiencia) VALUES ('$nombre','$email','$telefono','$experiencia')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Se ha añadido un nuevo dato: ".$nombre;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>