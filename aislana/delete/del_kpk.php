<?php 
include "../scripts/param.php";
	$delete = $_GET['id'];
$result = mysqli_query($link, "DELETE FROM kpk WHERE id = $delete");
if($result == true)
{
?><meta http-equiv="refresh" content="0.5;URL=../edit/edit_kpk.php"><?php
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