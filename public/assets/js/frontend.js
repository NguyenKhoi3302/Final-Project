$(document).ready(function (){
    swiper();
    AOS.init();
    if ($('.counter').size()){
        $  ('.counter').countUp();
    };
    shopDisplay();
    showProdPopup();
    hideProdPopup();
    qtty();
    changeImg();
    showProdTab();
    loginForm();
    show_search_form();
    showMoreProduct();
    $(document).ready( function () {
        $('#dtBasicExample').DataTable({
            paging: false,
        });
    } );
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
            $('.site_header').addClass("sticky");
        }
        else{
            $('.site_header').removeClass("sticky");

        }
    });
    profileTab();
    jQuery(document).delegate(".payment_wrap:not(.active)", "click", function(e){
        e.preventDefault();
        jQuery(".payment_wrap").removeClass("active");
        jQuery(".payment_wrap .payment_des").slideUp();
        jQuery(this).addClass("active");
        jQuery(this).children(".payment_des").slideDown();
        jQuery(".payment_wrap input").prop( "checked", false);
        jQuery(this).children().children().prop( "checked", true);
    })
})
function swiper(){
    var about = new Swiper(".about_swiper",{
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        pagination:{
            el: ".about_4 .swiper_pagination",
            clickable: true,
        }
    })
    var swiper = new Swiper(".homeBannerSwiper", {
        loop: true,
        speed: 2000,
        effect: 'fade',
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return "<span class='" + className + "'></span>";
            },
        },
    });
    var swiper = new Swiper(".brandSwiper", {
        loop: true,
        slidesPerView: 4,
        speed: 2000,
        grid:{
            rows: 2,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".home_6 .swiper-button-next",
            prevEl: ".home_6 .swiper-button-prev",
        }
    });
    var swiper = new Swiper(".shopSwiper", {
        loop: true,
        speed: 1200,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".shop_container .swiper-btn.next",
            prevEl: ".shop_container .swiper-btn.prev",
        }
    });
    var swiper = new Swiper(".singleProduct",{
        slidesPerGroup: 1,
        slidesPerView: 3,
        spaceBetween: 16,
        navigation: {
            nextEl: ".single_product_1 .outside-btn.next",
            prevEl: ".single_product_1 .outside-btn.prev",
        },
    });
    var swiper = new Swiper(".relatedProd",{
        slidesPerGroup: 1,
        slidesPerView: 4,
        spaceBetween: 30,
        // loop: true,
        navigation: {
            nextEl: ".single_product_3 .outside-btn.next",
            prevEl: ".single_product_3 .outside-btn.prev",
        },
    });
    var swiper = new Swiper(".postDetailSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        speed: 1500,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".another_posts .outside-btn.next",
            prevEl: ".another_posts .outside-btn.prev",
        },
    });
};var styles, id;
function shopDisplay(){
    $("#grid_icon").click(function (){
        $(".shop_item_wrap").removeClass('list');
        $(".shop_item_wrap").addClass('grid');
        $(this).addClass('active');
        $("#list_icon").removeClass('active');
    });
    $("#list_icon").click(function (){
        $(".shop_item_wrap").removeClass('grid');
        $(".shop_item_wrap").addClass('list');
        $(this).addClass('active');
        $("#grid_icon").removeClass('active');
    });
}
function showProdPopup(){
    $('.showPopup').click(function(){
        id = $(this).attr('data-id');
        styles = $('.relatedProd .swiper-wrapper').css('transform');
        $('.relatedProd  .swiper-wrapper').css({"transform": "unset"});
        $('#prod-'+id).addClass('active');
        $('#prod-'+id).css('display', '');
    });
}
function hideProdPopup(){
    $('.close_btn').click(function (){
        $('.prod-popup').removeClass('active');
        // $('.prod-popup').css('display', 'none');
        // $('.relatedProd .swiper-wrapper').css('transform',styles);
    });
    $('.bg_close').click(function (){
        $('.prod-popup').removeClass('active');
        // $('.prod-popup').css('display', 'none');
        // $('.relatedProd .swiper-wrapper').css('transform',styles);
    });
}
function qtty(){
    $('.qtty_box').each(function() {
        var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.qtty_plus'),
            btnDown = spinner.find('.qtty_minus'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

    });
}
function changeImg(){
    $('.product_gallery img').click(function() {
        var src = $(this).attr('src');
        $('#feature_img img').attr('src', src);
        // $('#feature_img img').attr('srcset', str);
    })
}
function showProdTab(){
    $('.single_product_2 li').click(function (){
        $('.single_product_2 li').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');
        $('.single_product_2>.grid-container >div').removeClass('active');
        $('div#'+id+'').addClass('active');
    })
}
function loginForm(){
    var loginBox = $('.login_box');
    $('.login_form').click(function (){
        loginBox.slideToggle();
        // if($('.login_box').hasClass('active')){
        //     loginBox.removeClass('active');
        // }
        // else {
        //     loginBox.addClass('active');
        // }
    });
    $('.close_logn_form').click(function (){
        loginBox.removeClass('active');
        loginBox.slideToggle();
    });
    $('.site_body').click(function(){
        loginBox.removeClass('active');
        loginBox.slideUp();
    })
}

function show_search_form(){
    $('.search_open').click(function (event){
        event.preventDefault();

        $('.wrap_search_popup').addClass('show')
    })
    $('.bg_close,.button_close').click(function () {
        $('.wrap_search_popup').removeClass('show');
    })
}
function showMoreProduct(){
    $(".home_prod_wrap .item").slice(0, 6).show();
    $("#view_more_prod").on("click", function(e){
        e.preventDefault();
        $(".home_prod_wrap .item:hidden").slice(0, 6).slideDown();
        if($(".home_prod_wrap .item:hidden").length == 0) {
            $("#view_more_prod").remove();
        }
    });
}
function profileTab(){
    $('.left_col_menu li:not(:last-child)').click(function (e){
        e.preventDefault();
        $('.left_col_menu li').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('data-id')
        $('.right_account>div').removeClass('active');
        $('.right_account>div#'+id).addClass('active');
    })
}
