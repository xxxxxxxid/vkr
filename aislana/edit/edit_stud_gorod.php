<? session_start ();?>
<!DOCTYPE HTML>
<html>
  <head>
         <meta charset="utf-8">
         <title>Редактирование базы данных</title>  
<script src="//code.jquery.com/jquery-latest.js"></script>
<script>
$(function(){

  var oldVal, newVal, id, field;
$('.edit').focus(function(){
 oldVal = $(this).text();
 id = $(this).data('id');
 field=$(this).data('name');
});
$('.edit').keypress(function(e){
    if(e.which == 13){
 newVal = $(this).text();
 if(newVal != oldVal){
 $.ajax({
 url: '../edit/edit_stud_gorod.php',
 type: 'POST',
 data: {new_val: newVal, id: id, field: field},
 success: function(tab){
 console.log(tab);
 },
 error: function(){
 alert('Error!');
 }
 });
 }
 return false;
    }
  })

.blur(function(){
newVal = $(this).text();
 if(newVal != oldVal){
 $.ajax({
 url: '../edit/edit_stud_gorod.php',
 type: 'POST',
 data: {new_val: newVal, id: id, field: field},
 success: function(tab){
 console.log(tab);
 },
 error: function(){
 alert('Error!');
 }
 });
 }
});

});

$(function(){

  var oldVal, newVal, id, field;
$('.editdop').focus(function(){
 oldVal = $(this).text();
 id = $(this).data('id');
 field=$(this).data('name');
});
$('.editdop').keypress(function(e){
    if(e.which == 13){
 newVal = $(this).text();
 if(newVal != oldVal){
 $.ajax({
 url: '../edit/edit_dop.php',
 type: 'POST',
 data: {new_val: newVal, id: id, field: field},
 success: function(tab){
 console.log(tab);
 },
 error: function(){
 alert('Error!');
 }
 });
 }
 return false;
    }
  })

.blur(function(){
newVal = $(this).text();
 if(newVal != oldVal){
 $.ajax({
 url: '../edit/edit_dop.php',
 type: 'POST',
 data: {new_val: newVal, id: id, field: field},
 success: function(tab){
 console.log(tab);
 },
 error: function(){
 alert('Error!');
 }
 });
 }
});

});

function createNewDop() {
  $("#add-more-dop").hide();
  var data = '<tr id="new_row_ajax">' +
  '<td contentEditable class="editdop" colspan="2" data-id="<?echo $row['id']?>" data-name="name" onBlur="addToHiddenField(this,\'name\')" onClick="editRow(this);"></td>' +
  '<td contentEditable class="editdop" data-id="<?echo $row['id']?>" data-name="model" onBlur="addToHiddenField(this,\'model\')"  onClick="editRow(this);"></td>' +
  '<td contentEditable class="editdop" data-id="<?echo $row['id']?>" data-name="inv" onBlur="addToHiddenField(this,\'inv\')" onClick="editRow(this);"></td>' +
   '<td contentEditable class="editdop" data-id="<?echo $row['id']?>" data-name="year" onBlur="addToHiddenField(this,\'year\')" onClick="editRow(this);"></td>' +
    '<td contentEditable class="editdop" data-id="<?echo $row['id']?>" data-name="podot" onBlur="addToHiddenField(this,\'podot\')" onClick="editRow(this);"></td>' +
  '<td><input type="hidden" id="name" /><input type="hidden" id="model" /><input type="hidden" id="inv" /><input type="hidden" id="year" /><input type="hidden" id="podot" /><span id="confirmAdd"><a onClick="addToDop()" class="ajax-action-links">Сохранить</a> / <a onclick="cancelDop();" class="ajax-action-links">Отмена</a></span></td>' +  
  '</tr>';
  $("#table1").append(data);
}
function createNew() {
  $("#add-more").hide();
  var data = '<tr id="new_row_ajax">' +
  '<td contentEditable class="edit" data-id="<?echo $row['id']?>" data-name="aud" onBlur="addToHiddenField(this,\'aud\')" onClick="editRow(this);"></td>' +
  '<td colspan="2" contentEditable class="edit" data-id="<?echo $row['id']?>" data-name="komp" onBlur="addToHiddenField(this,\'komp\')"  onClick="editRow(this);"></td>' +
  '<td contentEditable class="edit" data-id="<?echo $row['id']?>" data-name="kol" onBlur="addToHiddenField(this,\'kol\')" onClick="editRow(this);"></td>' +
  '<td><input type="hidden" id="aud" /><input type="hidden" id="komp" /><input type="hidden" id="kol" /><span id="confirmAdd"><a onClick="addToDatabase()" class="ajax-action-links">Сохранить</a> / <a onclick="cancelAdd();" class="ajax-action-links">Отмена</a></span></td>' +  
  '</tr>';
  $("#table").append(data);
}
function cancelAdd() {
  $("#add-more").show();
  $("#new_row_ajax").remove();
}
function cancelDop() {
  $("#add-more-dop").show();
  $("#new_row_ajax").remove();
}

