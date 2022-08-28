
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
 url: '../edit/edit_ulk_2.php',
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
 url: '../edit/edit_ulk_2.php',
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