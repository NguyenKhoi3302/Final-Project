<div>
    <div class="swiper postDetailSwiper">
        <h3 class=""><span>{{$productComments->count()}}</span> bình luận</h3>
        <div class="swiper-wrapper">
            <ul class='comment-list'>
                @foreach($productComments as $productComment)
                <li class="comment-item">
                    <div class="comment-item__avatar"></div>
                    <div class="comment-item__content">
                        <div class="comment-item__content--title">
                            <h5 class="comment-item__name">{{$productComment->user->name}}</h5>
                            <span class="comment-item__date">{{$productComment->created_at->diffForHumans()}}</span>
                        </div>
                        <p class="comment-item__message">{{$productComment->message}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="swiper form-comment">
        <form wire:submit.prevent="storeComment" method="POST">
            <div>
                <label for="">Nội dung</label>
                <textarea name="message" id="message" rows="10" wire:model.defer="message"></textarea>
                @error('message')
                <small style="color: red">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn-submit">Đăng</button>
        </form>
    </div>
</div>