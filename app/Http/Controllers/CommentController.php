<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;


class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $comment = new Comment();

        $comment->name = $data['name'];
        $comment->email = $data['email'];

        $comment->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): ?bool
    {
//         return $comment->delete()->with('success', 'Комментарий успешно удален');
        return $comment->delete();
//    public function destroy($id): RedirectResponse
//    {
//        $comment=Comment::where('id',$id)->first();
//        $comment->delete();
//        return redirect()->back();
//    }

//    public function destroy($id): RedirectResponse
//    {
//        $post = Comment::find($id);
//        $post->delete();
//        return redirect()->back();
//        $post = Post::find($id);
//        $post->delete();
    }
}
