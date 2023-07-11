@if ($savedPosts !== null && !$savedPosts->isEmpty())
    <ul>
        @foreach ($savedPosts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@else
    <p>No saved posts found.</p>
@endif
