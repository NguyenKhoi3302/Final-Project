$(document).ready(function (){
    ChangeToSlug();
    repeater();

    jQuery("a.show_full").click(function (e){
        e.preventDefault();
        var url = jQuery(this).attr('href'),
            img_src = jQuery(this).children().attr('src');

        jQuery("#popup_fullsize").addClass('active');
        jQuery(".image_full").attr('src', img_src);
        jQuery('#img_info').empty().load(url);
    })

    jQuery(".choose_img_btn").click(function (e){
        e.preventDefault();
        var url = jQuery(this).attr('href');
        jQuery(".popup_full").addClass('active');

        jQuery('#popup_gallery').empty().load(url);
    })
})
function drag(){
    var dragging = null;
    document.addEventListener('dragstart', function(event) {
        dragging = event.target;
        var id = event.target.getAttribute('data-id');

        event.dataTransfer.setData('text/html', dragging);
    });

    document.addEventListener('dragover', function(event) {
        event.preventDefault();
    });

    document.addEventListener('dragenter', function(event) {
        event.target.style['border-bottom'] = 'solid 2px #93ddf5';
    });

    document.addEventListener('dragleave', function(event) {
        event.target.style['border-bottom'] = '';
    });

    document.addEventListener('drop', function(event) {
        event.preventDefault();
        event.target.style['border-bottom'] = '';
        var id = event.target.getAttribute('data-id');
        event.target.parentNode.insertBefore(dragging, event.target.nextSibling);
    });
}
function repeater(){

    $(document).delegate(".relationship > .list_block > ul > li","click",function(e){
        e.preventDefault()
        //code lấy dữ liệu khi click
        var value = $(this);
        var id = $(this).attr('data-id');
        var data = $(this).parents(".relationship").next().val();
        //code xử lý dữ liệu
        if(data != '' && data != null && data != undefined){
            var data = data.trim().split(',');
            data.push(id);
        }
        else{
            var data = []
        }
        //code xuất dữ liệu
        $(this).parents(".relationship").next().val(data);
        $(this).parents(".list_block").next().children().append(value);
    })
    $(document).delegate(".relationship > .chose > ul > li","click",function(e){
        e.preventDefault()
        //code lấy dữ liệu khi click
        var value = $(this);
        var id = $(this).attr('data-id');
        var data = $(this).parents(".relationship").next().val();
        //code xử lý dữ liệu
        if(data != '' && data != null && data != undefined){
            var data = data.trim().split(',');
            var index = data.indexOf(id);
            data.splice(index, 1);
        }
        //code xuất dữ liệu
        $(this).parents(".relationship").next().val(data);
        $(this).parents(".chose").prev().children().append(value);
    })
}
function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}
function ChangeToSlug() {
    $("input.title_input").keyup(function (e) {
        e.preventDefault();
        var title, slug;

        //Lấy text từ thẻ input title
        title = $(this).val();

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        $("input.slug_output").val(slug)
    })
}
