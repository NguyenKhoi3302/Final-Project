function delete_category(id){
   var popup = jQuery('#modal-delete-category')
    popup.find('input[name=item_id]').val(id)
}
function update_category(id, title){
    var popup = jQuery('#modal-update-category')
    popup.find('input[name=item_id]').val(id)
    popup.find('input[name=name]').val(title)
}
