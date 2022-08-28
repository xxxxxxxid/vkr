<!DOCTYPE HTML>
<html>
  <head>
         <meta charset="utf-8">
         <title>Главная</title>
  </head>
  <style>
  	div
  	{ text-align: center; }
  </style>
 <body>
 	<?require_once './header.php';?>
   <body>
  <header>
   <div class="overlay">
    <?php
    if ($_SESSION['admin_example']) {
    echo " <a href='./edit/edit.php' class='text'>Главная</a>";}
    else{echo " <a href='./glavnaya.php' class='text'>Главная</a>";}
    if ($_SESSION['admin_example']) {
        echo "<a href='./admin/logout.php' class='text' >Выйти</a>";
    } else {
        echo "<a href='./admin/admin.php' class='text' >Вход</a>";
    }
    ?>
    </br>
 <img id= "c" src = "./images/Tuvsu_logo-removed.jpg" style = "position: relative; top: 15; left: 0; width:10%; height: 20%;">
<h1>Материальное обеспечение ТувГУ</h1>   
    </div>
    <br>  
  </header>  
 	<h3 style = "text-align: center;">Выберите учебный корпус</h3>
<form method="post">
    <div><button type="submit" formaction="./search/search_ulk_2.php" value="1" class="overlay_1"><h3>УЛК-2 по улице Колхозная 125</h3></button><br>
    <button type="submit" formaction="./search/search_kpk.php" value="2" class="overlay_1"><h3>УК КПК по улице Колхозная 69</h3></button><br>
    <button type="submit" formaction="./search/search_lenina_5.php" value="3" class="overlay_1"><h3>УК ИФ по улице Ленина 5</h3></button><br>
    <button type="submit" formaction="./search/search_lenina_36.php" value="4" class="overlay_1"><h3>Главный корпус по улице Ленина 36</h3></button><br>
    <button type="submit" formaction="./search/search_rabochaya.php" value="5" class="overlay_1"><h3>УК по улице Рабочая 4а</h3></button><br>
    <button type="submit" formaction="./search/search_stud_gorod.php" value="6" class="overlay_1"><h3>УК ФФ, СХФ и ФФКиС по улице Монгуша Сата 9</h3></button><br>
    <button type="submit" formaction="./search/search_lenina_3.php" value="7" class="overlay_1"><h3>ИППК, ОМИРС, ИДО по улице Ленина 3</h3></button></div><br>
 </form>
 </body>
 </html>