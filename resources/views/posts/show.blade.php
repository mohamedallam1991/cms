@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <h1>{{$post->title}}</h1>

        <p>{{$post->body}}</p>

        @if(count($post->comments))
            <hr>
            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment )
                        <li class="list-group-item">
                            <strong>
                                {{$comment->created_at->diffForHumans()}}
                                <hr>
                            </strong>
                                {{$comment->body}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- ADD a Comment --}}

        <div class="card">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea required name="body" id="body" placeholder="enter a comment" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>


    </div><!-- /.blog-main -->


@endsection