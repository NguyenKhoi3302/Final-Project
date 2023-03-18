function delete_brand(id){
    var popup = jQuery('#modal-delete-brand')
    popup.find('input[name=item_id]').val(id)
}
function update_brand(id, title){
    var popup = jQuery('#modal-update-brand')
    popup.find('input[name=item_id]').val(id)
    popup.find('input[name=name]').val(title)
}
