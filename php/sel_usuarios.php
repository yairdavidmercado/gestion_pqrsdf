<?php
session_start();
include 'conexion.php';
$conn = new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
$parametro1 = $_POST["parametro1"];
$parametro2 = $_POST["parametro2"];
try {
	// begin transaction, this is all one process
	$conn->beginTransaction();
	// call the function
	$stmt = $conn->prepare("select validar_login_pqrs(:parametro1, :parametro2)");
	$stmt->bindParam('parametro1', $parametro1, PDO::PARAM_STR);
	$stmt->bindParam('parametro2', $parametro2, PDO::PARAM_STR);
	$stmt->execute();
	$cursors = $stmt->fetchAll();
	$stmt->closeCursor();
	// get each result set
	$results = array();
	foreach($cursors as $k=>$v){
		$stmt = $conn->query('FETCH ALL IN "'. $v[0] .'";');
		$results[$k] = $stmt->fetchAll();
		$stmt->closeCursor();
	}
	$conn->commit();
	unset($stmt);
	if (count($results[0]) > 0) {
		$_SESSION["idUser"]			= $results[0][0]["id_tercero"];
		$_SESSION["nameUser"]		= $results[0][0]["razon"];
		$_SESSION["conse"]		= $results[0][0]["conse"];
		$_SESSION["email"]		= $results[0][0]["email"];
		$_SESSION["Telefono"]		= $results[0][0]["telefono"];
		$_SESSION["Celular"]		= $results[0][0]["celular"];
		$_SESSION["Direccion"]		= $results[0][0]["direccion"];
		$_SESSION["Fecha_nace"]		= $results[0][0]["fecha_nace"];
		$_SESSION["Tipo_id"]		= $results[0][0]["tipo_id"];
		$_SESSION["Tipo_persona"]		= $results[0][0]["tipo_persona"];
		$_SESSION["Etnia"]		= $results[0][0]["etnia"];
		$_SESSION["Poblacion"]		= $results[0][0]["poblacion"];
		$_SESSION["Eps"]		= $results[0][0]["eps"];
		$_SESSION["Sexo"]		= $results[0][0]["sexo"];
	}
	echo json_encode($results);
	//print_r($results);// all record sets
	$stmt = null; // obligado para cerrar la conexión

} catch (\Throwable $th) {
	print $th->getMessage();
}

?>