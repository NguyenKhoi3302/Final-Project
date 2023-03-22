$(document).ready(function () {
    load_order_new();
    $('#status, #arrange, #code').on('change keyup', function () {
        load_order_new();
    });


})

function load_order_new() {
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
        data: {status: status, code: code, arrange: arrange},
        success: function (response) {
            $('#body-load-order').empty().append(response.BODY);
        }
    });
}


// $('#status-change').on('change', function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     alert('ok')
//     var id = $(this).attr('data-id');
//     alert(id)
//
//     // $.ajax({
//     //     type: "post",
//     //     url: "http://127.0.0.1:8000/admin/staff/load/address",
//     //     data: {
//     //         action: action,
//     //         id: id
//     //     },
//     //     success: function (res) {
//     //         $("#" + result).html(res)
//     //     }
//     // });
// });


function update_status(event) {
    var selected_value = event.target.value;
    var id = event.target.dataset.id;
    $.ajax({
        type: "post",
        url: "http://127.0.0.1:8000/admin/order/update-status/"+id,
        data: {
            status: selected_value,
        },
        success: function (res) {
            toastr.success('Cập nhật trạng thái thành công');
        }
    });
}

