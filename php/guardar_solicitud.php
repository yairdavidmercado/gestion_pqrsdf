<?php
	$google_url = "https://www.google.com/recaptcha/api/siteverify";
	$str = $_POST['g-recaptcha-response'];
	$secret = '6LcFrNMUAAAAAGgmlH69B2B2rcI-sx0W8sqlqN0a';
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = $google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
	$response = [];
	//INICIAMOS cURL
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	$res = curl_exec($curl);
	curl_close($curl);
	 
	$resp = json_decode($res, true);
	 
	//CHEQUEAMOS EL RESULTADO
	if($resp['success']) {
		
		$ftp_server = "190.121.135.236";
		$ftp_username   = "anonymous";
		$ftp_password   =  "anonymous@example.com";

		// setup of connection
		$conn_id = ftp_connect($ftp_server) or die("could not connect to $ftp_server");

		// login
		if (@ftp_login($conn_id, $ftp_username, $ftp_password))
		{
			$file = $_FILES["soporte_adjunto"]["name"]; // right
			$remote_file_path = "";
			if ($file !== "") {
				ftp_pasv($conn_id, true);
				$nuevo_nombre = uniqid().$file;
				$remote_file_path = "/imagenes/pqrsdf/documents/".$nuevo_nombre;
				ftp_put($conn_id, $remote_file_path, $_FILES["soporte_adjunto"]["tmp_name"], FTP_BINARY); // right
				//$response["message"] = "Se ha guardado el archivo en ftp correctamente";
			}
			
			include 'conexion.php';
 
			$tipo_solicitud				= $_POST["tipo_solicitud"];
			$sede 						= $_POST["sede"];
			$area 						= $_POST["area"];
			$fecha_suceso 				= $_POST["fecha_suceso"];
			$asunto 					= $_POST["asunto"];
			$descripcion 				= $_POST["descripcion"];
			$url 						= $remote_file_path;

		$conn = pg_connect("user=".DB_USER." password=".DB_PASS." port=".DB_PORT." dbname=".DB_NAME." host=".DB_HOST) or die ("Could not connect to server\n");

		try{
			pg_query("BEGIN") or die("Could not start transaction\n");
			$result = pg_query($conn, "INSERT INTO radica_doc(id_radi, id_empleado, id_tercero, id_tramite, conse_tramite_det, 
            dias_tramite, id_oficina, asunto, observaciones, leido, respuesta, 
            fecha_radi, hora_radi, fecha_crea, nombre_otro, direccion_otro, 
            tipo_soporte, folio, ruta_radi, ruta_respuesta, obser_segui) VALUES ('176','12333', '2891', '2891', '2', '12/05/2019', '10:30');");
			$fch = pg_affected_rows($result);
			if ($fch[0]) {
				$response["success"] = true;
				$response["message"] = "Commiting transaction.";
				pg_query("COMMIT") or die("Transaction commit failed\n");
			} else {
				$response["success"] = true;
				$response["message"] = "Rolling back transaction.";
				pg_query("ROLLBACK") or die("Transaction rollback failed\n");;
			}
		}catch(Exception $e){
			$response["success"] = false;
			$response["message"] = $e->getMessage();
			echo json_encode($response);
		}
		pg_close($conn); 

		}
		else
		{
		$response["message"] = "could not connect as $ftp_username\n";
		}
		
		ftp_close($conn_id);
		//$response["message"] = "\n\nconnection closed";

	} else {
		$response["success"] = false;
		$response["message"] = "Por favor verifica que no seas un robot.";
		echo json_encode($response);
		//Captcha incorrecto
	}

?>