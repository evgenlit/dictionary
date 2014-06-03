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
		var value = editor.getData();
		var upurl = "/admin/person/jeditEpigraph/"+personId;
		$.ajax({
			url: upurl,
			type: "POST",
			data: {value: value},
			cache: false,
			dataType: "html",
			success:
				function(){
					editor.document.getBody()
					.setStyles({
						backgroundColor: '#00ff00',
						transitionTimingFunction: 'linear',
						animationDuration: '10s'
					});
					CKEDITOR.tools.setTimeout(function(){
						editor.document.getBody()
						.setStyles({
						backgroundColor: '#ffffff',
						transitionTimingFunction: 'linear',
						animationDuration: '10s'
					});
					}, 1000 );
				},
			error:
				function() {
					alert('Все плохо');
				}
		});
	});
	
	CKEDITOR.replace('description');
	var editor1 = CKEDITOR.instances.description;
	editor1.on('blur', function(event) {
		var personId = $("input#personId").val();
		var value1 = editor1.getData();
		var upurl1 = "/admin/person/jeditDescription/"+personId;
		$.ajax({
			url: upurl1,
			type: "POST",
			data: {value: value1},
			cache: false,
			dataType: "html",
			success:
				function(){
					editor1.document.getBody()
					.setStyles({
						backgroundColor: '#00ff00',
						transitionTimingFunction: 'linear',
						animationDuration: '10s'
					});
					CKEDITOR.tools.setTimeout(function(){
						editor1.document.getBody()
						.setStyles({
						backgroundColor: '#ffffff',
						transitionTimingFunction: 'linear',
						animationDuration: '10s'
					});
					}, 1000 );
				},
			error:
				function() {
					alert('Все плохо');
				}
		});
	});
});

$(document).ready(function() {
	$('form#videoaddform').submit(function(e) {
		e.preventDefault();
		var formData = $('form#videoaddform').serialize();
		var personId = $("input#person_id").val();
		var url = "/admin/video/jvideoAdd/"+personId;

		$.ajax({
			url: url,
			type: "POST",
			data: formData,
//			contentType:false,
//			processData: false,
			cache: false,
			dataType: "json",
			success:
				function(data) {
					$('#addvideomodal').foundation('reveal', 'close');
					var h4 = $('h4#noresults');
					if (h4.length > 0) {
						h4.closest('center').remove();
						var table = '<table id="add_video_table">' +
										'<tbody>' +
											'<tr>' + 
												'<td rowspan="4">' + data.youtube + '</td>' +
												'<td><b>ID: </b>' + data.id + '</td>' +
											'</tr>' +
											'<tr>' +
												'<td class="youtube"><b>Название: </b>' + data.title + '</td>' +
											'</tr>' +
											'<tr>'+
												'<td class="youtube"><b>Описание: </b>' + data.description + '</td>' +
											'</tr>' +
											'<tr>'+
												'<td class="youtube"><b>Дата добавления: </b>' + data.date + '</td>' +
										   '</tr>' +
										'</tbody>' +
									'</table>';
						
						jQuery(table).insertBefore('div#videoMain');
					} else {
						var newtr = 
							'<tr>' + 
								 '<td rowspan="4">' + data.youtube + '</td>' +
								 '<td><b>ID: </b>' + data.id + '</td>' +
							'</tr>' +
							'<tr>' +
								 '<td class="youtube"><b>Название: </b>' + data.title + '</td>' +
							'</tr>' +
							'<tr>'+
								 '<td class="youtube"><b>Описание: </b>' + data.description + '</td>' +
							'</tr>' +
							'<tr>'+
								 '<td class="youtube"><b>Дата добавления: </b>' + data.date + '</td>' +
							'</tr>';
						$('table#add_video_table').append(newtr);
					}
				},
			error:
				function() {
					alert('Что-то пошло не так! /n Проверьте правильность введенных данных!');
				}
		});
	});
});

$(document).ready(function() {
	
	function showThumbnails(){
		var files= document.getElementById('file').files;
		$('#previewPane').html('');
		for(var i=0;i<files.length;i++){
			var file=files[i];
			var image = document.createElement("img");
			$('#previewPane').append('<li id="photo' + i + '">');
			$('#photo' +i).append(image);
			$('#photo' +i).append('<div id="progress'+ i +'" class="progress large-12 medium-12 success round"><span class="meter" style="width: 0%"></span></div>');
			var fileReader= new FileReader();
			fileReader.onload = (function(img) {
				return function(e) {
					img.src = e.target.result;
				}; 
			})(image);
			fileReader.readAsDataURL(file);
			uploadFile(file, i);
		}
	};
	
	function uploadFile(file, i){
		var xhr = new XMLHttpRequest(); 
		var formData = new FormData();
		formData.append('file',file);
		xhr.upload.addEventListener("progress", function(e) {
			if (e.lengthComputable) { 
				var percentage = Math.round((e.loaded * 100) / e.total); 
				$("#progress" + i).html('<span class="meter" style="width: '+ percentage +'%"></span>');
			}
		}, false);
		xhr.upload.addEventListener("load", function(e){
			$("#progress" + i).html('<span class="meter" style="width: 100%"></span>');;
		}, false);
		xhr.open("POST", "upload.php"); 
		xhr.overrideMimeType('text/plain; charset=x-user-defined-binary');
		xhr.send(formData);
	};
	
});