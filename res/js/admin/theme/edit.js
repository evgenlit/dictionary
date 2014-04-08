$(function() {
    $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
    $('#date').datepicker({'dateFormat': 'dd.mm.yy'});
    
    var my_timepicker = new ng.TimePicker({
        input:'time',
        format:'H:i',
        server_format:'H:i',
        use24:true,
        always_simple:true
    });
    
    $('.delete').click(function(e) {
        var id = $(this).data('id');
        alertify.confirm("Новость будет удалена. Продолжить?", function(e) {
            if (e) {
                location.href = '/admin/posts/delete/' + id;
            } else {
            }
        }); 
        
        e.preventDefault();
    });
});