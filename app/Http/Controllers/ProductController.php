<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warehouse;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->get();
        return view('shop.index', compact('products'));
    }

    public function create()
    {
        $all_warehouses = Warehouse::all();
        return view('product.create', compact('all_warehouses'));
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'category' => 'required',
        ]);

        if ($validated) {
            $product = null;

            if ($request->has('product_id')) {
                $product = Product::find($request->input('product_id'));
                $product->updated_by = Auth::user()->id;
            } else {
                $product = new Product();
                $product->created_by = Auth::user()->id;
            }

            $product->product_name = $request->input('product_name');
            $product->Country = $request->input('Country');
            $product->price = $request->input('price');
            $product->save();

            return redirect()->route('product.index')->with('success', 'Product saved successfully');
        } else {
            return back()->withErrors($validated)->withInput();
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        //$all_warehouses = Warehouse::all();
        return view('shop.edit', compact('product'));
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        $product->delete();

        return redirect()->route('shop.index')->with('success', 'Product deleted successfully');
    }

    public function view($id)
    {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        return view('shop.view', compact('product'));
    }
    public function update(Request $request, $id)
{
    
    $validated = $request->validate([
        'product_name' => 'required|max:255',
        'price' => 'required|numeric',
    ]);

    if ($validated) {
        $product = Product::find($id);

        if ($product == null) {
            return response('Invalid ID', 403);
        }

        $product->product_name = $request->input('product_name');
        $product->Country = $request->input('Country');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    } else {
        return back()->withErrors($validated)->withInput();
    }
}
}

