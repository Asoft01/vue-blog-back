<?php

namespace App\Http\Controllers\Comments;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return ['comments' => $comments];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'alphabet' => 'required',
            'comment' => 'required',
            'post_id' => 'required'
        ];

        $this->validate($request, $rules);

        $data= $request->all();
        $comment = Comment::create($data);
        return ['comment' => $comment];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return ['status' => 'Comment Deleted Successfully'];
    }
}
