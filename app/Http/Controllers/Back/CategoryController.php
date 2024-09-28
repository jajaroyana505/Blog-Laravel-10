<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.category.index', [
            "page" => 'category',
            'categories' => Category::latest()->get()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [

                "name" => 'required|min:3'
            ]
        );
        $data['slug'] = Str::slug($data['name']);

        Category::create($data);
        return back()->with("success", "Category has been created successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                "name" => 'required|min:3'
            ]
        );
        $data['slug'] = Str::slug($data['name']);

        Category::find($id)->update($data);
        return back()->with("success", "Category has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::find($id);
        // Jika category ditemukan
        if ($category) {
            // Menghapus category
            $category->delete();
            return back()->with('success', 'A category has been deleted successfully.');
        } else {
            // Jika category tidak ditemukan
            return back()->with('error', 'Category not found or already deleted.');
        }
    }
}
