$(document).ready(function() {

    load_products();
    $('#category, #brand, #search, #appear, #price_range').on('change keyup', function() {
        load_products();
    });
});

function load_products() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var category = $('#category').val();
    var brand = $('#brand').val();
    var search = $('#search').val();
    var appear = $('#appear').val();
    var price_range = $('#price_range').val();
    $.ajax({
        url: 'http://127.0.0.1:8000/admin/product/filter',
        method: 'POST',
        data: { category_id: category, brand_id: brand, search: search, appear: appear, price_range: price_range },
        success: function(response) {
            $('#body-load-product').empty().html(response.BODY);
        }
    });
}



function calculatePrice() {
    var frm = $('#frm-add-product');

    var price = $('.money_format').val().trim();
    var discount = $('.number_format').val().trim();
    price = price.replace(/,/g, '');
    discount = discount.replace(/,/g, '');

    $('.money_pay').val('');

    if (price > 0) {
        if (discount > 0) {
            price = Math.round(price - (price * discount / 100));
        }
        if (price > 0) {
            $('.money_pay').val(price).formatCurrency();
        }
    }
}
function delete_product(id){
    var popup = jQuery('#modal-delete-product')
    popup.find('input[name=item_id]').val(id)
}

function changestus(id){
    event.preventDefault()
    $.ajax({
        url: 'http://127.0.0.1:8000/admin/product/changeStatus/' + id,
        method: 'get',
        success: function(response) {
            toastr.success('Cập nhật trạng thái thành công');
        }
    });
}
var rangeInput = $('rprice_range');
rangeInput.on('input', function() {
    var value = rangeInput.val();
   alert(value)
});
