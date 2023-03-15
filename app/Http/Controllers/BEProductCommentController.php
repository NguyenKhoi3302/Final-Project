<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductComment;

class BEProductCommentController extends Controller
{
    public function index(){
        $title = 'Bình luận sản phẩm';
        $productComments = ProductComment::all();
        return view('admin.product.product_comment',compact('productComments','title'));
    }
    public function destroy(){
        $idComment = request()->get('product-comment-id');
        $commentDelete = ProductComment::findOrFail($idComment);
        $commentDelete->delete();
        return back()->with('msg', 'Xóa bình luận thành công');
    }
}
