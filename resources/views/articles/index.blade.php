<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>articles</title>
</head>

<body>
    <div class="container">
        <div class="articles">
            @foreach ($articles as $article)
                <div class="article">
                    <span>{{ $article->title }}</span>
                    <p>{{ $article->content }}</p>
                    <span>created by: {{ $article->user->name }}</span><br>
                    <span>categories</span><br>
                    @foreach ($article->categories as $cat)
                        <span>{{ $cat->title }}</span><br>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
