<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]); // HELYES
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'slug' => 'unique:products,slug',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->detailed_description = $request->detailed_description;
        $product->price = $request->price;
        $product->discountPrice = $request->discountPrice;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/assets/images/gallery'), $imageName);
            $product->image = $imageName;
        } else {
            $product->image = 'noimage.jpg';
        }
        if ($request->input('delete_image') == 1 && $product->image) {
            $imagePath = public_path('/assets/images/gallery/' . $product->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $product->image = 'noimage.jpg';
        }
        $product->save();
        return redirect()->route('admin.products.index')->with('success', 'Termék sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.create', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'slug' => 'unique:products,slug',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->detailed_description = $request->detailed_description;
        $product->price = $request->price;
        $product->discountPrice = $request->discountPrice;
        // Ha új kép van feltöltve
        if ($request->hasFile('image')) {
            // Régi kép törlése, ha nem az alapértelmezett
            if ($product->image && $product->image !== 'noimage.jpg') {
                $oldImagePath = public_path('/assets/images/gallery/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Új kép mentése
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/assets/images/gallery'), $imageName);
            $product->image = $imageName;
        }
        if ($request->input('delete_image') == 1 && $product->image) {
            $imagePath = public_path('/assets/images/gallery/' . $product->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $product->image = 'noimage.jpg';
        }
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Termék sikeresen frissítve.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Termék sikeresen törölve!');
    }
}
