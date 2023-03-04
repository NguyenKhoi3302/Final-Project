function delete_brand(id){
    var popup = jQuery('#modal-delete-brand')
    popup.find('input[name=item_id]').val(id)
}
function update_brand(id){
    var name = jQuery('#update_brand').attr('data-name')

    var popup = jQuery('#modal-update-brand')
    popup.find('input[name=item_id]').val(id)
    popup.find('input[name=name]').val(name)
}
