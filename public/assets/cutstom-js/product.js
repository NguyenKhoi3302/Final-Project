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
