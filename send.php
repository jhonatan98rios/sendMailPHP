<?php 

//$path = explode('/mail', $_GET['path']);
$method = $_SERVER['REQUEST_METHOD'];
//header('Content-type: application/json');

if($method === 'GET'){
	echo 'Hello World';
}

if($method === 'POST'){
	$jsonBody = json_decode('Body', true);

	$msg = "Hello World";

	// send email
	mail("jhonatan98rios@gmail.com", "API com php", $msg);
	
	//echo 'Mensagem Enviada';
	echo $jsonBody;
}

?>