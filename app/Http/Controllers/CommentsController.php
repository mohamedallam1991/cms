<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;
use function redirect;

class CommentsController extends Controller
{

    //
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required']);
        $post->addComment(request('body'));

        return back();
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
