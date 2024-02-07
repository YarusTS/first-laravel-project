<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Comment::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Application|Factory
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request): Comment
    {
        $data = $request->validated();

        $image = $data ['poster'];
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move(
            storage_path() . '/app/public/comments/posters',
            $imageName
        );

        $comment = new Comment();

        $comment->name = $data['name'];
        $comment->content = $data['content'];
        $comment->poster = $imageName;

        $comment->save();

        return $comment;
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment): Comment
    {
        return $comment;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): ?bool
    {
        return $comment->delete();
    }
}
