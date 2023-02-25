<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BECategoryCotroller extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', [
            'data' => $categories
        ]);
    }

    public function save(Request $request){
       $category = new  Category();

       $slug = Str::slug($request->name);

       $category->fill([
           'name' => $request->name,
           'slug' => $slug,
           'sort' => Category::max('sort') + 1
       ]);

       $category->save();

       return redirect()->back()->with('msg', 'Thêm danh mục thành công');
    }

    public function change_status($id){
        $category = Category::select('appear')->where('id', $id)->first();
        if ($category->appear == 1) {
            $appear = 0;
        } else {
            $appear = 1;
        }

        Category::where('id', $id)->update(['appear' => $appear]);
        Toastr::success('msg', 'Thay đổi trạng thái thành công');

        return redirect()->back()->with('msg', 'Thay đổi trạng thái thành công');

    }

    public function delete(Request $request){
        $category = Category::where('id' , $request->item_id)->first();
        $category->delete();
        return redirect()->back()->with('msg', 'Xóa thành công');
    }

    public function update(Request $request){
        $category = Category::where('id' , $request->item_id)->first();
        $slug = Str::slug($request->name);
        $category->fill([
            'name' => $request->name,
            'slug' => $slug
        ]);
        $category->save();
        return redirect()->back()->with('msg', 'Cập nhật thành công');
    }
}
