<?php

$method=$_SERVER["REQUEST_METHOD"];
if($method=="GET"){
	$requestBody=file_get_contents('php://input');
	$json=$json_decode($requestBody);
	$text=$json->result->parameters->text;
	switch($text){
	case "hii":
		$speech="hii,nice to meet you";
		break;
	case "bye":
			$speech="bye,good night";
			break;
	case "anything":
				$speech="yes,you can type anything here";
				break;
	default:
			$speech="sorry not getting clearly you can ask other";
					break;
	}
	$response=new \stdClass();
	$response->speech="";
	$response->displayText="";
	$response->source="webhook";
	echo json_encode($response);
}
else{
	echo "method not allowed";
}
?>