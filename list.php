<!DOCTYPE html>
<html>


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
</style>

<body>

	<table style="width:100%">
	<caption>Link Management</caption>

<?php

	$string = file_get_contents("data.json");
	$data = json_decode($string,true);


	 // print_r($data);

	echo "<tr>";
	echo "<th> Video ID </th>" ;
	echo "<th> Link </th>";

	echo "<th> Action </th>";
	echo "/<tr>";


	foreach ($data as $key => $value) {

		echo "<tr>";
		$folder = "http://$_SERVER[HTTP_HOST]/share_app/play.php?id=";
		echo '<td> <a href='.$folder.$key.'>'.$key.'</a></td>' ;


		echo "<td> <a href=".$value.">".$value."</a></td>";

		echo "<td>
    			<form action='delete.php?id=".$key."' method=\"post\">
		        <input type=\"submit\" name=\"submit\" value=\"Delete\">
    		</form>
			</td>";

		echo "/<tr>";
	}

?>

</table>
<br>
<a href="creat.html">Add Link<a>

</body>
</html>