<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    //
    public function index()
    {
        $products = product::get();
        return view('backend.product.list', compact('products'));
    }

    public function create()
    {
        $categories = category::select('id', 'name')->get();
        return view('backend.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'code' => 'required|string|max:255',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
            'is_active' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'There were some problems with your input.');
        }


        $fileName = '';

        if ($request->hasFile('product_image')) {
            $imageFile = $request->file('product_image');
            $extension = $imageFile->getClientOriginalExtension();
            $fileName = time() . 'product-' . uniqid() . '.' . $extension;

            $imageFile->storeAs('public/products', $fileName);

        }

        product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'code' => $request->code,
            'product_image' => $fileName,
            'is_active' => $request->is_active,
        ]);
        return redirect()
            ->route('admin.products.list')
            ->with('success', 'Product created successfully.');
    }
}
