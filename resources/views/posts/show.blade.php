<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts | show</title>
</head>

<body>
    <div class="container">
        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>

        <button><a href="{{ route('posts.edit', $post->id) }}">update post</a></button>
        <button><a href="{{ route('posts.index') }}">Home</a></button>
    </div>
</body>

</html>

<style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        min-height: 80vh;
    }

    .alert {
        background: green;
        color: white;
        padding: 15px;
        margin: 20px;
        border-radius: 20px;
    }
    button {
        margin: 5px;
    }
</style>
