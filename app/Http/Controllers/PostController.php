<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $post = [
        1 => [
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
        ],
        2 => [
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
        ],
    ]; 
    public function index()
    {
        return view('posts.index', ['posts' => $this->post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "New post created with title: " . $request->title;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(isset(($this->post[$id]))) {
            return view('posts.show', ['post' => $this->post[$id]]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(isset(($this->post[$id]))) {
            return view('posts.edit', ['post' => $this->post[$id]]);
        }
        else{
            return "Post not found.";
        }

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Post ID $id updated with title: " . $request->title;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Post ID $id deleted.";
    }
}
