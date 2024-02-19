<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-index.css') }}">
</head>
<body>
    <div class="container">
        @if($posts->isEmpty())
            <span>Нет постов</span>
        @else
            @foreach($posts as $post)
                <div class="card">
                    <h4> Имя: {{ $post->name }} </h4>
                    <img src="{{ $post->poster }}" alt="">
                    <p> Заголовок: {{ $post->desription }} </p>
                    <p> Описание: {{ $post->content }} </p>
                    @foreach($post->categories as $category)
                        <span>Категория: {{ $category->name }} </span>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>
