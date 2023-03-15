<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BEProductController extends Controller
{

    public function filter(Request $request)
    {

       $price_range = $request->input('price_range');
        $category_id = $request->input('category_id');
        $brand_id = $request->input('brand_id');
        $search = $request->input('search');
        $appear = $request->input('appear');
        $data = Product::select('products.id', 'products.name as product_name', 'products.view', 'products.price_pay', 'products.images', 'products.bought', 'products.price', 'products.discount',
            'products.sex', 'products.appear',
            'product_categories.name as cate_name', 'brands.name as brand_name')
            ->from('products')
            ->join('product_categories', 'product_categories.id', '=', 'products.pr_category_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('products.pr_category_id', $category_id);
            })
            ->when($brand_id, function ($query) use ($brand_id) {
                return $query->where('products.brand_id', $brand_id);
            })
            ->when($appear, function ($query) use ($appear) {
                return $query->where('products.appear', $appear);
            })
            ->when($search, function ($query) use ($search) {
                return $query->where('products.name', 'like', "%$search%");
            })
            ->when($price_range , function ($query) use ($price_range) {
                return $query->where('price', '<=', $price_range);
            })
            ->get();

        $html = view('Modals.back_end.product_load')
            ->with('products_load', $data)
            ->render();
        return response()->json(['BODY' => $html]);

    }

    public function index()
    {
        $data = Product::query('products')

//            ->select('products.id','products.name as name','products.price_pay', 'products.view', 'products.images', 'products.bought', 'products.price', 'products.discount',
            ->select('products.id', 'products.name as name', 'products.view', 'products.price_pay', 'products.images', 'products.bought', 'products.price', 'products.discount',
                'products.sex', 'products.appear',
                'product_categories.name as cate_name', 'brands.name as brand_name')
            ->join('product_categories', 'product_categories.id', '=', 'products.pr_category_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->paginate();
        $brand = Brands::all();
        $Cate = Category::all();
        return view('admin.product.index', compact('data', 'brand', 'Cate'));
    }


    public function add()
    {
        $categorys = Category::all();
        $brands = Brands::all();
        return view('admin.product.add', compact('categorys', 'brands'));
    }

    public function save(Request $request)
    {
        $products = new Product();

        $sku = 'PROD-' . Carbon::now()->format('YmdHis');
        $slug = Str::slug($request->name);

        $products->fill([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'pr_category_id' => $request->pr_category_id,
            'slug' => $slug,
            'contents' => $request->contents,
            'description' => $request->description,
            'price' => $request->price,
            'price_pay' => $request->price_pay,
            'discount' => $request->discount,
            'sku' => $sku,
            'sex' => $request->sex,
        ]);

        if ($request->hasFile('images')) {
            // Nếu trường avatar có file thì sẽ trả về true
            // 3.1 Xử lý tên file
            $avatar = $request->images;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username . '_' . $avatarName;
            // dd($avatar->storeAs('images/users', $avatarName));
            // 3.2 Lưu file và gán đường dẫn cho $user->avatar
            $products->images = $avatar->storeAs('image/products', $avatarName);
            // storage/app/images/users
            // Cấu hình config/filesystems.php để public/images ~ storage/app/images
            // Chạy câu lệnh: php artisan storage:link
        } else {
            $products->images = '';
        }

        $products->save();
        return redirect(url('admin/products'))->with('msg', 'Thay đổi trạng thái thành công');

    }

    public function delete(Request $request)
    {
        $product = Product::where('id', $request->item_id)->first();
        $product->delete();
        return redirect()->back()->with('msg', 'Xóa thành công');
    }

    public function change_status(Request $request, $id)
    {
        $product = Product::select('appear')->where('id', $id)->first();
        if ($product->appear == 0) {
            $appear = 1;
        } else {
            $appear = 0;
        }

        Product::where('id', $id)->update(['appear' => $appear]);


        return redirect()->back()->with('msg', 'Thay đổi trạng thái thành công');

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $categorys = Category::all();
        $brands = Brands::all();
        return view('admin/product/edit', compact('product', 'categorys', 'brands'));
    }

    public function update_save(Request $request, $id)
    {
        $products = Product::find($id);
        $slug = Str::slug($request->name);
        $sku = 'PROD-' . Carbon::now()->format('YmdHis');
        $products->fill([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'pr_category_id' => $request->pr_category_id,
            'slug' => $slug,
            'contents' => $request->contents,
            'description' => $request->description,
            'price' => $request->price,
            'price_pay' => $request->price_pay,
            'discount' => $request->discount,
            'sku' => $sku,
            'sex' => $request->sex,
        ]);
        if ($request->hasFile('images')) {
            $avatar = $request->images;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username . '_' . $avatarName;
            // dd($avatar->storeAs('images/users', $avatarName));
            $products->images = $avatar->storeAs('image/products', $avatarName);
        }

        $products->save();
        return redirect(url('admin/products'))->with('msg', 'Cập nhật sản phẩm thành công');
    }


}
