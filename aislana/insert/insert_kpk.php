<?php
include "../scripts/param.php";
if(!empty($_POST["aud"])){
	$aud = (int)$_POST["aud"];
	$komp = mysqli_real_escape_string($link, $_POST["komp"]);
	$kol = (int)$_POST["kol"];
$sql = mysqli_query($link, "INSERT INTO kpk VALUES (`id`,'" .$aud . "','" . $komp . "', '" . $kol . "', 5)");
}
?>