(function($){
	$.fn.load_file = function(action_file, callback){
		var iframe_conteiner = $(
        '<div>'+
          '<iframe name="load_file_iframe"></iframe>'+
		  '<form action="'+action_file+'" method="post" enctype="multipart/form-data" target="load_file_iframe"></form>'+
        '</div>'
		).prependTo('body').css({
			'position':'absolute',
			'top':'-10px',
			'left':'-10px',
			'overflow':'hidden',
			'width':0,
			'height':0
		}),
		form = iframe_conteiner.find('form'),
		load_file_iframe =  iframe_conteiner.find('iframe'),
		input_file_wrap,
		input_file_imitator,
		input_file,
		inp_file_clone,
		data = null;

		return this.each(function(){
			input_file_wrap = $(this).wrap('<div class="input-file-wrap"></div>').parent();
			input_file_imitator = $('<p class="input-file-imitator">обзор ...</p>').prependTo(input_file_wrap);
			$(this).change(function(e) {
				e.stopImmediatePropagation();
				input_file = $(this);
				inp_file_clone = $(input_file.clone(true)).replaceAll(this);
				form.html(input_file).submit(function(e) {
					e.stopImmediatePropagation();
					load_file_iframe.load(function(e) {
						e.stopImmediatePropagation();
						if(this.contentWindow.data)
						data = this.contentWindow.data;
						else
						data = $(this).contents().find('body').html();
						if(typeof(callback) == 'function')
						{
						    callback.call(this, data);	
						}
					});
				}).submit();
			});
		});
	};
})(jQuery);
$(function(){
	$('#file').load_file('/res/etc/send.php', function(img){
		$('#deBag').html(img);
	});
});