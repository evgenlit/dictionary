$(document).ready(function(){
	$('textarea#description').change(function(){
	  var data = CKEDITOR.instances.description.getData();
	  alert(data);
	  $('input#desc').val(data);
	}).change();
});