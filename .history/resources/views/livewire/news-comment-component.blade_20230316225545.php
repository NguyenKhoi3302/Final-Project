<div>
    <div class="grid-container">
        <div class="section_heading">
            <div class="sec_title">
                Bình luận
            </div>
        </div>
        <div class="box_swiper">
            <div class="swiper postDetailSwiper">
                <h3 class=""><span>{{$newsComments->count()}}</span> bình luận</h3>
                <div class="swiper-wrapper">
                    <ul class='comment-list'>
                        @foreach($newsComments as $newsComment)
                        <li class="comment-item">
                            <div class="comment-item__avatar"></div>
                            <div class="comment-item__content">
                                <div class="comment-item__content--title">
                                    <h5 class="comment-item__name">{{$newsComment->user->name}}</h5>
                                    <span
                                        class="comment-item__date">{{$newsComment->created_at->diffForHumans()}}</span>
                                </div>
                                <p class="comment-item__message">{{$newsComment->message}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="swiper form-comment">
                <form wire:submit.prevent="storeComment" method="POST">
                    @csrf
                    <div>
                        <label for="">Nội dung</label>
                        <textarea name="message" id="message" rows="10" wire:model.defer="message"></textarea>
                        @error('message')
                        <small style="color: red">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn-submit">Đăng binh luận</button>
                </form>
            </div>
        </div>
    </div>
</div>