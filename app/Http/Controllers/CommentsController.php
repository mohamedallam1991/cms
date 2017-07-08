<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;
use function redirect;

class CommentsController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required']);
        $post->addComment(request('body'));

        return back();
    }


}
