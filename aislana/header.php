<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
         <title></title>
	</head>
	<body>
		<div class="page-wrapper">
<header>

  <!--<div class="overlay">
    <?php
    if ($_SESSION['admin_example']) {
    echo " <a href='../edit/edit.php' class='text'>Главная</a>";}
    else{echo " <a href='../glavnaya.php' class='text'>Главная</a>";}
    if ($_SESSION['admin_example']) {
        echo "<a href='../admin/logout.php' class='text' >Выйти</a>";
    } else {
        echo "<a href='../admin/admin.php' class='text' >Вход</a>";
    }
    ?>
    </br>
 <img id= "c" src = "./images/Tuvsu_logo-removed.jpg" style = "position: relative; top: 15; left: 0; width:10%; height: 20%;">
<h1>Материальное обеспечение ТувГУ</h1>		
    </div>
    <br> -->
<!--<h3>Выберите учебный корпус</h3>
<form action="" method="post">
    <button type="submit" name="korpus" value="1" class="overlay_1"><h3>УЛК-2 по улице Колхозная 125</h3></button>
    <button type="submit" name="korpus" value="2" class="overlay_1"><h3>УК КПК по улице Колхозная 69</h3></button>
    <button type="submit" name="korpus" value="3" class="overlay_1"><h3>УК ИФ по улице Ленина 5</h3></button><br>
    <button type="submit" name="korpus" value="4" class="overlay_1"><h3>Главный корпус по улице Ленина 36</h3></button><br>
    <button type="submit" name="korpus" value="5" class="overlay_1"><h3>УК по улице Рабочая 4а</h3></button><br>
    <button type="submit" name="korpus" value="6" class="overlay_1"><h3>УК ФФ, СХФ и ФФКиС по улице Монгуша Сата 9</h3></button><br>-->
	<style>
      *{padding: 0; margin: 0; box-sizing: border-box;}
a{
  text-decoration: none;
  color: #FFF;
  font-family: 'Courier', cursive;
  font-size: 25px;
  padding:5px 50px 5px;
}
a:hover{background: #A3D0C3;}
body{margin: 0;
	height: 100%;
	background: linear-gradient( 135deg, #DEE3EC 10%, #DEE3EC 100%);
    }
header {
  text-align: center;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
  border-radius: 0;
}
header .overlay{
  width: 100%;
  height: 100%;
  padding: 10px;
  color: #FFF;
  text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #BEC1D3 10%, #ACAFBD 100%);
  }
header .overlay_1{
  width: 100%;
  height: 100%;
  padding: 10px;
  color: #FFF;
  text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #A4B3B6 10%, #A4B3B6 100%);
  border: 1px solid grey;
    border-radius: 20px;
}
h1 {
  font-family: 'Courier', cursive;
  font-size: 70px;
  margin-bottom: 30px;
}

h3, p {
  font-family: 'Open Sans', sans-serif;
  font-size: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
a{
  text-decoration: none;
}

button {
  border: none;
  outline: none;
  padding: 10px 20px;
  border-radius: 50px;
  color: #333;
  background: #fff;
  margin-bottom: 15px;
  box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
  cursor: pointer;
}
    table {
font-family: "Courier",  bold;
text-align: center;
border-collapse: collapse;
border-spacing: 5px;
background: #A3D0C3;
border-radius: 20px;
width: 100%;
height: auto;
}
th {
font-size: 22px;
font-weight: 100%;
padding: 12px 10px;
border-bottom: 2px solid white;
color: white;
height: 80px;
}
tbody tr:nth-child(2) {
border-bottom: 2px solid white;
}
td {
color: black;
border-left: 2px solid white;
border-bottom: 2px solid white;
height: 40px;
}
* {box-sizing: border-box;}
form {
  position: relative;
  width: 400px;
  margin: 0 auto;
}
.d1 input {
  width: 100%;
  height: 42px;
  padding-left: 10px;
  border: 2px solid #7BA7AB;
  border-radius: 42px;
  color: #9E9C9C;
}
.d1 button {
  position: absolute; 
  top: 0;
  right: 0px;
  width: auto;
  height: 42px;
  border: 2px solid #7BA7AB;
  border-radius: 0 42px 42px 0;
  cursor: pointer;
}
.d1 button:before {
  content: "\f002";
  font-family: FontAwesome;
  font-size: 16px;
  color: #F9F0DA;
}
a.mod {
  display:block;
  padding:0;
  text-decoration: none;
  color: #000;
}
/*.mod {
  border: none;
  background-color: #A3D0C3;
  margin:0 0 0;
  padding:3px;
  box-shadow: none;
}*/
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  bottom:0;
  right:0;
  background-color: rgba(0, 0, 0, .7);
  width: 100%;
  height: 100%;
  align-items: center;
  justify-content: center;
}

.modal:target {
  display: flex;
}

.modal__content {
  background-color: #fff;
  padding: 0%;
  width: 90%;
  height: 90%;
      overflow: auto;
}

.modal__close{
  position: absolute;
  right:2.5%;
  top: 0.5%;
  color: #f00;
  background: #A3D0C3;
  border-radius: 50%;
  width:35px;
  height:35px;
  padding:0.3%;
}
</style>
</header>

 
</div>