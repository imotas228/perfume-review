<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Perfume Review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Perfume Review</h1>
        <div class='reviews'>  <!--口コミ一覧-->
            @foreach ($perfumes as $perfume)
                <div class='review'> <!--口コミのまとまりの段落-->
                    <h2 class='title'>{{ $perfume->title }}</h2>
                    <p class='body'>{{ $perfume->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>