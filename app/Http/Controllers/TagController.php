<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {
        
    }

    public function show($id) {
        
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
