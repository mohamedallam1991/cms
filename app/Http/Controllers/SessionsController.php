<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function redirect;

class SessionsController extends Controller
{

    //

//    public function __construct()
//    {
//        $this->middleware('guest', ['except' => 'destroy'  ]);
////        ->except(['destroy']);
//
//    }

    public function create()
    {
        return view('sessions.create');

    }

    public function store()
    {
        $user = request(['email', 'password']);
        if ( ! auth()->attempt($user) ) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
