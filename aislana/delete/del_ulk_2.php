<?php 
include "../scripts/param.php";
	$delete = $_GET['id'];
$result = mysqli_query($link, "DELETE FROM ulk2 WHERE id = $delete");
if($result == true)
{
header("Location: ".$_SERVER['HTTP_REFERER']);
}
else
echo"Ошибка";
?>
<html>
  <head>
         <meta charset="utf-8">
         <title>Удаление записей</title>
         <link rel="stylesheet" href="style/style1.css"> 
  </head>
 <body></body>
</html>