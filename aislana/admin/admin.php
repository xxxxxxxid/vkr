<? session_start ();   
$salt 			= '89fe766db2985e1ecc1972c25577ddbf'; // нужно изменить...
$name 			= md5(strip_tags($_POST['name']).$salt); // echo $name.'<br>';
$pas 			= md5(strip_tags($_POST['pas']).$salt); //  echo $pas.'<br>';

if($_SESSION['admin_example'])
{
	echo '<meta charset="UTF-8"><style> .in { width: 200px; left: 50%; top: 50%; position: absolute; transform: translate(-50%,-50%); } </style> <div class="in">Вы уже авторизованы
	 <a href="logout.php">Выйти</a></br>
	 <a href="../edit/edit.php" >Вернуться</a>
	</div>';  
	exit;
}
else
{
	if($_POST['send'])   
	{
		if(($name == '18127e516cb4596a51d28fed865eb4dc') && ($pas == '547a1cefb611e1db425de185d5f023d9')) 
		{ 
			$info = 'Все верно';
			$_SESSION['admin_example'] = 'здесь какие-то данные'; 	
			echo '<html> <head> <meta http-equiv="Refresh" content="1; URL=../edit/edit.php"> </head> <body> </body> </html>'; 
		} 
		else 
		{ 
			$info = 'Не верно'; 
			/*if($_COOKIE['_um_fl'] == '')  { $metka = '1'; $info .= ' Осталось 2 попытки';}	
			if($_COOKIE['_um_fl'] == '1') { $metka = '2'; $info .= ' Осталось 1 попытка';}
			if($_COOKIE['_um_fl'] == '2') {  echo '<meta charset="UTF-8"><style> .in { width: 158px; left: 50%; top: 50%; position: absolute; transform: translate(-50%,-50%); } </style> <div class="in">заблокировано</div>'; 
			exit;} 	else{  setcookie("_um_fl", $metka ,time()+60000000); }*/
		}	
	}	
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<style>
		.form {
		position: absolute;
		width: 350px;
		height: 250px;
		border: 1px solid #b8b5b5;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
	    background: #ffffff;
		box-shadow: 0px 0px 3px 1px #b0b0b0;
		}
		form {
		margin-top: 21px;
		}
		div.in {
		display: block;
		padding: 10px;
		text-align: center;
		border-bottom: 1px solid #c9d0d5;
		width: 258px;
		margin: auto;
		margin-top: 19px;
		}

		input[type="text"],input[type="password"] {
		margin-left: 10%;
		margin-top: 17px;
		width: 80%;
		}
		button {
		width: 82%;
		margin-left: 10%;
		margin-top: 19px;
		}
		body {
		background: #f2f2f259;
		}
	</style>
</head>
<body>
	<div class="form">
		<div class="in"><? if($info) { echo  $info ; } else  {echo  "Войти" ; } ?> </div>
		<form action="" method="post">
			<input type="text" name="name" placeholder="имя" required><br>
			<input type="password" name="pas" placeholder="пароль" required><br>
			<button type="submit" name="send" value="1">Войти</button>	
			<button><a href="../glavnaya.php" style="text-decoration: none; color: black;">Назад</a></button>		
		</form>
	</div>
</body>
</html>