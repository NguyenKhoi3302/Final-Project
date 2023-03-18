<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\ProductComment;
use Carbon\Carbon;

class ProductCommentComponent extends Component
{
    public $message = "";
    public $product_id;

    public function storeComment(){
        $this->validate([
            'message' => 'required | max: 999'
        ],[
            'message.required' => 'Không thể bình luận trống không',
            'message.max' => 'Tối đa 1000 kí tự',
        ]);
        $newsComment = ProductComment::create([
            'product_id' => $this->product_id,
            'user_id' => Auth::id() ?? 1,
            'message' => $this->message,
        ]);
        $this->message = "";
        session()->flash('message','Bình luận thành công');
    }
    public function render()
    {
        $productComments = ProductComment::where('product_id',$this->product_id)->oldest()->get();
        return view('livewire.product-comment-component',['productComments' => $productComments]);
    }
}
