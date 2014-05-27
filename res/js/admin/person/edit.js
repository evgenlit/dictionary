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
	$('form#video_add').submit(function(e) {
		var personId = $("input#personID").val();
		$.post(
		'/admin/video/jvideoAdd/'+personId, 
		$(this).serialize(), function(data) {

		if (undefined !== data.resident_balance) {
			$('.modal').modal('hide');
			var span = $('span#resbalance' + $('input#sushnevo_payment_resident').val());
			$('div.regpay').dialog('close');
			span.animate({
				backgroundColor: "#00bb00"
			}, 1000);
			span.html(data.resident_balance);
			span.animate({
				backgroundColor: "#ffffff"
			}, 1000);
			var h4 = $('h4#noresults');
			if (h4.length > 0) {
				h4.closest('center').remove();
				var resulttr = '<tr>' + 
								'<td class="muted">' + data.sushnevo_payment_id + '</td>' +
								'<td>' + data.sushnevo_payment_date + '</td>' +
								'<td>' + data.sushnevo_payment_sum + ' руб.</td>' +
								'<td></td>' +
				'</tr>';
					//			$('table#residentPays').append(tr);
				var table = $('<table></table>');
					table.attr('id', 'residentPays');
					table.attr('class', 'table table-striped');
					table.attr('style', 'width: 70%');

				var thead = $('<thead></thead>');

				var tr = '<tr>' + 
					'<th class="muted">' + '#' + '</th>' + 
					'<th>' + 'Дата платежа' + '</th>' +
					'<th>' + 'Сумма' + '</th>' +
					'<th></th>' +
					'</tr>';
				var tbody = $('<tbody></tbody>');
				thead.append(tr);
				tbody.append(resulttr);
				table.append(thead);
				table.append(tbody);
				table.insertAfter('#paymentMain');
			} else {
				var newtr = '<tr>' + 
							'<td class="muted">' + data.sushnevo_payment_id + '</td>' +
							'<td>' + data.sushnevo_payment_date + '</td>' +
							'<td>' + data.sushnevo_payment_sum + ' руб.</td>' +
							'<td></td>' +
				'</tr>';
				$('table#residentPays').append(newtr);
			}
		}
		});
		e.preventDefault();
	});
});