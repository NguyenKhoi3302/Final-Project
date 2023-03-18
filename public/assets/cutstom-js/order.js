$(document).ready(function (){
    load_order_new();
    $('#status, #arrange, #code').on('change keyup', function() {
        load_order_new();
    });
})
function load_order_new(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var status = $('#status').val();
    var arrange = $('#arrange').val();
    var code = $('#code').val();
    $.ajax({
        url: 'http://127.0.0.1:8000/admin/order/filter',
        method: 'POST',
        data: { status: status, code: code, arrange: arrange},
        success: function(response) {
            $('#body-load-order').empty().append(response.BODY);
        }
    });

}
