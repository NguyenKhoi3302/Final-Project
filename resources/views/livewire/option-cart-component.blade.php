<div>
    @foreach($products->productDetails as $productDetail)
    <div class="qtty_box">
        <label for="">{{$productDetail->color}}</label>
        <input type="checkbox" name="color" value="{{$productDetail->color}}">
    </div>
    @endforeach
    <select name="size" id="">
        @foreach($products->productDetails as $productDetail)
        <option value="{{$productDetail->size}}">{{$productDetail->size}}</option>
        @endforeach
    </select>
</div>