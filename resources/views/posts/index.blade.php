<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
</head>

<body>
    @include('includes.nav')
    <div class="content">
        <h1>Welcome to posts index page.</h1>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <button><a href="{{ route('posts.create') }}">Add New Post</a></button>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <span>{{ $post->title }}</span>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('posts.show', $post->id) }}">show full post</a>
                    <br>
                    <a href="{{ route('posts.edit', $post->id) }}">update post</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input id="delete-btn" type="submit" value="delete this post">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

<style>
    body {
        text-align: center;
    }

    .posts {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
    }

    .post {
        background-color: darkcyan;
        padding: 5px;
        margin: 5px;
        width: 50%;
        color: white;
        text-align: center;
    }

    .post a {
        text-decoration: none;
        color: white;
        transition: all .3s ease;
    }

    .post a:hover {
        font-weight: bold;
    }

    #delete-btn {
        background-color: red;
        color: white;
        margin: 3px;
        padding: 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .alert {
        background: green;
        color: white;
        padding: 15px;
        margin: 20px;
        border-radius: 20px;
    }

    .content {
        padding-top: 100px;
    }
</style>
