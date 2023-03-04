@extends('client/index')
@section('content')
<div class="cart_wrapper">
  @include('cart.component.cart_component')
</div>
  
    <script> 
         function cartUpdate(event){
            event.preventDefault();
            let urlUpdateCart = $('.update_cart_url').data('url');
            let id = $(this).data('id');
            let quatity = $(this).parents('tr').find('input.quatity').val();
            $.ajax({
                type:"GET",
                url: urlUpdateCart,
                data: {id: id, quatity: quatity},
                success: function (data){
                    if(data.code === 200){
                        $('.cart_wrapper').html(data.cart_component);
                    }
                },
                error: function (){

                }
            });
        }

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
    </script>
@endsection
