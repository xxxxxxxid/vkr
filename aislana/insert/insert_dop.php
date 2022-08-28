<?php
include "../scripts/param.php";
if(!empty($_POST["name"])){
	$aud=mysqli_real_escape_string($link, $_POST["aud"]);
	$name = mysqli_real_escape_string($link, $_POST["name"]);
	$model = mysqli_real_escape_string($link, $_POST["model"]);
	$inv = mysqli_real_escape_string($link, $_POST["inv"]);
	$year = mysqli_real_escape_string($link, $_POST["year"]);
	$podot = mysqli_real_escape_string($link, $_POST["podot"]);
	$korpus_id = (int)$_POST["korpus_id"];
$sql = mysqli_query($link, "INSERT INTO dop VALUES (`id`,'".$aud."','" .$name . "','" . $model . "', '" . $inv . "', '" . $year . "', '" .$podot . "', '".$korpus_id."')");
}
?>