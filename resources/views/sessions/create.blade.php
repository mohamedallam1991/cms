@extends('layouts.master')


@section('content')

    <div class="col-sm-8">
        <h1>Sign in</h1>
        <form action="/login" method="POST">
        {{ csrf_field()  }}
            <!-- Email Form Input -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="your Email">
            </div>
            <!-- Password Form Input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="your Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="form-group">
                @include('layouts.errors')
            </div>
        </form>

    </div>

@endsection