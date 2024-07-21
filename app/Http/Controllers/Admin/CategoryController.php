<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();
        return view ('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([

            'category_name' => 'required|unique:categories,name',
            'category_image' => 'nullable|image|mimes:jpeg,png|max:50', // File type and size validation
        ]);
        
        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = $request->slug;

        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('Category-Image', 'public');
            $category->image = $imagePath;
        }


        if($category->save()) {
            return redirect()->route('admin.category.index');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        // dd($category);
        // $category = Category::findorFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
   
     public function update(Request $request, Category $category, $id)
    {

        $category = Category::findorFail($id);
    
        $category->name = $request->category_name;
        $category->slug = $request->slug;

        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('Category-Image', 'public');
            $category->image = $imagePath;
        }

        if ($category->save()) {
            return redirect()->route('admin.category.index');
        }

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if($category->delete()){

            return redirect()->route('admin.category.index');
        }
        return redirect()->back();
    }
}
