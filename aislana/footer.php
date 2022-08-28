<html>
<style>
    * {
    margin: 0;
    padding: 0;
}
body
{
    height: 100%;
}
footer {
  bottom:0%;
  width: 100%;
  height: 6%;
  padding: 6px;
  color: #FFF;
  text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #BEC1D3 10%, #ACAFBD 100%);
  }
a{
  text-decoration: none;
  color: #FFF;
  font-family: 'Courier', cursive;
  font-size: 25px;
  padding:5px 50px 5px;
}
a:hover{background: #A3D0C3;}
</style>
<body>
<footer>
<center>
    <a href="../glavnaya.php">Главная</a>
    <?php
    if ($_SESSION['admin_example']) {
        echo "<a href='../admin/logout.php' class='text'>Выйти</a>";
    } else {
        echo "<a href='../admin/admin.php' class='text' >Вход</a>";
    }
    ?>
    <a href="../glavnaya.php" class='text'>О сайте</a>
</center>
</footer>
</body>