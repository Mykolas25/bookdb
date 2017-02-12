<?php
if(isset($_GET["pk"])) {
	$pk = $_GET["pk"];
};

$db = mysqli_connect("localhost", "root", "", "knygu_sarasas") or die(mysqli_error());
$sql = "SELECT * FROM `knygos` WHERE tableId = $pk";
$result = mysqli_query($db, $sql) or die (mysqli_error());
			
while ($row = mysqli_fetch_array($result)){
	include "knyguinfo.phtml";
};
?>
