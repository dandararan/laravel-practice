<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>All posts!</h1>

    <a href="{{ route('posts.create') }}">Create new Post</a>

    @forelse ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit"
                    onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
        </div>
    @empty
        <p>No posts</p>
    @endforelse
</body>

</html>
