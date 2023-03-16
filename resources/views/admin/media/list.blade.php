@foreach($media as $img)
    <div class="img_wrap">
        <a class="show_full" href="/admin/media/img_full/{{$img->id}}">
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
            img_alt = jQuery(this).children().attr('alt');
        jQuery("img.thumbnail").attr('src', img_src);
        jQuery(".choose_btn").attr('data-src', img_src);
        jQuery(".choose_btn").attr('data-alt', img_alt);
        jQuery('#img_info').empty().load(url);
    })
    // Chọn ảnh
    jQuery(".choose_btn").click(function(e){
        var src = jQuery(this).attr("data-src"),
            alt = jQuery(this).attr("data-alt");
        jQuery('.src_result').val(src);
        jQuery('.alt_result').val(alt);
        jQuery('.img_result').attr('src', src);
        jQuery(".popup_full").removeClass('active');
        jQuery('#img_info').empty();
    })
</script>