function editRow(editableObj) {
  $(editableObj).css("background","none");
}

function addToDatabase() {
  var aud = $("#aud").val();
  var komp = $("#komp").val();
  var kol = $("#kol").val();

    $.ajax({
    url: "../insert/insert_stud_gorod.php",
    type: "POST",
    data: 'aud='+aud+'&komp='+komp+'&kol='+kol,
    success: function(data){
      $("#new_row_ajax").remove();
      $("#add-more").show();      
      $("#table").append(data);
       console.log(aud);
    }
    });
}
function addToDop() {
  var aud="<?php echo $_GET[id] ?>"
  var name = $("#name").val();
  var model = $("#model").val();
  var inv = $("#inv").val();
  var year = $("#year").val();
  var podot = $("#podot").val();
  var korpus_id = 6;

    $.ajax({
    url: "../insert/insert_dop.php",
    type: "POST",
    data: '&aud='+aud+'&name='+name+'&model='+model+'&inv='+inv+'&year='+year+'&podot='+podot+'&korpus_id='+korpus_id,
    success: function(data){
      $("#new_row_ajax").remove();
      $("#add-more-dop").show();      
      $("#table1").append(data);
       console.log(name);
    }
    });
}
function addToHiddenField(addColumn,hiddenField) {
  var columnValue = $(addColumn).text();
  $("#"+hiddenField).val(columnValue);
}
</script>
<script src="../js/script.js"></script>
<script type="text/javascript">
    function go(addr) {
    window.open(addr,"MyWin", "menubar=yes,width=1024,height=768");
}
</script>
    <style>
      .edit{
 height: 25px;
}
      .editdop{
 height: 25px;
}
.editMode{
 border: 1px solid black;
}
.ajax-action-links {color: black; font-size: 18px; cursor:pointer;  border: 1px solid grey;
  border-radius: 25px;
  cursor: pointer; background-color: #f5f5f5; padding: 3px; margin:0;}
.ajax-action-button {border:#094 1px solid; border-radius: 25px; background-color: #f5f5f5; margin: 10px 0px;cursor:pointer;display: inline-block;padding: 10px 20px; font-family: 'Courier', cursive;}
</style>
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
<?php
include "../scripts/param.php";
include "../header.php";

function update_option(){
global $link;
$fields = array('aud', 'year', 'komp', 'kol');
$field= isset($_POST['field'])?$_POST['field']:'';
if(!in_array($field, $fields)) return false;
$value = mysqli_real_escape_string($link, $_POST['new_val']);
$id=(int)$_POST['id'];
$field= $_POST['field'];
$tab=mysqli_query($link, "UPDATE studgorod SET $field ='$value' WHERE  id=$id");
if(mysqli_affected_rows($link)) return true;
else return false;
}

if(isset($_POST['new_val'])){
  if(update_option()){
    exit("Настройка сохранена");
  }
  else {
    exit("Ошибка сохранения");
  }
}

$tab  =  mysqli_query( $link,  "SELECT * FROM studgorod" );
if(isset($_POST['text'])){
  $tab = mysqli_query( $link, "SELECT * FROM studgorod WHERE aud = {$_POST['text']}");
}?>
<a href="" onclick="go('../pomoshed.php'); return false;" style="position:absolute; right:0; top:1%; padding: 8px;">Помощь</a>
<div class="d1">
<form action = "" method="post" enctype="multipart/form-data">
  <input type="text" formaction="" name = "text" placeholder="Введите номер аудитории для поиска">
  <button type="submit" >Искать</button>
</form><br>
</div>
<?if(mysqli_num_rows($tab) < 1) {
?><center><strong><h1>Ничего не найдено</h1></strong></center><?}
else{?>
<table>
<tr>
  <td>Аудитория</td>
  <td colspan="2">Комплектация</td>
  <td>Общее количество</td>
 </tr>
 <tbody id="table">
 <?while($i<count($tab))
{
         while ($row = mysqli_fetch_assoc($tab)) {
                if($row['kol'] == 0)
                $row['kol'] = ''; 
                if($row['year'] == 0)
                $row['year'] = '';  
            ?>
 <tr>
  <td contentEditable class='edit' data-id='<?echo $row['id']?>' data-name="aud"><?echo $row['aud']?></td>
  <td contentEditable class='edit' data-id='<?echo $row['id']?>' data-name="komp"><?echo $row['komp']?></td>
  <td style='border-left: none;'><?echo "<a href='edit_stud_gorod.php?id=$row[aud]#modal' style='margin:0; padding:1.5px;' class='mod' title='Подробно'><img src='../images/dop.png' width= '25px' height= '25px'></a>";?></td>
  <td contentEditable class='edit' data-id='<?echo $row['id']?>' data-name="kol"><?echo $row['kol']?></td>
  <td><?echo"<a href = '../delete/del_stud_gorod.php?id=$row[id]' class='ajax-action-links' name = 'del'>Удалить</a>"?></td>
</tr> <?
}
$i++;
}?>
</tbody>
</table>
<?}?>

<div class="ajax-action-button" id="add-more" onClick="createNew();">Добавить запись</div>
<div class="modal" id="modal">
  <div class="modal__content">
    <a href="#" class="modal__close"><center>X</center></a>
          <? $tab1 =  mysqli_query( $link,  "SELECT * FROM dop WHERE aud=$_GET[id]");
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
<tbody id="table1">
<?
          while ($row = $tab1->fetch_assoc()) {
                if($row['year'] == 0)
                $row['year'] = '';  
            ?>
<tr>
  <td><?echo $num;?></td>
  <td contentEditable class='editdop' data-id='<?echo $row['id']?>' data-name="name"><?echo $row['name']?></td>
  <td contentEditable class='editdop' data-id='<?echo $row['id']?>' data-name="model"><?echo $row['model']?></td>
  <td contentEditable class='editdop' data-id='<?echo $row['id']?>' data-name="inv"><?echo $row['inv']?></td>
  <td contentEditable class='editdop' data-id='<?echo $row['id']?>' data-name="year"><?echo $row['year']?></td>
  <td contentEditable class='editdop' data-id='<?echo $row['id']?>' data-name="podot"><?echo $row['podot']?></td>
  <td><?echo"<a href = '../delete/del_dop.php?id=$row[id]' class='ajax-action-links' name = 'del' title = 'Удалить'>Удалить</a>"?></td>
</tr>
<?$num++;}?>
</tbody>
</table>
<div class="ajax-action-button" id="add-more-dop" onClick="createNewDop();">Добавить запись</div>
        </div>
      </div>

<?mysqli_close($link); ?>
  </body>
  </html>