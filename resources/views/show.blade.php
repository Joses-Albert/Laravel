<h1>{{ $article->title }}</h1>
<p>{{ $article->body }}</p>

<h2>Comments</h2>
<form action="{{ route('comments.store', $article->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="body">Add a comment:</label>
        <textarea name="body" id="body" rows="3" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="comments">
    @foreach ($comments as $comment)
        <div class="comment">
            <div class="comment-header">
                <strong>{{ $comment->user->name }}</strong>
                <span class="comment-date">{{ $comment->created_at->format('M d, Y') }}</span>
            </div>
            <p>{{ $comment->body }}</p>
        </div>
    @endforeach
</div>