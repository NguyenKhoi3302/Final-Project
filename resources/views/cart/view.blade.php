@extends('layouts.guest')
@section('content')
<div class="cart_wrapper">
    @include('cart.component.cart_component')
</div>

<script>
    function cartDelete(event){
        event.preventDefault();
        let urlDeleteCart = $('.cart').data('url');
        let id = $(this).data('id');
        $.ajax({
            type:"GET",
            url: urlDeleteCart,
            data: {id: id},
            success: function (data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_component);
                }
            },
            error: function (){

            }
        });
    }

    $(function(){
        $(document).on('click','.cart_update', cartUpdate)
        $(document).on('click','.cart_delete', cartDelete)
    });
    $(document).ready(function(){
        $(document).delegate(".quant.plus"," click", function(){
            var input = jQuery(this).prev();
            input.val(parseInt(input.val()) + 1);
            input.change();
            var id = jQuery(this).attr('data-id'),
                quan = input.val(),
                url = jQuery('.update_cart_url').attr('data-url');
            $.ajax({
                type:"GET",
                url: url,
                data: {id: id, quatity: quan},
                success: function (data){
                    if(data.code === 200){
                        $('.cart_wrapper').html(data.cart_component);
                    }
                },
                error: function (){

                }
            });
        })
        $(document).delegate(".quant.minus"," click", function(){
            var input = jQuery(this).next();
            input.val(parseInt(input.val()) - 1);
            input.change();
            var id = jQuery(this).attr('data-id'),
                quan = input.val(),
                url = jQuery('.update_cart_url').attr('data-url');
            $.ajax({
                type:"GET",
                url: url,
                data: {id: id, quatity: quan},
                success: function (data){
                    if(data.code === 200){
                        $('.cart_wrapper').html(data.cart_component);
                    }
                },
                error: function (){

                }
            });
        })
    })
</script>
@endsection
