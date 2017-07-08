<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use function redirect;

class RegistrationController extends Controller
{

    //
    public function create()
    {

        return view('registration.create');

    }

    public function store()
    {
        // validate the user
        $this->validate(request(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // create and save
        $user = User::create(
            request(['name', 'email', 'password'])
        );

        //sign in
        auth()->login($user);

        return redirect()->home();

    }
}
