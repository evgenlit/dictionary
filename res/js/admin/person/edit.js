$(function() {
	$('body').on('change', '[data-edit="auto"]', 
	function(e) {
		var $this = $(this);
		var value = $this.val();
		if ($this.attr('type') == 'checkbox') {
			value = $this.prop('checked')?1:0;
		}
		if (!$this.next().hasClass('round button')) {
			var btn = $(document.createElement('span'));
			btn.addClass('round button');
			btn.addClass('small');
			btn.addClass('btn-autosave');
			btn.data('loading-text', 'Сохраняю...');
			btn.html('Сохранить');
			btn.on('click', function() {
				$.ajax({
					url: $this.data('save'),
					data: {
						id: $this.data('id'),
						field: $this.attr('name'),
						value: value
					},
					beforeSend: function() {
						btn.removeClass('btn-info');
						btn.button('loading');
					},
					success: function() {
						btn.remove();
					},
					error: function() {
						alert('При сохранении данных произошла ошибка.');
					}
				});
			});

			$this.after(btn);
		}

		e.preventDefault();
	});
});

$(document).ready(function(){
	$("form#addPhotoMain").submit(function (e) {
		e.preventDefault();
		var personId = $("input#personId").val();
		var files = $('#mainfile')[0].files[0];
			var fd = new FormData();
			fd.append("file", files);
			var uploadURL ="/admin/photo/jchangeMainPhoto/"+personId;
			var jqXHR =
			$.ajax({
				xhr: function() {
		            var xhrobj = $.ajaxSettings.xhr();
		            return xhrobj;
		        },
				url: uploadURL,
				type: "POST",
				contentType:false,
				processData: false,
				cache: false,
				data: fd,
				dataType: "json",
				success: 
					function(data){
						$("#mainPic").attr("src", "/res/upload/photos/"+data.name);       
					}
			});
	});
});

$(document).ready(function(){	
	CKEDITOR.replace('epigraph');
	var editor = CKEDITOR.instances.epigraph;
	editor.on('blur', function(event) {
		var personId = $("input#personId").val();
		var value = this.getData();
		var upurl = "/admin/person/jeditEpigraph/"+personId;
		$.ajax({
			url: upurl,
			type: "POST",
			data: {value: value},
			cache: false,
			dataType: "html",
			success:
				function(){
					alert('Данные сохранены');
					$('#cke_1_contents').animate({backgroundColor: "#00bb00"}, 1000);
				},
			error: 
				function() {
					alert('Все плохо');
				}
		});
	});
});
