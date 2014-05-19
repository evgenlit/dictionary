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
//		for (var i = 0; i < files.length; i++) {
			var fd = new FormData();
			fd.append("file", files);
			var uploadURL ="/admin/photo/changeMainPhoto/"+personId;
			var jqXHR =
			$.ajax({
				xhr: function() {
		            var xhrobj = $.ajaxSettings.xhr();
		            return xhrobj;
		        },
				url: uploadURL,
				type: "POST",
				contentType:"text/javascript",
				processData: false,
				cache: false,
				data: fd,
//				dataType: "text/image",
				success: 
					function(data){
//						var parsed = $.parseJSON('{"name":"1c9ac0159c94d8d0cbedc973445af2da.jpg"}');
						var parsed = $.parseJSON(data);
						console.log(parsed);
//						alert(parsed.id);
						$("#mainPic").attr("src", "/res/photo/upload/"+parsed.name);       
					}
			});
//	   }
	});
});