<div>
    @foreach ($comments as $comment)
        <p>{{ $comment->body }}</p>
    @endforeach
</div>
