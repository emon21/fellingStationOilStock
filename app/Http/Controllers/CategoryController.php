<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Category::create(['tank_name' => $request->tank_name]);
        return redirect()->route('category.index');
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
    public function edit(Category $category)
    {
        //
        return view('category.edit',['category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //

        $category->tank_name = $request->tank_name;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
 
        $category->delete();
        return redirect()->route('category.index');
    }

    # category with calibaration
    public function calibaration(string $id){

        $categories = category::where('id', $id)->with('calibaration')->get();

        // $categories = Category::with('calibaration')->get();

        return view('home',compact('categories'));

    }
}
