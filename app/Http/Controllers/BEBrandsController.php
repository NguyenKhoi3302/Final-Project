<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BEBrandsController extends Controller
{
    public function index(){
        $brands = Brands::all();

        return view('admin.brands.index', [
            'data' => $brands
        ]);
    }

    public function save(Request $request){
        $category = new  Brands();

        $slug = Str::slug($request->name);

        $category->fill([
            'name' => $request->name,
            'slug' => $slug
        ]);

        $category->save();

        return redirect()->back()->with('msg', 'Thêm danh mục thành công');
    }

    public function change_status($id){
        $brands = Brands::select('appear')->where('id', $id)->first();

        if ($brands->appear === 1) {
            $appear = 0;
        } else {
            $appear = 1;
        }
        Brands::where('id', $id)->update(['appear' => $appear]);
        return redirect()->back()->with('msg', 'Thay đổi trạng thái thành công');

    }

    public function delete(Request $request){
        $brands = Brands::where('id' , $request->item_id)->first();
        $brands->delete();
        return redirect()->back()->with('msg', 'Xóa thành công');
    }

    public function update(Request $request){
        $brands = Brands::where('id' , $request->item_id)->first();
        $slug = Str::slug($request->name);
        $brands->fill([
            'name' => $request->name,
            'slug' => $slug
        ]);
        $brands->save();
        return redirect()->back()->with('msg', 'Cập nhật thành công');
    }

}
