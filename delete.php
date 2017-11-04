<?php

	$string = file_get_contents("data.json");
	$data = json_decode($string,true);

	// echo $_GET["id"];
	unset($data[$_GET["id"]] );

	$newJsonString = json_encode($data);
	file_put_contents('data.json', $newJsonString);

	echo "<html><meta http-equiv=\"refresh\" content=\"0; url=list.php\" /></html>";

?>