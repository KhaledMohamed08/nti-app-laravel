<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts | create</title>
</head>
<body>
    <h1>create New Post</h1>
    <div class="post-form">
        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Post Title*</label>
            <input type="text" name="title" id="title">
            @error('title')
                <span>{{ $message }}</span>
            @enderror
            <label for="content">Post Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            @error('content')
                <span>{{ $message }}</span>
            @enderror
            <input type="submit" value="Create New Post">
        </form>
        <button><a href="{{ route('posts.index') }}">Home</a></button>
    </div>
</body>
</html>

<style>
    body {
        text-align: center;
    }

    .post-form {
        width: 100%;
    }

    .post-form form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .post-form form * {
        margin: 3px;
        padding: 3px;
    }

    span {
        color: red;
    }

    .errors {
        background: lightcoral;
        color: white;
    }

    .errors span {
        color: white;
    }
</style>
