<div>
    <style>
        .result-search {
            position: absolute;
            display: flex;
            flex-direction: column;
            column-gap: 12px;
            background-color: #666;
        }

        .result-item {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }
    </style>
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
                    <span>Giá:{{$result->price}}</span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</div>