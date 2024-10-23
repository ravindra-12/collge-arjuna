<!DOCTYPE html>
<html>
<head>
    <title>Forum Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Forum Post</h1>
        <p>{{ $post->postcontent }}</p>
        <p>Posted by: {{ $post->user->name }}</p>

        <div class="mt-3">
            <form action="{{ route('forum_posts.like', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary">
                    Like ({{ $post->likes->count() }})
                </button>
            </form>

            @if($post->likes->where('user_id', Auth::id())->count())
                <form action="{{ route('forum_posts.unlike', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Unlike
                    </button>
                </form>
            @endif
        </div>

        <h3>Comments</h3>
        <ul>
            @foreach($post->comments as $comment)
                <li>{{ $comment->comment }} - <strong>{{ $comment->user->name }}</strong></li>
            @endforeach
        </ul>

        <h3>Add a Comment</h3>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="forum_post_id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Comment</button>
        </form>
    </div>
</body>
</html>
