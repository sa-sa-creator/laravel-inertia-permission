<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {
        return inertia('Category/Index',
        [
            'categorys' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Category::create($request->all());

        // ... three dot to merge request.
        // Category::create([
        //     ... $request->all(),
        //     ... $request->validate([
        //         'cate_name' => 'required',
        //         'cate_description' => 'required',
        //     ])
        // ]);

        Category::create($request->validate([
            'cate_name' => 'required',
            'cate_description' => 'required'
        ]));
        return redirect()->route('category.index')
        ->with('success','Category was created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
       return inertia('Category/Show',
       [
            'category' => $category
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return inertia('Category/Edit',
       [
            'category' => $category
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update(
        $request->validate([
            'cate_name' => 'required',
            'cate_description' => 'required'
        ]));
        return redirect()->route('category.index')
        ->with('success','Category was updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()
        ->with('success','Category was deteled?');
    }
}
