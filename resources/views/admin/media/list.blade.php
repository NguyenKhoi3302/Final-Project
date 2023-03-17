@foreach($media as $img)
    <div class="img_wrap">
        <a class="show_full" href="/admin/media/img_full/{{$img->id}}" data-id="{{$img->id}}">
            <img src="{{asset($img->url)}}" alt="{{$img->alt}}">
        </a>
    </div>
@endforeach
<script>
    // Ẩn popup
    jQuery(".popup_full.active .close_btn,.popup_full.active .bg_dark").click(function (e){
        e.preventDefault();
        jQuery(".popup_full").removeClass('active');
        jQuery('#img_info').empty();
        jQuery("img.thumbnail").attr('src', '');
    })
    // Show full hình ảnh
    jQuery("a.show_full").click(function (e){
        e.preventDefault();
        var url = jQuery(this).attr('href'),
            img_src = jQuery(this).children().attr('src'),
            img_id = jQuery(this).attr('data-id')

        jQuery("img.thumbnail").attr('src', img_src);
        jQuery(".choose_btn").attr('data-src', img_src);
        jQuery(".choose_btn").attr('data-id', img_id);
        jQuery('#img_info').empty().load(url);
    })
    // Chọn ảnh
    jQuery(".choose_btn").click(function(e){
        var id = jQuery(this).attr("data-id"),
            key = jQuery(this).attr("data-key"),
            src = jQuery(this).attr("data-src");
        //Đưa id ảnh vào input để post
        if($(this).hasClass('add_to_gallery')){
            var html = `<div class="img_gallery_wrap"><img src="`+ src +`"></div>`;
            jQuery(".gallery_wrap."+key).append(html);
            var data = jQuery("input."+key).val();
            if(data != '' && data != null && data != undefined){
                var data = data.trim().split(',');
                data.push(id);
            }
            else{
                var data = []
            }
            jQuery("input."+key).val(data);
            console.log(data)
        }
        else{
            jQuery('input.'+key).val(id)
            //Hiển thị ảnh cho người dùng thấy
            jQuery('img.'+key).attr('src', src);
        }

        jQuery(".popup_full").removeClass('active');
        jQuery('#img_info').empty();
    })
</script>
