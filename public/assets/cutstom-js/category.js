function delete_category(id){
   var popup = jQuery('#modal-delete-category')
    popup.find('input[name=item_id]').val(id)
}
function update_category(id){
    var name = jQuery('#update_cate').attr('data-name')

    var popup = jQuery('#modal-update-category')
    popup.find('input[name=item_id]').val(id)
    popup.find('input[name=name]').val(name)
}
