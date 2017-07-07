@extends ('layouts.master')

@section ('content')


    <div class="col-sm-8 blog-main">

        <h1>Create a Post</h1>
        <hr>
        <form action="/posts" method="post">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="title">Title</label>
                <input placeholder="enter the title" class="form-control" id="title" name="title" type="text">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" ></textarea>
            </div>

            {{--<div class="form-group">--}}
                {{--<label for="exampleInputFile">File input</label>--}}
                {{--<input type="file" id="exampleInputFile">--}}
                {{--<p class="help-block">Example block-level help text here.</p>--}}
            {{--</div>--}}

            {{--<div class="checkbox">--}}
                {{--<label>--}}
                    {{--<input type="checkbox"> Check me out--}}
                {{--</label>--}}
            {{--</div>--}}
            <div class="form-group">
             <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors');
        </form>

    </div>

@endsection