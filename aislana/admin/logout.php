<? session_start ();  ?>
<html>
<head>
<title>Выход</title>
<meta charset="utf-8">
<meta http-equiv="Refresh" content="0,5; URL=../glavnaya.php">
<?
if(!$_SESSION['admin_example'])
{
	echo 'Для того, чтобы выйти – надо сперва войти!';
}
else
{
	unset($_SESSION['admin_example']);
}
?>
</body>
</html>