<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view ('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'subcategory_name' => 'required|unique:sub_categories,name',
            'subcategory_image' => 'nullable|image|mimes:jpeg,png|max:50', // File type and size validation
        ]);
        
        
        $subcategory = new SubCategory();

        
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->subcategory_name;
        $subcategory->slug = $request->slug;


        if ($request->hasFile('subcategory_image')) {
            $imagePath = $request->file('subcategory_image')->store('SubCategory-Image', 'public');
            $subcategory->image = $imagePath;
        }

        if($subcategory->save()) {
            return redirect()->route('subcategory.index');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.subcategory.edit', compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request ->validate([
            'subcategory_name' => 'required',
            'category_id' => 'required',
        ]);

        $subCategory->name = $request->category_name;
        $subCategory->slug = $request->slug;
        $subCategory->category_id = $request->category_id;

        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('SubCategory-Image','public');
            $subCategory->image = $imagePath;
        }

        if($subCategory->save()){
            return redirect()->route('subcategory.index');
        }
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        if($subCategory->delete()){
            return redirect()->route('subcategory.index');
        }else{
            return redirect()->back();  
        }
      
    }
}
