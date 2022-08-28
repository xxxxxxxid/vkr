<!DOCTYPE HTML>
<html>
  <head>
         <meta charset="utf-8">
         <title>Материальное обеспечение УЛК-2 по улице Колхозная 125</title> 
         <script type="text/javascript">
         function go(addr) {
    window.open(addr,"MyWin", "menubar=yes,width=1024,height=768");
  }
</script>
  </head>
 <body>
  <header>
   <div class="overlay">
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
 <img id= "c" src = "../images/Tuvsu_logo-removed.jpg" style = "position: relative; top: 15; left: 0; width:10%; height: 20%;">
<h1>Материальное обеспечение ТувГУ</h1>   
    </div>
    <br>  
      </header> 
  <?  
  include "../scripts/param.php";
  include "../header.php";
$tab  =  mysqli_query( $link,  "SELECT * FROM rabochaya" );
if(isset($_POST['text'])){
  $tab = mysqli_query( $link, "SELECT * FROM rabochaya WHERE aud = {$_POST['text']}");
}
$i = 0;
?>
<a href="" onclick="go('../pomosh.php'); return false;" style="position:absolute; right:0; top:1%;">Помощь</a>
<div class="d1">
<form action = "" method="post" enctype="multipart/form-data">
  <input type="text" formaction="" name = "text" placeholder="Введите номер аудитории для поиска">
  <button type="submit" >Искать</button>
</form><br>
</div>
<?if(mysqli_num_rows($tab) < 1) {
?><center><strong><h1>Ничего не найдено</h1></strong></center><?}
else{?>
<table><?
while($i<count($tab))
{?>
<tr><th colspan="5">Информация об оборудовании кабинетов информатики, ОМИРС и ИППК</th></tr>
 <tr>
  <td>Аудитория</td>
  <td colspan="2">Комплектация</td>
  <td>Общее количество</td>
 </tr>
<?
         while ($row = $tab->fetch_assoc()) {
                if($row['year'] == 0)
                $row['year'] = '';  
            ?>
 <tr>
  <td><?echo $row['aud']?></td>
  <td><?echo $row['komp']?></td>
  <td style='border-left: none;'><?echo "<a href='search_rabochaya.php?id=$row[aud]#modal' class='mod' title='Подробно'><img src='../images/dop.png' width= '25px' height= '25px'></a>";?></td>
  <td><?echo $row['kol']?></td>
</tr><?  
}
$i++;
}?>
</table><?}?>
 <div class="modal" id="modal">
  <div class="modal__content">
    <a href="#" class="modal__close"><center>X</center></a>
          <? $tab1  =  mysqli_query( $link,  "SELECT * FROM dop WHERE aud=$_GET[id]");
          $i = 0; $num=1;
?>
<h3 style="font-family: 'Courier', cursive;"><center>Подробная информация о комплектации <?echo "$_GET[id]";?> аудитории</center></h3>
<table>
<tr>
  <td colspan="2">Наименование</td>
  <td>Модель</td>
  <td>Инвентарный номер</td>
  <td>Год</td>
  <td>Ответственное лицо</td>
 </tr>
<?
          while ($row = $tab1->fetch_assoc()) {
                if($row['year'] == 0)
                $row['year'] = '';  
            ?>
<tr>
  <td><?echo $num;?></td>
  <td><?echo $row['name']?></td>
  <td><?echo $row['model']?></td>
  <td><?echo $row['inv']?></td>
  <td><?echo $row['year']?></td>
  <td><?echo $row['podot']?></td>
</tr>
<?$num++;}
?>
</table>
        </div>
      </div>
  </body>
 </html>
