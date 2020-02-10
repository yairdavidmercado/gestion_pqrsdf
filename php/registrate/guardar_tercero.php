<?php
 include '../conexion.php';
 
 $conse_tipo_id = $_POST["conse_tipo_id"];
 $id_tercero = $_POST["id_tercero"];
 $razon = $_POST["nombre1"]." ".$_POST["nombre2"]." ".$_POST["apellido1"]." ".$_POST["apellido2"];
 $correo = $_POST["correo"];
 $tipo_persona = $_POST["tipo_persona"];
 $tipo_entidad = $_POST["tipo_entidad"];
 $fecha_nace = $_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
 $direccion = $_POST["direccion"];
 $telefono = $_POST["telefono"]." - ".$_POST["celular"];
 $sexo = $_POST["sexo"];
 $id_etnia = $_POST["id_etnia"];
 $id_poblacion = $_POST["id_poblacion"];
 $id_entidad = $_POST["id_entidad"];
 $id_ciclo_vida = $_POST["id_ciclo_vida"];
 $password = $_POST["password"];
 $recover = '';
 $state_recover = 'f';


 $conn = pg_connect("user=".DB_USER." password=".DB_PASS." port=".DB_PORT." dbname=".DB_NAME." host=".DB_HOST);

	try{
		if($conn){
		$result = pg_query($conn, "SELECT guardar_tercero('$id_tercero',
															'$razon',
															'$direccion',
															'$telefono',
															'$correo',
															'$conse_tipo_id',
															'$tipo_persona',
															'$tipo_entidad',
															'$fecha_nace',
															'$sexo',
															'$id_etnia',
															'$id_poblacion',
															'$id_entidad',
															'$id_ciclo_vida',
															'$password',
															'$recover',
															'$state_recover' );");
		$fch = pg_fetch_row($result);
		
		$response["success"] = true;
		$response["message"] = $fch[0];
		echo json_encode($response);
		}
		else{
			$response["success"] = false;
			$response["message"] = "Ocurrio un error en la conexion";
			echo json_encode($response);
		}
	}catch(Exception $e){
		$response["success"] = false;
		$response["message"] = $e->getMessage();
		echo json_encode($response);
	}
	pg_close($conn);

?>

