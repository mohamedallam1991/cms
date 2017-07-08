@extends ('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h1>Register</h1>

        <form action="/register" method="POST">
        {{ csrf_field() }}
        <!-- Name Form Input -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="your Name">
            </div>
            <!-- Email Form Input -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="your Email">
            </div>
            <!-- Password Form Input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="your Password">
            </div>
            <!-- Re-Password Form Input -->
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="your Password Again">
            </div>
            <!-- Submit button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="form-group">
                @include('layouts.errors')
            </div>

        </form>

    </div>


@endsection