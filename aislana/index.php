<html>
<head>
    <meta charset="UTF-8">
    <title>Титульная страница</title>
    </head>
    <style> 
    table{
background: url("./images/fon.jpg") no-repeat center center / 100% 103%;
    }			
.btn {
    font-size: 18;
    color: #4682B4;
    font-weight: bold;
    text-align: left;
}
.hover {
    font: 20px 'Times New Roman',sans-serif;
    background-color: #F0F8FF;
    -webkit-tap-highlight-color: transparent;
    display: inline-block;
    border: 1px solid #000;
    border-radius: 10px;
    color: #000;
    line-height: 1.6;
    width: 155;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
}
.hover:hover{
background:#B0C4DE;
}
    </style>
<body >
	<table width="100%" height="100%" align="center" cellspacing="1" cellpadding="1" border="0">
		<tr><td colspan="3" valign="top">
<h3 style = "font: 180% 'Times New Roman',sans-serif; text-align: center;"> ФГБОУ ВО «ТУВИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»<br>КАФЕДРА ИНФОРМАТИКИ</h3></td></tr>
<tr><td colspan="3"  valign="top">
<!--<tr><td colspan="3"><center><img src="./images/Tuvsu_logo-removed.jpg" style="width:100px; height: :100px;"></center></td></tr>-->
<tr><td colspan="3"><h3 style = "font: 260% 'Times New Roman',sans-serif;text-align: center;"><strong>СУБД «Материальное обеспечение учебных корпусов ТувГУ»</strong></h3></td></tr>
<tr><td colspan="3"><h3 style = "font: 150% 'Times New Roman',sans-serif; text-align: center;"><strong> Кызыл - 2022</strong></h3></td></tr>
<tr>
	<td><a href="./glavnaya.php" class = "hover">Просмотр</a></td>
<!--<td align="center"><a href="./edit/edit.php" class = "hover">Редактировать</a></td>
<a href="./spravka.php" target="_self" target ="_blank" class = "hover" style="position: relative; top:38%; left:60%;">Справка</a>-->
<td align="right"><input class="hover" type="Button" value="Справка" name="Spr2" onclick="window.open('./spravka.php','Справка','width=300,height=600')"></td></tr>
    <!--<a href="glavnaya.php" style = "line-height: 1.5; width: 60; font-size: 18px; position: absolute; right: 4%; top: 95%;">Продолжить</a>-->
</body>
</html>