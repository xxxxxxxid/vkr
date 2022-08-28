<?php
include "../scripts/param.php";
function update_dop(){
global $link;
$fields = array('name', 'model', 'year', 'inv', 'podot');
$field= isset($_POST['field'])?$_POST['field']:'';
if(!in_array($field, $fields)) return false;
$value = mysqli_real_escape_string($link, $_POST['new_val']);
$id=(int)$_POST['id'];
$field= $_POST['field'];
$tab=mysqli_query($link, "UPDATE dop SET $field ='$value' WHERE  id=$id");
if(mysqli_affected_rows($link)) return true;
else return false;
}
if(isset($_POST['new_val'])){
  if(update_dop()){
    exit("Настройка сохранена");
  }
  else {
    exit("Ошибка сохранения");
  }
}