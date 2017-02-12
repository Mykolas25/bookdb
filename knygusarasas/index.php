<?php
$db = mysqli_connect("localhost", "root", "", "knygu_sarasas") or die(mysqli_error());
$sql = "SELECT * FROM `knygos`";
$result = mysqli_query($db, $sql) or die (mysqli_error());

include "knygusarasas.phtml";
?>
