<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagsRequest;
use App\Models\tags\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $tags=Tag::orderBy('updated_at','desc')->paginate(5);
       return view('admin.tags.index',[
        'tags'=>$tags,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'id' => 'required',
            'name' => 'required',
           

        ]);
        Tag::create($request->all());
        return redirect()->route('tag.index')
            ->with('success', 'tag created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // return view('admin.tags.show', compact('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.tags.edit',compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([

            'id' => 'required',
            'name' => 'required',
        
        ]);
        $tag->update($request->all());
        return redirect()->route('tag.index')
            ->with('success', 'Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();
        return redirect()->route('tags.index')
            ->with('success', 'Tag deleted successfully');
    }
}
