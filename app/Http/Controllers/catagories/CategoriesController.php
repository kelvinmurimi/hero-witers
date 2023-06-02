<?php

namespace App\Http\Controllers\catagories;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriesRequest;
use App\Models\category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::orderBy('updated_at','desc')->paginate(2);
       return view('admin.categories.index',[
        'categories'=>$categories,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        //
       $request->validated();
       $slug=Str::slug($request->category_name,'-');
       Category::create(
        [
            'name'=>$request->category_name,
            'slug'=>$slug,
        ]
       );
       return redirect(route('categories.index'))->with('success',"Category Created Successfully");
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
      return view('admin.categories.edit',[
        'category'=>$category,
      ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoriesRequest $request , Category $category)
    {
        //
        $request->validated();
        $slug=Str::slug($request->category_name,'-');
        $category->update(
            [
                'name'=>$request->category_name,
                'slug'=>$slug,
            ]
           );
           return redirect(route('categories.index'))->with('success',"Category Updated Successfully");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
       $category->delete();
       return redirect(route('categories.index'))->with('danger',"Category Deleted Successfully !");

    }
}
