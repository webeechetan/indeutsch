<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductVariant;
use App\Models\GallaryImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.product.create',compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product = new Product();
        $product->name = $request['product_name'];
        $product->slug = $request['slug'];
        $product->category_id = $request['category_id'];
        $product->subcategory_id = $request['subcategory_id'];


        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('Product-Image', 'public');
            $product->image = $imagePath;
        }
        $product->save();


        // $productvariant = new Productvariant();

        foreach ($request->product_images as $key => $variantImage) {
            // Save variant information to the database
            $variant = new ProductVariant();
            $variant->product_id = $product->id; // Assuming you have access to $product
            $variant->color = $request['variant_color'][$key]; // Access color using $request['variant_color']
            $variant->weight = $request['weight'][$key];
            $variant->short_description = $request['short_description'][$key];
            $variant->long_description = $request['long_description'][$key];
        
            // Handle variant image upload
            if ($request->hasFile('product_images')) {
                $imagePath = $request->file('product_images')[$key]->store('variant_images', 'public');
                $variant->image_path = $imagePath;
            }
        
            $variant->save();
        }
        

        //$productvariant->save();


        $gallaryImage = new GallaryImage();
        $gallaryImage->variant_id = $variant->id;
    
        $gallaryImage->save();



       



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        dd($product);

        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        dd($product);
        if($product->delete()){
            return redirect()->route('product.index');
        }else{
            return redirect()->back();  
        }
    }

    public function fetchSubcategories($id)
    {

        dd('helo fetchSubcategories');
    }
}
