<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BEBrandsController extends Controller
{
    public function index()
    {
        $brands = Brands::all();

        return view('admin.brands.index', [
            'data' => $brands
        ]);
    }

    public function save(Request $request)
    {
        $Brand = new  Brands();

        $slug = Str::slug($request->name);

        $Brand->fill([
            'name' => $request->name,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'sort' => Brands::max('sort') + 1,
            'slug' => $slug
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/brands/'), $imageName);
            $Brand->images = 'image/brands/' . $imageName;
            $Brand->save();
        } else {
            $Brand->image = '';
        }
        $Brand->save();

        return redirect()->back()->with('msg', 'Thêm danh mục thành công');
    }

    public function change_status($id)
    {
        $brands = Brands::select('appear')->where('id', $id)->first();

        if ($brands->appear === 1) {
            $appear = 0;
        } else {
            $appear = 1;
        }
        Brands::where('id', $id)->update(['appear' => $appear]);
        return redirect()->back()->with('msg', 'Thay đổi trạng thái thành công');

    }

    public function delete(Request $request)
    {
        $brands = Brands::where('id', $request->item_id)->first();
        $brands->delete();
        return redirect()->back()->with('msg', 'Xóa thành công');
    }

    public function update(Request $request)
    {
        $brands = Brands::where('id', $request->item_id)->first();
        $slug = Str::slug($request->name);
        $brands->fill([
            'name' => $request->name,
            'slug' => $slug
        ]);
        $brands->save();
        return redirect()->back()->with('msg', 'Cập nhật thành công');
    }

}
