$(document).ready(function() {
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
			btn.data('loading-text', 'Сохранение...');
			btn.html('Сохранить');
			btn.on('click', function() {
				$.ajax({
					url: $this.data('save'),
					data: {
						id: $this.data('id'),
						field: $this.attr('name'),
						value: value
					},
//					beforeSend: function() {
//						btn.removeClass('btn-info');
//						btn.button('loading');
//					},
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

function sendFileToServer(formData,status) {
	var personId = $('#person').val();
    var uploadURL ="/admin/photo/jupload/"+personId; //Upload URL
    var extraData ={}; //Extra Data.
    var jqXHR=$.ajax({
		xhr: function() {
            var xhrobj = $.ajaxSettings.xhr();
            if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        //Set progress
//                        status.setProgress(percent);
                    }, false);
                }
            return xhrobj;
        },
    url: uploadURL,
    type: "POST",
    contentType:false,
    processData: false,
        cache: false,
        data: formData,
        dataType: "json",
		success: function(data){
			$.getJSON("/admin/photo/jgetphotos/"+personId, function(data) {
				var h4 = $('h4#noimages');
				if(h4.length > 0) {
					h4.closest('center').remove();
					var div = $('<div></div>').addClass('resultPhotos');
						div.attr('style', 'margin: 10px auto;');
						for (var i = 0; i < data.length; i++) {
							var img = $('<img src="/res/upload/photos/' + data[i].name + '" />');
								img.attr('id', 'galleryPhoto');
								img.attr('style', 'width: auto; height: auto; margin: 5px;');
							div.append(img);
						}
					div.insertAfter('div#dragandrophandler');
				} else {
					var div1 = $('div.resultPhotos');
					div1.remove();
					var table = $('table#images_table');
					table.remove();
					var div = $('<div></div>').addClass('resultPhotos');
						div.attr('style', 'margin: 10px auto;');
					for (var i = 0; i < data.length; i++) {
						var img = $('<img src="/res/upload/photos/' + data[i].name + '" />');
							img.attr('id', 'galleryPhoto');
							img.attr('style', 'width: auto; height: auto; margin: 5px;');
						div.append(img);
					}
					div.insertAfter('div#dragandrophandler');
				}
			});
		}
	}); 
 
//    status.setAbort(jqXHR);
};
 
var rowCount=0;
function createStatusbar(obj) {
	rowCount++;
	var row="odd";
	if(rowCount %2 === 0) row ="even";
	this.statusbar = $("<div class='statusbar "+row+"'></div>");
	this.filename = $("<div class='filename'></div>").appendTo(this.statusbar);
	this.size = $("<div class='filesize'></div>").appendTo(this.statusbar);
	this.progressBar = $("<div class='progressBar'><div></div></div>").appendTo(this.statusbar);
	this.abort = $("<div class='abort'>Abort</div>").appendTo(this.statusbar);
	obj.after(this.statusbar);

	this.setFileNameSize = function(name,size) {
	   var sizeStr="";
	   var sizeKB = size/1024;
	   if(parseInt(sizeKB) > 1024) {
		   var sizeMB = sizeKB/1024;
		   sizeStr = sizeMB.toFixed(2)+" MB";
	   } else {
		   sizeStr = sizeKB.toFixed(2)+" KB";
	   }

	   this.filename.html(name);
	   this.size.html(sizeStr);
	};
	this.setProgress = function(progress) {       
	   var progressBarWidth =progress*this.progressBar.width()/ 100;  
	   this.progressBar.find('div').animate({ width: progressBarWidth }, 10).html(progress + "% ");
	   if(parseInt(progress) >= 100) {
		   this.abort.hide();
	   }
	};
	this.setAbort = function(jqxhr) {
	   var sb = this.statusbar;
	   this.abort.click(function() {
		   jqxhr.abort();
		   sb.hide();
	   });
	};
};
function handleFileUpload(files,obj){
   for (var i = 0; i < files.length; i++) {
        var fd = new FormData();
        fd.append('file', files[i]);
 
//        var status = new createStatusbar(obj); //Using this we can set progress.
//        status.setFileNameSize(files[i].name,files[i].size);
        sendFileToServer(fd);
 
   }
};
$(document).ready(function() {
	var obj = $("#dragandrophandler");
	obj.on('dragenter', function (e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border', '2px solid #0B85A1');
	});
	obj.on('dragover', function (e) {
		 e.stopPropagation();
		 e.preventDefault();
	});
	obj.on('drop', function (e) {
		 $(this).css('border', '2px dotted #0B85A1');
		 e.preventDefault();
		 var files = e.originalEvent.dataTransfer.files;
		 handleFileUpload(files,obj);
	});
	$(document).on('dragenter', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});
	$(document).on('dragover', function (e) {
	  e.stopPropagation();
	  e.preventDefault();
	  obj.css('border', '2px dotted #0B85A1');
	});
	$(document).on('drop', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});
 
});