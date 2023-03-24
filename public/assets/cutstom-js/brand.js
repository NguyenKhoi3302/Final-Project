function delete_brand(id) {
    var popup = jQuery('#modal-delete-brand')
    popup.find('input[name=item_id]').val(id)
}

function update_brand(id, title) {
    event.preventDefault();
    $.ajax({
        url: 'http://127.0.0.1:8000/admin/brand/update/' + id,
        type: 'get',
        dataType: "json",
        success: function (record) {
            $('#body-brands').html(`
                        <input type="hidden" value="${record.id}" name="item_id" />
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề</label>
                            <input type="text" name="name" value="${record.name}" class="form-control" autofocus required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa SEO</label>
                            <input type="text" name="keywords" value="${record.keywords}" class="form-control" autofocus required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả ngắn</label>
                            <textarea class="form-control"  name="description">${record.description}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Ảnh đại diện</label>
                            <input type="file" name="image" class="form-control" autofocus />
                            <img src="http://127.0.0.1:8000/${record.image}" width="50px" alt="">
                        </div>
             `)
            $("#modal-update-brand").modal("show");
        }
    });

}
