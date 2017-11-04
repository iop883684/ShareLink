<?php

if( isset($_POST['id']) )
{
        $string = file_get_contents("data.json");
		$data = json_decode($string,true);

		$data[$_POST["id"]] = $_POST["link"];
		// or if you want to change all entries with activity_code "1"


		$newJsonString = json_encode($data);
		file_put_contents('data.json', $newJsonString);

		echo "<script>location.href='list.php';</script>";

} else {

	echo "no id found";

}


?>
