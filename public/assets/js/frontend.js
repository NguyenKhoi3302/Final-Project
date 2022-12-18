jQuery(document).ready(function (){
    swiper();
    AOS.init();
    if (jQuery('.counter').size()){
        jQuery  ('.counter').countUp();
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

    jQuery(document).ready( function () {
        jQuery('#dtBasicExample').DataTable({
            paging: false,
        });
    } );
})
function swiper(){
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
    jQuery("#grid_icon").click(function (){
        jQuery(".shop_item_wrap").removeClass('list');
        jQuery(".shop_item_wrap").addClass('grid');
        jQuery(this).addClass('active');
        jQuery("#list_icon").removeClass('active');
    });
    jQuery("#list_icon").click(function (){
        jQuery(".shop_item_wrap").removeClass('grid');
        jQuery(".shop_item_wrap").addClass('list');
        jQuery(this).addClass('active');
        jQuery("#grid_icon").removeClass('active');
    });
}
function showProdPopup(){
    jQuery('.showPopup').click(function(){
        id = jQuery(this).attr('data-id');
        styles = jQuery('.relatedProd .swiper-wrapper').css('transform');
        jQuery('.relatedProd  .swiper-wrapper').css({"transform": "unset"});
        jQuery('#prod-'+id).addClass('active');
        jQuery('#prod-'+id).css('display', '');
    });
}
function hideProdPopup(){
    jQuery('.close_btn').click(function (){
        jQuery('.prod-popup').removeClass('active');
        // jQuery('.prod-popup').css('display', 'none');
        // jQuery('.relatedProd .swiper-wrapper').css('transform',styles);
    });
    jQuery('.bg_close').click(function (){
        jQuery('.prod-popup').removeClass('active');
        // jQuery('.prod-popup').css('display', 'none');
        // jQuery('.relatedProd .swiper-wrapper').css('transform',styles);
    });
}
function qtty(){
    jQuery('.qtty_box').each(function() {
        var spinner = jQuery(this),
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
    jQuery('.product_gallery img').click(function() {
        var src = jQuery(this).attr('src');
        jQuery('#feature_img img').attr('src', src);
        // jQuery('#feature_img img').attr('srcset', str);
    })
}
function showProdTab(){
    jQuery('.single_product_2 li').click(function (){
        jQuery('.single_product_2 li').removeClass('active');
        jQuery(this).addClass('active');
        var id = jQuery(this).attr('id');
        jQuery('.single_product_2>.grid-container >div').removeClass('active');
        jQuery('div#'+id+'').addClass('active');
    })
}
function loginForm(){
    var loginBox = jQuery('.login_box');
    jQuery('.login_form').click(function (){
        loginBox.slideToggle();
        // if(jQuery('.login_box').hasClass('active')){
        //     loginBox.removeClass('active');
        // }
        // else {
        //     loginBox.addClass('active');
        // }
    });
    jQuery('.close_logn_form').click(function (){
        loginBox.removeClass('active');
        loginBox.slideToggle();
    });
    jQuery('.site_body').click(function(){
        loginBox.removeClass('active');
        loginBox.slideUp();
    })
}

function show_search_form(){
    jQuery('.search_open').click(function (event){
        event.preventDefault();

        jQuery('.wrap_search_popup').addClass('show')
    })
    jQuery('.bg_close,.button_close').click(function () {
        jQuery('.wrap_search_popup').removeClass('show');
    })
}
function showMoreProduct(){
    jQuery(".home_prod_wrap .item").slice(0, 6).show();
    jQuery("#view_more_prod").on("click", function(e){
        e.preventDefault();
        jQuery(".home_prod_wrap .item:hidden").slice(0, 6).slideDown();
        if(jQuery(".home_prod_wrap .item:hidden").length == 0) {
            jQuery("#view_more_prod").remove();
        }
    });
}
