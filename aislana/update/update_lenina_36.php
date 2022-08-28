 <?php
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include "../scripts/param.php";
if(isset($_POST['save'])){
	$result = mysqli_query( $link, "UPDATE lenina_36 SET aud = '{$_POST['aud']}', year = '{$_POST['year']}', komp = '{$_POST['komp']}', kol= '{$_POST['kol']}', korpus_id = '{$_POST['korpus_id']}' WHERE id = '{$_POST['id']}'");
if($result == true)
?><meta http-equiv="refresh" content="0.5;URL=../edit/edit_lenina_36.php"><?php
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = mysqli_query($link, "SELECT * FROM lenina_36 WHERE id =$id ");
$sql = mysqli_fetch_assoc($sql);
}
?>
<!DOCTYPE HTML>
<html>
  <head>
         <meta charset="utf-8">
         <title>Изменить запись</title>
  </head>
  <body>
<form action="" method="post">
 		<h3 style = "text-align: center; font-size: 24px">Изменить запись</h3>
    <input type="hidden" name="id" value ="<?=$sql['id']?>" /><br />
<p style = "position: absolute; left: 44%; top: 15%"> Аудитория <input type="int" name="aud" value ="<?=$sql['aud']?>" ></p>
<p style = "position: absolute; left: 47.9%; top:25%">	Год <input type="text" name="year" value ="<?=$sql['year']?>"></p>
<p style = "position: absolute; left: 42.1%; top: 20%">	Комплектация <input type="text" name="komp" value ="<?=$sql['komp']?>"></p>
<p style = "position: absolute; left: 43.6%; top:30%">	Количество <input type="int" name="kol" value ="<?=$sql['kol']?>"/></p>
	<input type="hidden" name="korpus_id" value ="<?=$sql['korpus_id']?>" /></p>
	<input type="submit" style = "position: absolute; left: 48%; top:40%" name = "save" value="Сохранить"/>

  </body>
  </html>