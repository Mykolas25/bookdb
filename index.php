<?php
if (isset($_POST['pk'])){
	$pk = $_POST['pk'];
};
$db = mysqli_connect("localhost", "root", "", "knygu_sarasas") or die(mysqli_error());
$sql="SELECT * FROM `knygos`";
$result=mysqli_query($db, $sql) or die ("error: ".mysqli_error());

include "lentele.phtml";
?>