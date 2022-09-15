<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }
    public function create() {
        return view('tags.create');
    }

    public function store(StoreTagRequest $request) {
        Tag::create($request->validated());

        return redirect()->route('tags.index')->with('success', 'Tag successfully inserted.');
    }

    public function show($id) {
        
    }

    public function edit(Tag $tag) {
        return view('tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag) {
        $tag->update($request->validated());

        return redirect()->route('tags.index')->with('success', 'Tag updated sucessfully.');
    }

    public function destroy(Tag $tag) {
        $tag->delete();
        
        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully.');
    }
}
