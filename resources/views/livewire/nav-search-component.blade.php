<div>
    <form action="{{route('search')}}" role="search" method="get" id="searchform" class="searchform">
        <input type="text" name="q" id='s' placeholder="Nhập ở đây" wire:model='q'>
        <input type="submit" id="searchsubmit" value="Tìm kiếm">
    </form>
    @if($q)
    <ul class="result-search">
        @foreach($results as $result)
        <li>
            <div class="result-item">
                <a href="{{route('single-product',[$result->id])}}">
                    <img src="" alt="" width="70px">
                </a>
                <div class="result-item__info">
                    <h3 class="result-item__name">
                        <a href="{{route('single-product',[$result->id])}}">{{$result->name}}</a>
                    </h3>
                    <span class="search_price">Giá: <strong>{{number_format($result->price, 0, ',', '.')}} vnđ</strong></span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</div>
