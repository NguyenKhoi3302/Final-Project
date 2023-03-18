$(document).ready(function (){
    load_catagory_new();
    $('#category_id, #hot, #search, #appear').on('change keyup', function() {
        load_catagory_new();
    });
})
function load_catagory_new(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var category = $('#category_id').val();
    var search = $('#search').val();
    var appear = $('#appear').val();
    var hot = $('#hot').val();
    $.ajax({
        url: 'http://127.0.0.1:8000/admin/admin/news/filter',
        method: 'POST',
        data: { category_id: category, search: search, appear: appear, hot: hot },
        success: function(response) {
            $('#body-load-new').empty().append(response.BODY);
        }
    });

}
